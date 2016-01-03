<?php
session_start();

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

if(isset($_REQUEST))
{
	$action = $_REQUEST['action'];
	switch ($action):
	
		case 'seDeplacer':
                        $CarteManager = new CarteManager($db);
                        $Carte = new Carte($CarteManager->get(1));
                        $PersonnageManager = new PersonnageManager($db);
                        $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
                        
			$positionX = $_REQUEST['positionX'];
			$positionY = $_REQUEST['positionY'];
                        $json = array();
                        
                        // Verifie si l'utisateur n'a pas changé les données html5
                        if( $Personnage->getPositionX() + 1 == $positionX && $Personnage->getPositionY() == $positionY ||
                            $Personnage->getPositionX() + 1 == $positionX && $Personnage->getPositionY()+1 == $positionY ||
                            $Personnage->getPositionX() + 1 == $positionX && $Personnage->getPositionY()-1 == $positionY ||
                            $Personnage->getPositionX() - 1 == $positionX && $Personnage->getPositionY() == $positionY ||
                            $Personnage->getPositionX() - 1 == $positionX && $Personnage->getPositionY()+1 == $positionY ||
                            $Personnage->getPositionX() - 1 == $positionX && $Personnage->getPositionY()-1 == $positionY  ||                                  
                            $Personnage->getPositionX() == $positionX && $Personnage->getPositionY()+1 == $positionY ||
                            $Personnage->getPositionX() == $positionX && $Personnage->getPositionY()-1 == $positionY )                                                                  
                        {
                            if($Personnage->getMouvementRestant() == 0)
                            {
                                $json['message'] = $smarty->fetch('message/messageMouvement.tpl');
                            }
                            else
                            {
                                $Personnage->seDeplacer($positionX,$positionY);
                                $Personnage->setMouvementRestant($Personnage->getMouvementRestant()-1);
                                $PersonnageManager->update($Personnage);   
                            }
                        }
                        
                        foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item)
                        {
                            $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
                        }

                        $direction = $Personnage->getDirection($Personnages, $Carte);
			$smarty->assign('carte', $Carte);
			$smarty->assign('direction', $direction);
			$smarty->assign('personnage', $Personnage);
                        $smarty->assign('personnages', $Personnages);
                        
			$json['map'] = utf8_encode($smarty->fetch('map.tpl'));
			$json['caracteristiques'] = utf8_encode($smarty->fetch('caracteristiques.tpl'));
                        
			echo json_encode($json);
			break;
		default:
                case 'selectPersonnage':
                       
                        $_SESSION['personnageCourant'] = $_REQUEST['selectedPersonnage'];
                        
                        $CarteManager = new CarteManager($db);
                        $Carte = new Carte($CarteManager->get(1));
                        
                        $PersonnageManager = new PersonnageManager($db);
                        $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));

                        foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item)
                        {
                            $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
                        }
                        
                        $direction = $Personnage->getDirection($Personnages, $Carte);
			$smarty->assign('carte', $Carte);
			$smarty->assign('direction', $direction);
			$smarty->assign('personnage', $Personnage);
                        $smarty->assign('personnages', $Personnages);
                        
                        $json = array();
			$json['map'] = utf8_encode($smarty->fetch('map.tpl'));
			$json['caracteristiques'] = utf8_encode($smarty->fetch('caracteristiques.tpl'));
                    
			echo json_encode($json);
                    break;
	endswitch;
	
}
