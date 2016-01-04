<?php
session_start();
$_SESSION['personnageCourant'] = 1;

//Smarty
require 'smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

//PDO
$db = new PDO('mysql:host=localhost;dbname=developpement', 'root','');

//Class
require_once 'CarteManager.class.php';
require_once 'Carte.class.php';
require_once 'PersonnageManager.class.php';
require_once 'Personnage.class.php';
require_once 'PersonnageType.class.php';
require_once 'PersonnageTypeManager.class.php';

$CarteManager = new CarteManager($db);
$Carte = new Carte($CarteManager->get(1));

$PersonnageManager = new PersonnageManager($db);
$Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));

foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item)
{
    $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
}

$direction = $Personnage->getDirection($Personnages, $Carte);

$PersonnageTypeManager = new PersonnageTypeManager($db);
$PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

$smarty->assign('carte', $Carte);
$smarty->assign('direction', $direction);
$smarty->assign('personnage', $Personnage);
$smarty->assign('personnages', $Personnages);
$smarty->assign('personnageType', $PersonnageType);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/map.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/caracteristiques.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <div id="message">
    </div>
    <div id="menu">
        <?php
        $smarty->display('menu.tpl'); 
        ?>
    </div>
    <div id="map">
        <?php
            $smarty->display('map.tpl');  
        ?>	
    </div>
    <div id="caracteristiques">
        <?php
        $smarty->display('caracteristiques.tpl');
        ?>
    </div>
</body>
</html>


