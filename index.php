<?php
session_start();
session_destroy();
//Smarty
require 'smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

$db = new PDO('mysql:host=localhost;dbname=developpement', 'root','');

//Class
require_once 'JoueurManager.class.php';
require_once 'Joueur.class.php';

$JoueurManager = new JoueurManager($db);
$listeJoueur = $JoueurManager->getAll();

$Joueurs = array();
if(count($listeJoueur) > 0)
{
    foreach ($listeJoueur as $key => $item) 
    {
        $Joueurs[] = new Joueur($JoueurManager->get($item->id));
    }
}
$smarty->assign('joueurs', $Joueurs);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="js/login.js"></script>
</head>
<body>
    <div id="loginTemplate">
        <?php
        $smarty->display('page/login.tpl'); 
        ?>
    </div>
</body>
</html>