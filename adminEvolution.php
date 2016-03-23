<?php
if (!isset($_SESSION))
{   
    session_start();
}

require_once 'initClass.php';
require_once 'init.php';

if(isset($_SESSION['idJoueurCourant']) && $_SESSION['idJoueurCourant'] != '')
{
    $PersonnageTypeManager = new PersonnageTypeManager($db);
    $EvolutionManager = new EvolutionManager($db);
    $IconePersonnageManager = new IconePersonnageManager($db);
    
    // Enregistrement de l'évolution
    if(isset($_POST) && count($_POST) > 0 )
    {    
       $insert = true;
       
       // Si un champ n'a pas été saisie par l'utisateur
       foreach($_POST as $key => $value)
       {
            if($value == ''){
                $insert = false;
            }
       }
       
       // Si champs compelts, insertion en base de donnée
       if($insert)
       {
           $evolution = new Evolution($_POST);
           $EvolutionManager->insert($evolution);
           $_SESSION['messageInsertEvolution'] = true;
       }
    }

     //Liste des personnages type
    $personnageTypeGetAll = $PersonnageTypeManager->getAll();
    $listePersonnageType = array();
    if(count($personnageTypeGetAll) > 0)
    {
        foreach ($personnageTypeGetAll as $personnageType) 
        {
            // Instance de chaque personnage type
    
            $listePersonnageType[] = new PersonnageType($personnageType);
        }
    }
    
    //Liste des évolutions
    $evolutionGetAll = $EvolutionManager->getAll();
    $listeEvolution = array();
    if(count($evolutionGetAll) > 0)
    {
        foreach ($evolutionGetAll as $evolution) 
        {
            // Instance de chaque evolution
            $listeEvolution[] = new Evolution($evolution);
        }
    }
    
    //Liste des icones personnages
    $iconePersonnageGetAll = $IconePersonnageManager->getAll();
    $listeIconePersonnage = array();
    if(count($iconePersonnageGetAll) > 0)
    {
        foreach ($iconePersonnageGetAll as $iconePersonnage) 
        {
            // Instance de icône personnage
            $listeIconePersonnage[] = new IconePersonnage($iconePersonnage);
        }
    }    
    
    // Si un icone a été inséré
    if(isset($_SESSION['messageInsertEvolution']) && $_SESSION['messageInsertEvolution'] == true)
    {
        $smarty->assign('messageInsertEvolution', true);
        $smarty->assign('messageInsertEvolutionContent', $smarty->fetch('message/messageInsertEvolution.tpl'));
        
        // Initialisation des variables sessions
        $_SESSION['messageInsertEvolution'] = false;
    }
    else
    {
        // Initialisation des variables templates
        $smarty->assign('messageInsertEvolution', false);
    }
    
    $smarty->assign('listePersonnageType', $listePersonnageType);
    $smarty->assign('listeEvolution', $listeEvolution);
    $smarty->assign('listeIconePersonnage', $listeIconePersonnage);
    
    if(isset($_SESSION['ajax']) && $_SESSION['ajax'] == true)
    {

    }
    else {
       $smarty->display('page/pageAdminEvolution.tpl'); 
       
    } 
}
else
{
    header('Location: index.php');    
}
?>