<?php
if (!isset($_SESSION))
{   
    session_start();
}

require_once 'initClass.php';
require_once 'init.php';

if(isset($_SESSION['idJoueurCourant']) && $_SESSION['idJoueurCourant'] != '')
{
    $smarty->display('page/pageHomepage.tpl');  
}
else
{
    header('Location: index.php');    
}
?>




