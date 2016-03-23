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
  
    $smarty->assign('personnage', $Personnage);
    $smarty->assign('personnages', $Personnages);
    $smarty->display('page/pageAmelioration.tpl'); 
}
else
{
    header('Location: index.php');    
}
?>




