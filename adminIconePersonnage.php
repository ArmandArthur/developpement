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
    $IconePersonnageManager = new IconePersonnageManager($db);
    
    // Vérification du fichier files
    if(isset($_FILES) && count($_FILES) > 0 )
    {
        $dossier = dossierIconePersonnageAbsolue;
        $destination = $dossier.basename($_FILES['chemin']['name']);
       
        // Upload du fichier
        if(move_uploaded_file($_FILES['chemin']['tmp_name'],$destination))
        {
            $_POST['chemin'] = dossierIconePersonnage.$_FILES['chemin']['name'];
            $iconePersonnage = new IconePersonnage($_POST);
            
            // Insertion de l'icone
            $IconePersonnageManager->insert($iconePersonnage);
            $_SESSION['insertIconePersonnage'] = true;
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
    if(isset($_SESSION['insertIconePersonnage']) && $_SESSION['insertIconePersonnage'] == true)
    {
        $smarty->assign('insertIconePersonnage', true);
        $smarty->assign('insertIconePersonnageContent', $smarty->fetch('message/insertIconePersonnage.tpl'));
        
        // Initialisation des variables sessions
        $_SESSION['insertIconePersonnage'] = false;
    }
    else
    {
        // Initialisation des variables templates
        $smarty->assign('insertIconePersonnage', false);
    }
    
    // Variables templates
    $smarty->assign('listeIconePersonnage', $listeIconePersonnage);
    
    $smarty->display('page/pageAdminIconePersonnage.tpl'); 
}
else
{
    header('Location: index.php');    
}
?>