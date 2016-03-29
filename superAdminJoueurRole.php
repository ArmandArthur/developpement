<?php
if (!isset($_SESSION))
{   
    session_start();
}

require_once 'initClass.php';
require_once 'init.php';

if(isset($_SESSION['idJoueurCourant']) && $_SESSION['idJoueurCourant'] != '')
{
    $JoueurManager = new JoueurManager($db);
    $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
    
    $RoleManager = new RoleManager($db);
    
    $Privilege = new Privilege($JoueurManager->getPrivilege($Joueur->getId()));
    
    if($Privilege->hasPermission('roleJoueur'))
    {
        if(isset($_POST) && count($_POST) > 0 )
        {  
           // Le traitement de l'insert
           if($_POST['action'] == "ajouter")
           {
             $insert = true;

             // Si un champ n'a pas été saisie par l'utisateur
             foreach($_POST as $key => $value)
             {
                  if($value == ''){
                      $insert = false;
                  }
             }

             if($insert)
             {
                 $joueurPost = $JoueurManager->login($_POST['login']);
                 if($joueurPost)
                 {
                     // Instance du joueur saisie par le formulaire
                     $joueurPost = new Joueur($joueurPost); 
                     
                     // Suppresion du joueur de son groupe précédent
                     $RoleManager->delete_joueur_role($joueurPost->getId()); 

                     // Insertion table de liaison
                     $RoleManager->insert_joueur_role($joueurPost->getId(),$_POST['roleId']);   
                 }

             }
           }
           // Suppression en ajax
           elseif($_POST['action'] == "supprimer")
           {
               $joueurId = $_POST['joueurId'];
               $RoleManager->delete_joueur_role($joueurId);
               
               echo true;
               die();
           }
        }

        //Liste des rôles
        $roleGetAll = $RoleManager->getAll();
        $listeRole = array();
        if(count($roleGetAll) > 0)
        {
            foreach ($roleGetAll as $role) 
            {
                // Instance de chaque permission
                $listeRole[] = new Role($role);
            }
        }

        // Liste des joueurs
        $listeJoueur = $JoueurManager->getAll();
        
        // Contruction d'une variable selectJoueurs au format d'un optiongroup
        $selectJoueurs = array();
        if(count($listeJoueur) > 0)
        {
            foreach ($listeJoueur as $key => $item) 
            {
                if( !isset($selectJoueurs[$item['roleNom']]) )
                {
                    $selectJoueurs[$item['roleNom']] = array();
                }
                array_push($selectJoueurs[$item['roleNom']],new Joueur($item))     ;
            }
        }        

        $smarty->assign('listeRole',$listeRole);

        $smarty->assign('Joueur',$Joueur);
        $smarty->assign('selectJoueurs',$selectJoueurs);
        $smarty->assign('Privilege',$Privilege);
        $smarty->display('page/pageSuperAdminJoueurRole.tpl');
    }
    else
    {
        header('Location: homepage.php');    
    }    
}
else
{
    header('Location: index.php');    
}
?>