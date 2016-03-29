<?php

session_start();

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
                
            }
             $_SESSION['ajax'] = true;
            require_once 'jeu.php';
            
        break;        
        case 'seLoguer':
            $login = $_REQUEST['login'];
            $JoueurManager = new JoueurManager($db);
            $joueur = $JoueurManager->login($login);
            if(is_array($joueur) && count($joueur) > 0)
            {
                $_SESSION['idJoueurCourant'] = $joueur['id'];
                echo true;
                die();
            }
        break;
        case 'changerJoueur':
            $joueurId = $_REQUEST['joueurId'];
            $JoueurManager = new JoueurManager($db);
            $joueur = $JoueurManager->get($joueurId); 

            if(is_array($joueur) && count($joueur) > 0)
            {
                $_SESSION['personnageCourant'] = null;
                $_SESSION['idJoueurCourant'] = $joueur['id'];
                echo true;
                die();
            }
        break;        
        case 'seDeplacer':
        $_SESSION['ajax'] = true;
        $_SESSION['tourDisponible'] = true;    
        $PersonnageManager = new PersonnageManager($db);

        $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
        
        $positionX = $_REQUEST['positionX'];
        $positionY = $_REQUEST['positionY'];
        if($Personnage->tourDisponible())
        {
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
                    $_SESSION['messageMouvement'] = true;
                } else 
                {
                    $Personnage->seDeplacer($positionX, $positionY);
                    $PersonnageManager->update($Personnage);
                }
            }
        }
        else
        {
            $_SESSION['messageMouvement'] = true;
            $_SESSION['tourDisponible'] = false;
        }

    
        require_once 'jeu.php';

            break;
        case 'selectPersonnage':
            $_SESSION['ajax'] = true;
            $_SESSION['personnageCourant'] = $_REQUEST['selectedPersonnage'];

        require_once 'jeu.php';
            break;

        case 'attaquer':
            $_SESSION['ajax'] = true;
            $_SESSION['messageAttaque'] = true;
            $personnageAttaquerId = $_REQUEST['personnageAttaquerId'];

            $PersonnageManager = new PersonnageManager($db);
            $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
            $PersonnageAttaquer = new Personnage($PersonnageManager->get($personnageAttaquerId));
                   $_SESSION['personnage'] = $Personnage;
                    $_SESSION['personnageAttaquer'] = $PersonnageAttaquer;
            $seToucher = false;
            $_SESSION['seToucher'] = $seToucher;
            $nombreAttaqueDisponible = true;
            $_SESSION['nombreAttaqueDisponible'] = $nombreAttaqueDisponible;
            
            if($PersonnageAttaquer->seToucher($Personnage))
            {
                $seToucher = true;
                $_SESSION['seToucher'] = $seToucher;
                if($Personnage->tourDisponible())
                {
                    
                    $_SESSION['tourDisponible'] = true;
                    if($Personnage->getNombreAttaque() <= 0)
                    {
                        $nombreAttaqueDisponible = false;
                        $_SESSION['nombreAttaqueDisponible'] = $nombreAttaqueDisponible;
                    }    
                    else
                    {
                        $Personnage->setNombreAttaque($Personnage->getNombreAttaque()-1);
                        $Personnage->setExperience($Personnage->getExperience()+5);
                        $Personnage->setPointInvestissement($Personnage->getPointInvestissement()+100);
                        $PersonnageAttaquer->recevoirDegat($Personnage->getDegat());
                        if($PersonnageAttaquer->isMort())
                        {
                            $PersonnageAttaquer->setMort();    
                        }
                        $PersonnageManager->update($PersonnageAttaquer);   
                        $PersonnageManager->update($Personnage); 
                        $_SESSION['personnage'] = $Personnage;
                        $_SESSION['personnageAttaquer'] = $PersonnageAttaquer;
                    }  
                }
                else{
                                $_SESSION['tourDisponible'] = false;

                }

            }
                    require_once 'jeu.php';
            
            
            
            break;
    endswitch;
}
