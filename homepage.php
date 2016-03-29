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
    
    $Privilege = new Privilege($JoueurManager->getPrivilege($Joueur->getId()));
    
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
    
    $smarty->assign('Joueur', $Joueur);
    $smarty->assign('selectJoueurs', $selectJoueurs);
    $smarty->assign('Privilege', $Privilege);
    $smarty->display('page/pageHomepage.tpl');  
}
else
{
    header('Location: index.php');    
}
?>




