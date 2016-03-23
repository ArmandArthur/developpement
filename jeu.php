<?php
if (!isset($_SESSION))
{   
    session_start();
}

require_once 'initClass.php';
require_once 'init.php';

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
    
    $EvolutionManager = new EvolutionManager($db);
    
    // Récuperation de la liste des évolutions correspondant au personnage type
    $evolutionGetBy = $EvolutionManager->getBy('personnageTypeId', $Personnage->getPersonnageTypeId());
    
    $listeEvolution = array();
    if(count($evolutionGetBy) > 0)
    {
        foreach ($evolutionGetBy as $evolution) 
        {
            // Instance de chaque evolution
            $iEvolution = new Evolution($evolution);
            
            // Si l'expérience du personnage est comprise dans la tranche d'evolution
            if( $iEvolution->getPalierInferieur() <= $Personnage->getExperience() && $iEvolution->getPalierSuperieur() > $Personnage->getExperience())
            {
                $iconePersonnageId = $iEvolution->getIconePersonnageId();
                $Personnage->setIconePersonnageId($iconePersonnageId);
                $PersonnageManager->update_iconepersonnage_personnage($Personnage);
            }
        }
    }
    
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
       $smarty->display('page/pageJeu.tpl'); 
       
    }
    
}
else
{
    header('Location: index.php');    
}
?>




