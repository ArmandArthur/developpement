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
    $RoleManager = new RoleManager($db);
    
    $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
    $Privilege = new Privilege($JoueurManager->getPrivilege($Joueur->getId()));
    
    if($Privilege->hasPermission('role'))
    {
        if( isset($_POST['action']) && $_POST['action'] == "ajouter")
        {
             $insert = true;

             // Si un champ n'a pas été saisie par l'utisateur
             foreach($_POST as $key => $value)
             {
                  if($value == ''){
                      $insert = false;
                  }
             }

             // Si champs complets, insertion en base de donnée
             if($insert)
             {              
                $role = new Role($_POST);
                $RoleManager->insert($role);                    
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
        $smarty->assign('Privilege', $Privilege);
        $smarty->assign('Joueur',$Joueur);
        $smarty->assign('selectJoueurs',$selectJoueurs);
        $smarty->display('page/pageSuperAdminRole.tpl');         
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