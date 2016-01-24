<?php
if (!isset($_SESSION))
{   
    session_start();
}

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
require_once 'smarty-3.1.29/libs/Smarty.class.php';
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
    $PersonnageManager = new PersonnageManager($db);
    $Personnages = array();
    $i = 0;
    
    if(count($listePersonnage) > 0)
    {
        foreach ($listePersonnage as $key => $item) 
        {
            if(!isset($_SESSION['personnageCourant']))
            {
                
                if($i == 0)
                {
               
                    $_SESSION['personnageCourant'] = $item->id;
                }
                else{
                $Personnages[] = new Personnage($PersonnageManager->get($item->id));    
                }
                
            }
            else
            {
                if($item->id != $_SESSION['personnageCourant'])
                {
                    $Personnages[] = new Personnage($PersonnageManager->get($item->id));
                }
            }
            
            
           $i = $i + 1; 
        }
    }    
    
    
    


    
    $Personnage = new Personnage($PersonnageManager->get($_SESSION['personnageCourant']));
   if($Personnage->tourDisponible() == false)
    {
       $Personnage->setMouvement(0);
       $Personnage->setNombreAttaque(0);
       $PersonnageManager->update($Personnage);
    }
    $CarteManager = new CarteManager($db);
    $Carte = new Carte($CarteManager->get($Personnage->getPlanId()));
    
    
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
    
     $smarty->assign('messageMouvement', false);
     $smarty->assign('messageAttaque', false);
    
    if(isset($_SESSION['ajax']) && $_SESSION['ajax'] == true)
    {
       
        if(isset($_SESSION['messageMouvement']) && $_SESSION['messageMouvement'] == true)
        {
            $smarty->assign('tourDisponible', $_SESSION['tourDisponible']);
            $smarty->assign('messageMouvement', true);
            $smarty->assign('messageMouvementContent', $smarty->fetch('message/messageMouvement.tpl'));
        }
        if(isset($_SESSION['messageAttaque']) && $_SESSION['messageAttaque'] == true)
        {
            $smarty->assign('seToucher', $_SESSION['seToucher']);
            $smarty->assign('nombreAttaqueDisponible', $_SESSION['nombreAttaqueDisponible']);
            $smarty->assign('tourDisponible', $_SESSION['tourDisponible']);
            $smarty->assign('personnageAttaquer', $_SESSION['personnageAttaquer']);
            $smarty->assign('messageAttaque', true);
            $smarty->assign('messageAttaqueContent', $smarty->fetch('message/messageAttaque.tpl'));
        }
        $smarty->display('page/jeu.tpl');
        $_SESSION['ajax'] = false;
        $_SESSION['messageMouvement'] = false;
        $_SESSION['messageAttaque'] = false;
    }
    else {
       $smarty->display('page/page.tpl'); 
       
    }
    
}
else
{
    header('Location: index.php');    
}
?>




