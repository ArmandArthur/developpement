<?php
session_start();

//Class
require_once 'CarteManager.class.php';
require_once 'Carte.class.php';
require_once 'JoueurManager.class.php';
require_once 'Joueur.class.php';
require_once 'PersonnageManager.class.php';
require_once 'Personnage.class.php';
require_once 'PersonnageType.class.php';
require_once 'PersonnageTypeManager.class.php';

//Smarty
require 'smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

//PDO
$db = new PDO('mysql:host=localhost;dbname=developpement', 'root','');

if(isset($_SESSION['idJoueurCourant']) && $_SESSION['idJoueurCourant'] != '')
{
    $JoueurManager = new JoueurManager($db);
    $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
    
    $listePersonnage = $JoueurManager->getListePersonnageFromJoueur($Joueur->getId());
    
    $personnagePrincipal =  array_slice($listePersonnage, 0, 1);
    $listePersonnage =  array_slice($listePersonnage,1);
    
    $_SESSION['personnageCourant'] = $personnagePrincipal[0]->id;

    $PersonnageManager = new PersonnageManager($db);
    $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
   if( strtotime(date('Y-m-d H:i:s')) > strtotime($Personnage->getProchainTourDeJeu()) )
    {
       $Personnage->setMouvement(0);
       $Personnage->setNombreAttaque(0);
       $PersonnageManager->update($Personnage);
    }
    $CarteManager = new CarteManager($db);
    $Carte = new Carte($CarteManager->get($Personnage->getPlanId()));
    
    $Personnages = array();
    
    if(count($listePersonnage) > 0)
    {
        foreach ($listePersonnage as $key => $item) 
        {
            $Personnages[] = new Personnage($PersonnageManager->get($item->id));
        }
    }
    
    $listeAdversaire = $PersonnageManager->getAdversaire($Joueur->getId(),$Personnage->getPlanId());
    $Adversaires = array();
    if(count($listeAdversaire) > 0)
    {
        foreach ($listeAdversaire as $key => $item) 
        {
            $Adversaires[] = new Personnage($PersonnageManager->get($item->id));
        }
    }
    $PersonnagesTemp = array_merge($Personnages,$Adversaires);
    $direction = $Personnage->getDirection($PersonnagesTemp, $Carte);

    $PersonnageTypeManager = new PersonnageTypeManager($db);
    $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

    $smarty->assign('carte', $Carte);
    $smarty->assign('direction', $direction);
    $smarty->assign('personnage', $Personnage);
    $smarty->assign('personnages', $Personnages);
    $smarty->assign('adversaires', $Adversaires);
    $smarty->assign('personnageType', $PersonnageType);
    $smarty->display('page/jeu.tpl');
}
else
{
    header('Location: index.php');    
}
?>




