<?php

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
require_once 'PersonnageManager.class.php';

$CarteManager = new CarteManager($db);
$Carte = $CarteManager->get(1);

$PersonnageManager = new PersonnageManager($db);
$Personnage = $PersonnageManager->get(1);
 //$personnage = new Personnage(1);
 //echo $personnage->getNom();
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/map.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div id="map">
	<?php
	$smarty->assign('carte', $Carte);
	$smarty->assign('personnage', $Personnage);
	$smarty->display('map.tpl');
?>	
</div>
</body>
</html>


