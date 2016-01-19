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

//Constante
require_once 'configJeu.php';

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
        case 'activer':
            $PersonnageManager = new PersonnageManager($db);
            
            // Instance du personnage courant
            $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
            
            // Vérification si le personnage a le droit d'activer
            if( strtotime(date('Y-m-d H:i:s')) > strtotime($Personnage->getProchainTourDeJeu()) )
            {
                $Personnage->setTourDeJeu(date('Y-m-d H:i:s'));
                $Personnage->setProchainTourDeJeu(date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))+INT_TOUR_DE_JEU));
                
                $PersonnageTypeManager = new PersonnageTypeManager($db);
                
                // Instance du personnage type
                $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));
                
                $Personnage->setMouvement($PersonnageType->getMouvement());
                $Personnage->setNombreAttaque($PersonnageType->getNombreAttaque());
                
                // Mise à jour du personnage
                $PersonnageManager->update($Personnage);
                
                $smarty->assign('personnage', $Personnage);
                $smarty->assign('personnageType', $PersonnageType);
                
                $json['caracteristique'] = utf8_encode($smarty->fetch('caracteristique.tpl'));
                echo json_encode($json);
            }
            
        break;        
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

        $json = array();
        $Personnages = array();    
        
        $JoueurManager = new JoueurManager($db);
        $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
        
        $listePersonnage = $JoueurManager->getListePersonnageFromJoueur($Joueur->getId());
        
        $PersonnageManager = new PersonnageManager($db);
        foreach ($listePersonnage as $key => $item) 
        {
            if($item->id == $_SESSION['personnageCourant'])
            {
                $_SESSION['personnageCourant'] = $item->id;
            }
            else
            {
                $Personnages[] = new Personnage($PersonnageManager->get($item->id));       
            }
        }
        $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
        if( strtotime(date('Y-m-d H:i:s')) > strtotime($Personnage->getProchainTourDeJeu()) )
        {
            $Personnage->setMouvement(0);
            $Personnage->setNombreAttaque(0);
            $PersonnageManager->update($Personnage);
        }
        
        $CarteManager = new CarteManager($db);
        $Carte = new Carte($CarteManager->get(1));
        
        $PersonnageTypeManager = new PersonnageTypeManager($db);
        $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));


        $positionX = $_REQUEST['positionX'];
        $positionY = $_REQUEST['positionY'];
            

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
    
            $smarty->assign('carte', $Carte);
            $smarty->assign('direction', $direction);
            $smarty->assign('personnage', $Personnage);
            $smarty->assign('personnages', $Personnages);
            $smarty->assign('adversaires', $Adversaires);
            $smarty->assign('personnageType', $PersonnageType);

            $json['map'] = utf8_encode($smarty->fetch('map.tpl'));
            $json['caracteristique'] = utf8_encode($smarty->fetch('caracteristique.tpl'));

            echo json_encode($json);
            break;
        case 'selectPersonnage':

            $_SESSION['personnageCourant'] = $_REQUEST['selectedPersonnage'];

            $JoueurManager = new JoueurManager($db);
             $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
             $listePersonnage = $JoueurManager->getListePersonnageFromJoueur($Joueur->getId());

             $CarteManager = new CarteManager($db);
             $Carte = new Carte($CarteManager->get(1));

             $Personnages = array();
             
             $PersonnageManager = new PersonnageManager($db);
             if(count($listePersonnage) > 0)
             {
                 foreach ($listePersonnage as $key => $item) 
                 {
                     $Personnages[] = new Personnage($PersonnageManager->get($item->id));
                     if($item->id == $_SESSION['personnageCourant'])
                     {
                         $_SESSION['personnageCourant'] = $item->id;
                     }
                 }
             }
             
             $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));          
            if( strtotime(date('Y-m-d H:i:s')) > strtotime($Personnage->getProchainTourDeJeu()) )
             {
                $Personnage->setMouvement(0);
                $Personnage->setNombreAttaque(0);
                $PersonnageManager->update($Personnage);
             }
             $PersonnageTypeManager = new PersonnageTypeManager($db);
             $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

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
             
             $smarty->assign('carte', $Carte);
             $smarty->assign('direction', $direction);
             $smarty->assign('personnage', $Personnage);
             $smarty->assign('personnages', $Personnages);
             $smarty->assign('adversaires', $Adversaires);
             $smarty->assign('personnageType', $PersonnageType);

            $json = array();
            $json['map'] = utf8_encode($smarty->fetch('map.tpl'));
            $json['caracteristique'] = utf8_encode($smarty->fetch('caracteristique.tpl'));

            echo json_encode($json);
            break;

        case 'attaquer':
            $personnageAttaquerId = $_REQUEST['personnageAttaquerId'];

            $JoueurManager = new JoueurManager($db);
             $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
             $listePersonnage = $JoueurManager->getListePersonnageFromJoueur($Joueur->getId());

             $CarteManager = new CarteManager($db);
             $Carte = new Carte($CarteManager->get(1));

            $PersonnageManager = new PersonnageManager($db);
            $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
            $PersonnageAttaquer = new Personnage($PersonnageManager->get($personnageAttaquerId));

             $Personnages = array();
             if(count($listePersonnage) > 0)
             {
                 foreach ($listePersonnage as $key => $item) 
                 {
                     $Personnages[] = new Personnage($PersonnageManager->get($item->id));
                     if($item->id == $_SESSION['personnageCourant'])
                     {
                         $_SESSION['personnageCourant'] = $item->id;
                     }
                 }
             }             
            $seToucher = false;
            $nombreAttaqueDisponible = true;
            if($PersonnageAttaquer->seToucher($Personnage))
            {
                $seToucher = true;
                if($Personnage->getNombreAttaque() <= 0)
                {
                    $nombreAttaqueDisponible = false;
                }    
                else
                {
                    $Personnage->setNombreAttaque($Personnage->getNombreAttaque()-1);
                    $PersonnageAttaquer->recevoirDegat($Personnage->getDegat());
                    if($PersonnageAttaquer->isMort())
                    {
                        $PersonnageAttaquer->setMort();    
                    }
                    $PersonnageManager->update($PersonnageAttaquer);   
                    $PersonnageManager->update($Personnage); 
                }  
            }
            
             $PersonnageTypeManager = new PersonnageTypeManager($db);
             $PersonnageType = new PersonnageType($PersonnageTypeManager->get($Personnage->getPersonnageTypeId()));

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
             
            $smarty->assign('adversaires', $Adversaires);
            $smarty->assign('nombreAttaqueDisponible', $nombreAttaqueDisponible);
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
