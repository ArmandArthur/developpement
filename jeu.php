<?php

session_start();

//Class
require_once 'CarteManager.class.php';
require_once 'Carte.class.php';
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

if(isset($_SESSION['idJoueurCourant']))
{
    $_SESSION['personnageCourant'] = 1;

    $CarteManager = new CarteManager($db);
    $Carte = new Carte($CarteManager->get(1));

    $PersonnageManager = new PersonnageManager($db);
    $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));

    $Personnages = array();

    if(count($PersonnageManager->getAll($_SESSION['personnageCourant'])) > 0)
    {
        foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item) 
        {
            $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
        }
    }
    
    $direction = $Personnage->getDirection($Personnages, $Carte);

    $PersonnageTypeManager = new PersonnageTypeManager($db);
    $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

    $smarty->assign('carte', $Carte);
    $smarty->assign('direction', $direction);
    $smarty->assign('personnage', $Personnage);
    $smarty->assign('personnages', $Personnages);
    $smarty->assign('personnageType', $PersonnageType);
    $smarty->display('page/jeu.tpl');
}
else
{
    header('Location: index.php');    
}


?>




