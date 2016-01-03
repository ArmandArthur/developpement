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
require_once 'Carte.class.php';
require_once 'PersonnageManager.class.php';
require_once 'Personnage.class.php';

$CarteManager = new CarteManager($db);
$Carte = new Carte($CarteManager->get(1));

$PersonnageManager = new PersonnageManager($db);
$Personnage = new Personnage($PersonnageManager->get(1));



if(isset($_REQUEST))
{
	$action = $_REQUEST['action'];
	switch ($action):
	
		case 'seDeplacer':
			$positionX = $_REQUEST['positionX'];
			$positionY = $_REQUEST['positionY'];
                        $Personnage->seDeplacer($positionX,$positionY);
			$PersonnageManager->update($Personnage);
			$Personnnage = $PersonnageManager->get(1);
                        foreach ($PersonnageManager->getAll(1) as $key => $item)
                        {
                            $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
                        }

                        $direction = $Personnage->getDirection($Personnages, $Carte);
			$smarty->assign('carte', $Carte);
			$smarty->assign('direction', $direction);
			$smarty->assign('personnage', $Personnage);
                        $smarty->assign('personnages', $Personnages);
                        
			$json = array('map' => $smarty->fetch('map.tpl'));
			echo json_encode($json);
			
			break;
			
		default:
	endswitch;
	
}
