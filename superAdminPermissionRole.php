<?php

require_once 'initClass.php';
require_once 'init.php';

if (!isset($_SESSION))
{   
    session_start();
}

if(isset($_SESSION['idJoueurCourant']) && $_SESSION['idJoueurCourant'] != '')
{
    $JoueurManager = new JoueurManager($db);
    $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
    
    $PermissionManager = new PermissionManager($db);
    $RoleManager = new RoleManager($db);
    
    $Privilege = new Privilege($JoueurManager->getPrivilege($Joueur->getId()));
    
    if($Privilege->hasPermission('rolePermission'))
    {
        if(isset($_POST) && count($_POST) > 0 )
        {  
           // Le traitement de l'insert
           if($_POST['action'] == "ajouter")
           {
               // Test si un roleid est sélectionné
               if($_POST['roleId'] != '')
               { 
                    // Suppression des enregistrements de la table de jointure               
                    $RoleManager->delete_permission_role($_POST['roleId']);

                    // Insertion + verification du post permission id
                    if(isset($_POST['permissionId']) && count($_POST['permissionId']) > 0 )
                    {
                        $permissionIdCheckbox = $_POST['permissionId'];

                        // Parcours de toute les permissions sélectionnés
                        foreach($permissionIdCheckbox as $key => $permissionId)
                        {
                            $RoleManager->insert_permission_role($_POST['roleId'],$permissionId);
                        }
                        
                        // Pour que les options soit décoché après avoir fait un insert
                        $_SESSION['listePermissionSelected'] = '';
                        $_SESSION['roleIdSelected'] = '';   
                        
                    }
                   
                    //On efface les post
                    header('Location: superAdminPermissionRole.php');  
                    
               }
           }
           // Le cas modifier est sur le onchange du select
           elseif($_POST['action'] == "modifier")
           {
               // Récupération des permissions associer à un rôle
               $permissionRoleGetBy = $RoleManager->getBy_permission_role('roleId',$_POST['roleId']);
               $listePermissionSelected = array();
                if(count($permissionRoleGetBy) > 0)
                {
                    foreach ($permissionRoleGetBy as $item) 
                    {
                        $listePermissionSelected[] = new Permission($PermissionManager->get($item['permissionId']));
                    }
                }
                $_SESSION['listePermissionSelected'] = $listePermissionSelected;
                $_SESSION['roleIdSelected'] = $_POST['roleId'];
                
                echo true;
                die();
           }
           else{
               
           }
        }

         //Liste des permissions
        $permissionGetAll = $PermissionManager->getAll();
        $listePermission = array();
        if(count($permissionGetAll) > 0)
        {
            foreach ($permissionGetAll as $permission) 
            {
                // Instance de chaque permission
                $listePermission[] = new Permission($permission);
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
        
        // Première fois qu'on arrive sur la page
        $_SESSION['listePermissionSelected'] = ( isset($_SESSION['listePermissionSelected']) && ($_SESSION['listePermissionSelected'] != '') ) ? $_SESSION['listePermissionSelected'] : '' ;
        $_SESSION['roleIdSelected'] = ( isset($_SESSION['roleIdSelected']) && ($_SESSION['roleIdSelected'] != '') ) ? $_SESSION['roleIdSelected'] : '' ;

        $smarty->assign('listePermission',$listePermission);
        $smarty->assign('listeRole',$listeRole);
        $smarty->assign('listePermissionSelected', $_SESSION['listePermissionSelected']);
        $smarty->assign('roleIdSelected', $_SESSION['roleIdSelected'] );

        $smarty->assign('Joueur',$Joueur);
        $smarty->assign('selectJoueurs',$selectJoueurs);
        $smarty->assign('Privilege',$Privilege);
        $smarty->display('page/pageSuperAdminPermissionRole.tpl');     
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