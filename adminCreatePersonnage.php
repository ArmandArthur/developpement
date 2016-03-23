<?php
if (!isset($_SESSION))
{   
    session_start();
}

require_once 'initClass.php';
require_once 'init.php';

if(isset($_SESSION['idJoueurCourant']) && $_SESSION['idJoueurCourant'] != '')
{

    // Instance manager
    $PersonnageTypeManager = new PersonnageTypeManager($db);
    $PersonnageManager = new PersonnageManager($db);
    $JoueurManager = new JoueurManager($db);
    $EvolutionManager = new EvolutionManager($db);
    
    // Insertion du nouveau personnage.
    if( isset($_POST) && count($_POST)>0)
    {
       $insert = true;
       
       // Si un champ n'a pas été saisie par l'utisateur
       foreach($_POST as $key => $value)
       {
            if($value == ''){
                $insert = false;
            }
       }
       
       if($insert)
       {
            // Personnagetype avec les données du POST
             $PersonnageType = new PersonnageType($PersonnageTypeManager->get($_POST['personnageTypeId']));

             // Création du personnage avec les données POST
             // personnageTypeId, nom
             $Personnage = new Personnage($_POST);

             // Update des attributs du personnage qui ne sont pas dans le POST
             $Personnage->setDegat($PersonnageType->getDegat());
             $Personnage->setExperience(0);
             $Personnage->setMouvement($PersonnageType->getMouvement());
             $Personnage->setNombreAttaque($PersonnageType->getNombreAttaque());
             $Personnage->setPointDeVie($PersonnageType->getPointDeVie());
             $Personnage->setPlanId(1);
             $Personnage->setPointInvestissement(0);
             $Personnage->setPositionX(1);
             $Personnage->setPositionY(1);
             $Personnage->setTourDeJeu(date("Y-m-d H:i:s"));
             $Personnage->setProchainTourDeJeu(date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s"))+"30 seconds"));

             /***************************
              * DEBUT ENREGISTREMENT BDD
              ***************************/

             // Table personnage
             $personnageId = $PersonnageManager->insert($Personnage); 

             // Table _joueur_personnage (liaison)
             $joueurId = $_POST['joueurId'];
             $PersonnageManager->insert_joueur_personnage($joueurId,$personnageId);

             // Table _personnage_personnageType (liaison)
             $PersonnageManager->insert_personnage_personnageType($personnageId, $Personnage->getPersonnageTypeId());

             // Récuperation de la liste des évolutions correspondant au personnage type
             $evolutionGetBy = $EvolutionManager->getBy('personnageTypeId', $Personnage->getPersonnageTypeId());

             $listeEvolution = array();
             if(count($evolutionGetBy) > 0)
             {
                 foreach ($evolutionGetBy as $evolution) 
                 {
                     // Instance de chaque evolution
                     $iEvolution = new Evolution($evolution);

                     // Pour la premiere évolution
                     if( $iEvolution->getPalierInferieur() == '0')
                     {
                         // Table _iconepersonnage_personnage (liaison)
                         $PersonnageManager->insert_iconePersonnage_personnage($personnageId, $iEvolution->getIconePersonnageId());
                     }
                 }
             }
             /***************************
              * FIN ENREGISTREMENT BDD
              ***************************/
            
            $_SESSION['messageInsertPersonnage'] = true;           
       }
 
    }
     //Liste des joueurs
    $joueurGetAll = $JoueurManager->getAll();
    $listeJoueur = array();
    if(count($joueurGetAll) > 0)
    {
        foreach ($joueurGetAll as $joueur) 
        {
            // Instance de chaque joueur
            $listeJoueur[] = new Joueur($joueur);
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

    if(isset($_SESSION['messageInsertPersonnage']) && $_SESSION['messageInsertPersonnage'] == true)
    {
        $smarty->assign('messageInsertPersonnage', true);
        $smarty->assign('messageInsertPersonnageContent', $smarty->fetch('message/messageInsertPersonnage.tpl'));

        // Initialisation des variables sessions
        $_SESSION['messageInsertPersonnage'] = false;
    }
    else
    {
        // Initialisation des variables templates
        $smarty->assign('messageInsertPersonnage', false);
    }  
            
    // Variables templates
    $smarty->assign('listePersonnageType', $listePersonnageType);
    $smarty->assign('listeJoueur', $listeJoueur);
    
    $smarty->display('page/pageAdminCreatePersonnage.tpl'); 
}
else
{
    header('Location: index.php');    
}
?>