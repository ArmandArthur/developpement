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
    
    $JoueurManager = new JoueurManager($db);
    $Joueur = new Joueur($JoueurManager->get($_SESSION['idJoueurCourant']));
    
    $Privilege = new Privilege($JoueurManager->getPrivilege($Joueur->getId()));
    $FormulaireUniqueId = new FormulaireUniqueId();
    
    if($Privilege->hasPermission('evolutionCreerModifier'))
    {
        // Si aucun evolution à modifier
        $evolutionSelected = '';

        // Enregistrement de l'évolution
        if(isset($_POST) && count($_POST) > 0 )
        {
       
            // Le traitement de l'insert et de l'update se fait via le même formulaire
            if($_POST['action'] == "ajouter")
            {
                if($FormulaireUniqueId->validate())
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

                        if(isset($_POST['id']))
                        {   
                            $EvolutionManager->update($evolution);                    
                            $_SESSION['messageUpdateEvolution'] = true;
                        }
                        else
                        {
                            $EvolutionManager->insert($evolution);                    
                            $_SESSION['messageInsertEvolution'] = true;
                        }

                    }
                }
            }
            // Pour transmettre les données selectionnées au formulaire
            elseif($_POST['action'] == "modifier")
            {
                $evolutionGetById = $EvolutionManager->get($_POST['id']);
                $evolutionSelected = new Evolution($evolutionGetById);
            }
            elseif($_POST['action'] == "supprimer")
            {
                $EvolutionManager->delete($_POST['id']);
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

        // Liste des joueurs
        $listeJoueur = $JoueurManager->getAll();

        // Contruction d'une variable selectJoueurs au format d'un optiongroup
        $selectJoueurs = array();
        if(count($listeJoueur) > 0)
        {
            foreach ($listeJoueur as $key => $item) 
            {
                if( !isset($selectJoueurs[$item['roleNom']]) )
                {
                    $selectJoueurs[$item['roleNom']] = array();
                }
                array_push($selectJoueurs[$item['roleNom']],new Joueur($item))     ;
            }
        }   
        
        // Si un icone a été inséré
        if(isset($_SESSION['messageInsertEvolution']) && $_SESSION['messageInsertEvolution'] == true)
        {
            $smarty->assign('messageInsertEvolution', true);
            $smarty->assign('messageUpdateEvolution', false);
            $smarty->assign('messageInsertEvolutionContent', $smarty->fetch('message/messageInsertEvolution.tpl'));

            // Initialisation des variables sessions
            $_SESSION['messageInsertEvolution'] = false;
        }
        elseif(isset($_SESSION['messageUpdateEvolution']) && $_SESSION['messageUpdateEvolution'] == true)
        {
            $smarty->assign('messageUpdateEvolution', true);
            $smarty->assign('messageInsertEvolution', false);
            $smarty->assign('messageUpdateEvolutionContent', $smarty->fetch('message/messageUpdateEvolution.tpl'));

            // Initialisation des variables sessions
            $_SESSION['messageUpdateEvolution'] = false;
        }    
        else
        {
            // Initialisation des variables templates
            $smarty->assign('messageInsertEvolution', false);
            $smarty->assign('messageUpdateEvolution', false);
        }

        $smarty->assign('listePersonnageType', $listePersonnageType);
        $smarty->assign('listeEvolution', $listeEvolution);
        $smarty->assign('listeIconePersonnage', $listeIconePersonnage);
        $smarty->assign('Joueur', $Joueur);
        $smarty->assign('selectJoueurs', $selectJoueurs);
        $smarty->assign('Privilege', $Privilege);
        $smarty->assign('FormulaireUniqueId', $FormulaireUniqueId);
        $smarty->assign('evolutionSelected', $evolutionSelected);  

        $smarty->display('page/pageAdminEvolution.tpl');
    }
    else
    {
        header('Location: homepage.php');    
    }    
}
else
{
    header('Location: index.php');    
}
?>