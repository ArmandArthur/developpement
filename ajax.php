<?php
require_once 'smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

//PDO
$db = new PDO('mysql:host=localhost;dbname=developpement', 'root','');

require_once 'CarteManager.class.php';
require_once 'PersonnageManager.class.php';

$CarteManager = new CarteManager($db);
$Carte = $CarteManager->get(1);

$PersonnageManager = new PersonnageManager($db);
$Personnage = $PersonnageManager->get(1);

if(isset($_REQUEST))
{
	$action = $_REQUEST['action'];
	switch ($action):
	
		case 'seDeplacer':
			$positionX = $_REQUEST['positionX'];
			$positionY = $_REQUEST['positionY'];
			$Personnage->setPositionX($positionX);
			$Personnage->setPositionY($positionY);
			$PersonnageManager->update($Personnage);
			$Personnnage = $PersonnageManager->get(1);
			$smarty->assign('carte', $Carte);
			$smarty->assign('personnage', $Personnage);
			$json = array('map' => $smarty->fetch('map.tpl'));
			echo json_encode($json);
			
			break;
			
		default:
	endswitch;
	
}
