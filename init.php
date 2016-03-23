<?php

//Smarty
require_once 'smarty-3.1.29/libs/Smarty.class.php';
$smarty = new Smarty;

$db = new PDO('mysql:host=localhost;dbname=developpement', 'root','');

//Constante
define('projet','developpement');

define('dossierIconePersonnage','img/personnage/');
define('dossierIconePersonnageAbsolue',$_SERVER['DOCUMENT_ROOT'].projet.'/img/personnage/');