<?php

session_start();

//Smarty
require 'smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

//PDO
$db = new PDO('mysql:host=localhost;dbname=developpement', 'root', '');

//Class
require_once 'CarteManager.class.php';
require_once 'Carte.class.php';
require_once 'JoueurManager.class.php';
require_once 'Joueur.class.php';
require_once 'PersonnageManager.class.php';
require_once 'Personnage.class.php';
require_once 'PersonnageType.class.php';
require_once 'PersonnageTypeManager.class.php';

if (isset($_REQUEST)) {
    $action = $_REQUEST['action'];
    switch ($action):
            case 'seLoguer':
            $login = $_REQUEST['login'];
            $JoueurManager = new JoueurManager($db);
            $joueur = $JoueurManager->login($login);
            if($joueur)
            {
                $_SESSION['idJoueurCourant'] = $joueur->id;
                echo true;
            }
        break;
        case 'seDeplacer':
            $CarteManager = new CarteManager($db);
            $Carte = new Carte($CarteManager->get(1));
            $PersonnageManager = new PersonnageManager($db);
            $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
            $PersonnageTypeManager = new PersonnageTypeManager($db);
            $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

            $positionX = $_REQUEST['positionX'];
            $positionY = $_REQUEST['positionY'];
            $json = array();

            // Verifie si l'utisateur n'a pas changé les données html5
            if ($Personnage->getPositionX() + 1 == $positionX && $Personnage->getPositionY() == $positionY ||
                    $Personnage->getPositionX() + 1 == $positionX && $Personnage->getPositionY() + 1 == $positionY ||
                    $Personnage->getPositionX() + 1 == $positionX && $Personnage->getPositionY() - 1 == $positionY ||
                    $Personnage->getPositionX() - 1 == $positionX && $Personnage->getPositionY() == $positionY ||
                    $Personnage->getPositionX() - 1 == $positionX && $Personnage->getPositionY() + 1 == $positionY ||
                    $Personnage->getPositionX() - 1 == $positionX && $Personnage->getPositionY() - 1 == $positionY ||
                    $Personnage->getPositionX() == $positionX && $Personnage->getPositionY() + 1 == $positionY ||
                    $Personnage->getPositionX() == $positionX && $Personnage->getPositionY() - 1 == $positionY) 
            {
                // Message warning 
                if ($Personnage->getMouvement() == 0) 
                {
                    $json['message'] = $smarty->fetch('message/messageMouvement.tpl');
                } else 
                {
                    $Personnage->seDeplacer($positionX, $positionY);
                    $PersonnageManager->update($Personnage);
                }
            }
            $Personnages = array();
            foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item) 
            {
                $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
            }

            $direction = $Personnage->getDirection($Personnages, $Carte);
            $smarty->assign('carte', $Carte);
            $smarty->assign('direction', $direction);
            $smarty->assign('personnage', $Personnage);
            $smarty->assign('personnages', $Personnages);
            $smarty->assign('personnageType', $PersonnageType);

            $json['map'] = utf8_encode($smarty->fetch('map.tpl'));
            $json['caracteristique'] = utf8_encode($smarty->fetch('caracteristique.tpl'));

            echo json_encode($json);
            break;
        case 'selectPersonnage':

            $_SESSION['personnageCourant'] = $_REQUEST['selectedPersonnage'];

            $CarteManager = new CarteManager($db);
            $Carte = new Carte($CarteManager->get(1));

            $PersonnageManager = new PersonnageManager($db);
            $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));

            $PersonnageTypeManager = new PersonnageTypeManager($db);
            $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

            $Personnages = array();
            foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item) 
            {
                $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
            }

            $direction = $Personnage->getDirection($Personnages, $Carte);
            $smarty->assign('carte', $Carte);
            $smarty->assign('direction', $direction);
            $smarty->assign('personnage', $Personnage);
            $smarty->assign('personnages', $Personnages);
            $smarty->assign('personnageType', $PersonnageType);

            $json = array();
            $json['map'] = utf8_encode($smarty->fetch('map.tpl'));
            $json['caracteristique'] = utf8_encode($smarty->fetch('caracteristique.tpl'));

            echo json_encode($json);
            break;

        case 'attaquer':
            $personnageAttaquerId = $_REQUEST['personnageAttaquerId'];

            $CarteManager = new CarteManager($db);
            $Carte = new Carte($CarteManager->get(1));

            $PersonnageManager = new PersonnageManager($db);
            $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
            $PersonnageAttaquer = new Personnage($PersonnageManager->get($personnageAttaquerId));
            
            $seToucher = false;
            if($PersonnageAttaquer->seToucher($Personnage))
            {
                $seToucher = true;
                $PersonnageAttaquer->recevoirDegat($Personnage->getDegat());
                if($PersonnageAttaquer->isMort())
                {
                    $PersonnageAttaquer->setMort();    
                }
                $PersonnageManager->update($PersonnageAttaquer);   
            }
            
            
            $PersonnageTypeManager = new PersonnageTypeManager($db);
            $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

            $Personnages = array();
            if(count($PersonnageManager->getAll($_SESSION['personnageCourant'])) > 0)
            {
                foreach ($PersonnageManager->getAll($_SESSION['personnageCourant']) as $key => $item) 
                {
                    $Personnages[] = new Personnage($PersonnageManager->get($item['id']));
                }

            }            
            $direction = $Personnage->getDirection($Personnages, $Carte);
            
            $smarty->assign('seToucher', $seToucher);
            $smarty->assign('carte', $Carte);
            $smarty->assign('direction', $direction);
            $smarty->assign('personnage', $Personnage);
            $smarty->assign('personnageAttaquer', $PersonnageAttaquer);
            $smarty->assign('personnages', $Personnages);
            $smarty->assign('personnageType', $PersonnageType);

            $json = array();
            $json['map'] = utf8_encode($smarty->fetch('map.tpl'));
            $json['caracteristique'] = utf8_encode($smarty->fetch('caracteristique.tpl'));
            $json['message'] = $smarty->fetch('message/messageAttaque.tpl');
            
            echo json_encode($json);
            break;
    endswitch;
}
