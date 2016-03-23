<?php
/* Smarty version 3.1.29, created on 2016-02-13 19:28:02
  from "C:\wamp\www\developpement\templates\page\page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bf75b2f36183_41954335',
  'file_dependency' => 
  array (
    'ff66817b298cb1a91b98c39fe630d73c32769d64' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\page.tpl',
      1 => 1455387376,
      2 => 'file',
    ),
    '086a6415f6be37802f8565cf5be7792f12e50548' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\jeu.tpl',
      1 => 1453570508,
      2 => 'file',
    ),
    'fd23b1b070d22fda2aa3ea06561b80f73e6f0e52' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\menu.tpl',
      1 => 1455386949,
      2 => 'file',
    ),
    'cd0df559bc13571cdf27112387029e9aa35dbd8a' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\map.tpl',
      1 => 1453296016,
      2 => 'file',
    ),
    'f9e2eb9cc26f252955b8b6a1c0642676555a0414' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\caracteristique.tpl',
      1 => 1455382629,
      2 => 'file',
    ),
    '2465a853f5f474ff88c56f7e5f64de70a68aaae9' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\action.tpl',
      1 => 1452006436,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 5,
),true)) {
function content_56bf75b2f36183_41954335 ($_smarty_tpl) {
?>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />    

<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/action.css">
<link rel="stylesheet" type="text/css" href="css/map.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/caracteristique.css">
<link rel="stylesheet" type="text/css" href="css/message.css">

<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
    <div id="jeu">
        <div id="message">
        </div>
<div id="menu">
    <a href="">AmÃ©liorer son personnage</a>
<select id="selectPersonnage">
    <option value="5">Lord Bachourad</option>
            <option value="1" >Cerbère</option>
    </select>
</div>
<div id="map">
        	
	<div datapositionx="0" datapositiony="0" class="icon" style="left:0px; top:0px;"></div>
    	
	<div datapositionx="0" datapositiony="1" class="icon" style="left:0px; top:33px;"></div>
    	
	<div datapositionx="0" datapositiony="2" class="icon" style="left:0px; top:66px;"></div>
    	
	<div datapositionx="0" datapositiony="3" class="icon" style="left:0px; top:99px;"></div>
    	
	<div datapositionx="0" datapositiony="4" class="icon" style="left:0px; top:132px;"></div>
    	
	<div datapositionx="0" datapositiony="5" class="icon" style="left:0px; top:165px;"></div>
    	
	<div datapositionx="0" datapositiony="6" class="icon" style="left:0px; top:198px;"></div>
    	
	<div datapositionx="0" datapositiony="7" class="icon" style="left:0px; top:231px;"></div>
    	
	<div datapositionx="0" datapositiony="8" class="icon" style="left:0px; top:264px;"></div>
    	
	<div datapositionx="0" datapositiony="9" class="icon" style="left:0px; top:297px;"></div>
    	
	<div datapositionx="0" datapositiony="10" class="icon" style="left:0px; top:330px;"></div>
    	
	<div datapositionx="0" datapositiony="11" class="icon" style="left:0px; top:363px;"></div>
    	
	<div datapositionx="0" datapositiony="12" class="icon" style="left:0px; top:396px;"></div>
    	
	<div datapositionx="0" datapositiony="13" class="icon" style="left:0px; top:429px;"></div>
    	
	<div datapositionx="0" datapositiony="14" class="icon" style="left:0px; top:462px;"></div>
    
    	
	<div datapositionx="1" datapositiony="0" class="icon" style="left:45px; top:0px;"></div>
    	
	<div datapositionx="1" datapositiony="1" class="icon" style="left:45px; top:33px;"></div>
    	
	<div datapositionx="1" datapositiony="2" class="icon" style="left:45px; top:66px;"></div>
    	
	<div datapositionx="1" datapositiony="3" class="icon" style="left:45px; top:99px;"></div>
    	
	<div datapositionx="1" datapositiony="4" class="icon" style="left:45px; top:132px;"></div>
    	
	<div datapositionx="1" datapositiony="5" class="icon" style="left:45px; top:165px;"></div>
    	
	<div datapositionx="1" datapositiony="6" class="icon" style="left:45px; top:198px;"></div>
    	
	<div datapositionx="1" datapositiony="7" class="icon" style="left:45px; top:231px;"></div>
    	
	<div datapositionx="1" datapositiony="8" class="icon" style="left:45px; top:264px;"></div>
    	
	<div datapositionx="1" datapositiony="9" class="icon" style="left:45px; top:297px;"></div>
    	
	<div datapositionx="1" datapositiony="10" class="icon" style="left:45px; top:330px;"></div>
    	
	<div datapositionx="1" datapositiony="11" class="icon" style="left:45px; top:363px;"></div>
    	
	<div datapositionx="1" datapositiony="12" class="icon" style="left:45px; top:396px;"></div>
    	
	<div datapositionx="1" datapositiony="13" class="icon" style="left:45px; top:429px;"></div>
    	
	<div datapositionx="1" datapositiony="14" class="icon" style="left:45px; top:462px;"></div>
    
    	
	<div datapositionx="2" datapositiony="0" class="icon" style="left:90px; top:0px;"></div>
    	
	<div datapositionx="2" datapositiony="1" class="icon" style="left:90px; top:33px;"></div>
    	
	<div datapositionx="2" datapositiony="2" class="icon" style="left:90px; top:66px;"></div>
    	
	<div datapositionx="2" datapositiony="3" class="icon" style="left:90px; top:99px;"></div>
    	
	<div datapositionx="2" datapositiony="4" class="icon" style="left:90px; top:132px;"></div>
    	
	<div datapositionx="2" datapositiony="5" class="icon" style="left:90px; top:165px;"></div>
    	
	<div datapositionx="2" datapositiony="6" class="icon" style="left:90px; top:198px;"></div>
    	
	<div datapositionx="2" datapositiony="7" class="icon" style="left:90px; top:231px;"></div>
    	
	<div datapositionx="2" datapositiony="8" class="icon" style="left:90px; top:264px;"></div>
    	
	<div datapositionx="2" datapositiony="9" class="icon" style="left:90px; top:297px;"></div>
    	
	<div datapositionx="2" datapositiony="10" class="icon" style="left:90px; top:330px;"></div>
    	
	<div datapositionx="2" datapositiony="11" class="icon" style="left:90px; top:363px;"></div>
    	
	<div datapositionx="2" datapositiony="12" class="icon" style="left:90px; top:396px;"></div>
    	
	<div datapositionx="2" datapositiony="13" class="icon" style="left:90px; top:429px;"></div>
    	
	<div datapositionx="2" datapositiony="14" class="icon" style="left:90px; top:462px;"></div>
    
    	
	<div datapositionx="3" datapositiony="0" class="icon" style="left:135px; top:0px;"></div>
    	
	<div datapositionx="3" datapositiony="1" class="icon" style="left:135px; top:33px;"></div>
    	
	<div datapositionx="3" datapositiony="2" class="icon" style="left:135px; top:66px;"></div>
    	
	<div datapositionx="3" datapositiony="3" class="icon" style="left:135px; top:99px;"></div>
    	
	<div datapositionx="3" datapositiony="4" class="icon" style="left:135px; top:132px;"></div>
    	
	<div datapositionx="3" datapositiony="5" class="icon" style="left:135px; top:165px;"></div>
    	
	<div datapositionx="3" datapositiony="6" class="icon" style="left:135px; top:198px;"></div>
    	
	<div datapositionx="3" datapositiony="7" class="icon" style="left:135px; top:231px;"></div>
    	
	<div datapositionx="3" datapositiony="8" class="icon" style="left:135px; top:264px;"></div>
    	
	<div datapositionx="3" datapositiony="9" class="icon" style="left:135px; top:297px;"></div>
    	
	<div datapositionx="3" datapositiony="10" class="icon" style="left:135px; top:330px;"></div>
    	
	<div datapositionx="3" datapositiony="11" class="icon" style="left:135px; top:363px;"></div>
    	
	<div datapositionx="3" datapositiony="12" class="icon" style="left:135px; top:396px;"></div>
    	
	<div datapositionx="3" datapositiony="13" class="icon" style="left:135px; top:429px;"></div>
    	
	<div datapositionx="3" datapositiony="14" class="icon" style="left:135px; top:462px;"></div>
    
    	
	<div datapositionx="4" datapositiony="0" class="icon" style="left:180px; top:0px;"></div>
    	
	<div datapositionx="4" datapositiony="1" class="icon" style="left:180px; top:33px;"></div>
    	
	<div datapositionx="4" datapositiony="2" class="icon" style="left:180px; top:66px;"></div>
    	
	<div datapositionx="4" datapositiony="3" class="icon" style="left:180px; top:99px;"></div>
    	
	<div datapositionx="4" datapositiony="4" class="icon" style="left:180px; top:132px;"></div>
    	
	<div datapositionx="4" datapositiony="5" class="icon" style="left:180px; top:165px;"></div>
    	
	<div datapositionx="4" datapositiony="6" class="icon" style="left:180px; top:198px;"></div>
    	
	<div datapositionx="4" datapositiony="7" class="icon" style="left:180px; top:231px;"></div>
    	
	<div datapositionx="4" datapositiony="8" class="icon" style="left:180px; top:264px;"></div>
    	
	<div datapositionx="4" datapositiony="9" class="icon" style="left:180px; top:297px;"></div>
    	
	<div datapositionx="4" datapositiony="10" class="icon" style="left:180px; top:330px;"></div>
    	
	<div datapositionx="4" datapositiony="11" class="icon" style="left:180px; top:363px;"></div>
    	
	<div datapositionx="4" datapositiony="12" class="icon" style="left:180px; top:396px;"></div>
    	
	<div datapositionx="4" datapositiony="13" class="icon" style="left:180px; top:429px;"></div>
    	
	<div datapositionx="4" datapositiony="14" class="icon" style="left:180px; top:462px;"></div>
    
    	
	<div datapositionx="5" datapositiony="0" class="icon" style="left:225px; top:0px;"></div>
    	
	<div datapositionx="5" datapositiony="1" class="icon" style="left:225px; top:33px;"></div>
    	
	<div datapositionx="5" datapositiony="2" class="icon" style="left:225px; top:66px;"></div>
    	
	<div datapositionx="5" datapositiony="3" class="icon" style="left:225px; top:99px;"></div>
    	
	<div datapositionx="5" datapositiony="4" class="icon" style="left:225px; top:132px;"></div>
    	
	<div datapositionx="5" datapositiony="5" class="icon" style="left:225px; top:165px;"></div>
    	
	<div datapositionx="5" datapositiony="6" class="icon" style="left:225px; top:198px;"></div>
    	
	<div datapositionx="5" datapositiony="7" class="icon" style="left:225px; top:231px;"></div>
    	
	<div datapositionx="5" datapositiony="8" class="icon" style="left:225px; top:264px;"></div>
    	
	<div datapositionx="5" datapositiony="9" class="icon" style="left:225px; top:297px;"></div>
    	
	<div datapositionx="5" datapositiony="10" class="icon" style="left:225px; top:330px;"></div>
    	
	<div datapositionx="5" datapositiony="11" class="icon" style="left:225px; top:363px;"></div>
    	
	<div datapositionx="5" datapositiony="12" class="icon" style="left:225px; top:396px;"></div>
    	
	<div datapositionx="5" datapositiony="13" class="icon" style="left:225px; top:429px;"></div>
    	
	<div datapositionx="5" datapositiony="14" class="icon" style="left:225px; top:462px;"></div>
    
    	
	<div datapositionx="6" datapositiony="0" class="icon" style="left:270px; top:0px;"></div>
    	
	<div datapositionx="6" datapositiony="1" class="icon" style="left:270px; top:33px;"></div>
    	
	<div datapositionx="6" datapositiony="2" class="icon" style="left:270px; top:66px;"></div>
    	
	<div datapositionx="6" datapositiony="3" class="icon" style="left:270px; top:99px;"></div>
    	
	<div datapositionx="6" datapositiony="4" class="icon" style="left:270px; top:132px;"></div>
    	
	<div datapositionx="6" datapositiony="5" class="icon" style="left:270px; top:165px;"></div>
    	
	<div datapositionx="6" datapositiony="6" class="icon" style="left:270px; top:198px;"></div>
    	
	<div datapositionx="6" datapositiony="7" class="icon" style="left:270px; top:231px;"></div>
    	
	<div datapositionx="6" datapositiony="8" class="icon" style="left:270px; top:264px;"></div>
    	
	<div datapositionx="6" datapositiony="9" class="icon" style="left:270px; top:297px;"></div>
    	
	<div datapositionx="6" datapositiony="10" class="icon" style="left:270px; top:330px;"></div>
    	
	<div datapositionx="6" datapositiony="11" class="icon" style="left:270px; top:363px;"></div>
    	
	<div datapositionx="6" datapositiony="12" class="icon" style="left:270px; top:396px;"></div>
    	
	<div datapositionx="6" datapositiony="13" class="icon" style="left:270px; top:429px;"></div>
    	
	<div datapositionx="6" datapositiony="14" class="icon" style="left:270px; top:462px;"></div>
    
    	
	<div datapositionx="7" datapositiony="0" class="icon" style="left:315px; top:0px;"></div>
    	
	<div datapositionx="7" datapositiony="1" class="icon" style="left:315px; top:33px;"></div>
    	
	<div datapositionx="7" datapositiony="2" class="icon" style="left:315px; top:66px;"></div>
    	
	<div datapositionx="7" datapositiony="3" class="icon" style="left:315px; top:99px;"></div>
    	
	<div datapositionx="7" datapositiony="4" class="icon" style="left:315px; top:132px;"></div>
    	
	<div datapositionx="7" datapositiony="5" class="icon" style="left:315px; top:165px;"></div>
    	
	<div datapositionx="7" datapositiony="6" class="icon" style="left:315px; top:198px;"></div>
    	
	<div datapositionx="7" datapositiony="7" class="icon" style="left:315px; top:231px;"></div>
    	
	<div datapositionx="7" datapositiony="8" class="icon" style="left:315px; top:264px;"></div>
    	
	<div datapositionx="7" datapositiony="9" class="icon" style="left:315px; top:297px;"></div>
    	
	<div datapositionx="7" datapositiony="10" class="icon" style="left:315px; top:330px;"></div>
    	
	<div datapositionx="7" datapositiony="11" class="icon" style="left:315px; top:363px;"></div>
    	
	<div datapositionx="7" datapositiony="12" class="icon" style="left:315px; top:396px;"></div>
    	
	<div datapositionx="7" datapositiony="13" class="icon" style="left:315px; top:429px;"></div>
    	
	<div datapositionx="7" datapositiony="14" class="icon" style="left:315px; top:462px;"></div>
    
    	
	<div datapositionx="8" datapositiony="0" class="icon" style="left:360px; top:0px;"></div>
    	
	<div datapositionx="8" datapositiony="1" class="icon" style="left:360px; top:33px;"></div>
    	
	<div datapositionx="8" datapositiony="2" class="icon" style="left:360px; top:66px;"></div>
    	
	<div datapositionx="8" datapositiony="3" class="icon" style="left:360px; top:99px;"></div>
    	
	<div datapositionx="8" datapositiony="4" class="icon" style="left:360px; top:132px;"></div>
    	
	<div datapositionx="8" datapositiony="5" class="icon" style="left:360px; top:165px;"></div>
    	
	<div datapositionx="8" datapositiony="6" class="icon" style="left:360px; top:198px;"></div>
    	
	<div datapositionx="8" datapositiony="7" class="icon" style="left:360px; top:231px;"></div>
    	
	<div datapositionx="8" datapositiony="8" class="icon" style="left:360px; top:264px;"></div>
    	
	<div datapositionx="8" datapositiony="9" class="icon" style="left:360px; top:297px;"></div>
    	
	<div datapositionx="8" datapositiony="10" class="icon" style="left:360px; top:330px;"></div>
    	
	<div datapositionx="8" datapositiony="11" class="icon" style="left:360px; top:363px;"></div>
    	
	<div datapositionx="8" datapositiony="12" class="icon" style="left:360px; top:396px;"></div>
    	
	<div datapositionx="8" datapositiony="13" class="icon" style="left:360px; top:429px;"></div>
    	
	<div datapositionx="8" datapositiony="14" class="icon" style="left:360px; top:462px;"></div>
    
    	
	<div datapositionx="9" datapositiony="0" class="icon" style="left:405px; top:0px;"></div>
    	
	<div datapositionx="9" datapositiony="1" class="icon" style="left:405px; top:33px;"></div>
    	
	<div datapositionx="9" datapositiony="2" class="icon" style="left:405px; top:66px;"></div>
    	
	<div datapositionx="9" datapositiony="3" class="icon" style="left:405px; top:99px;"></div>
    	
	<div datapositionx="9" datapositiony="4" class="icon" style="left:405px; top:132px;"></div>
    	
	<div datapositionx="9" datapositiony="5" class="icon" style="left:405px; top:165px;"></div>
    	
	<div datapositionx="9" datapositiony="6" class="icon" style="left:405px; top:198px;"></div>
    	
	<div datapositionx="9" datapositiony="7" class="icon" style="left:405px; top:231px;"></div>
    	
	<div datapositionx="9" datapositiony="8" class="icon" style="left:405px; top:264px;"></div>
    	
	<div datapositionx="9" datapositiony="9" class="icon" style="left:405px; top:297px;"></div>
    	
	<div datapositionx="9" datapositiony="10" class="icon" style="left:405px; top:330px;"></div>
    	
	<div datapositionx="9" datapositiony="11" class="icon" style="left:405px; top:363px;"></div>
    	
	<div datapositionx="9" datapositiony="12" class="icon" style="left:405px; top:396px;"></div>
    	
	<div datapositionx="9" datapositiony="13" class="icon" style="left:405px; top:429px;"></div>
    	
	<div datapositionx="9" datapositiony="14" class="icon" style="left:405px; top:462px;"></div>
    
    	
	<div datapositionx="10" datapositiony="0" class="icon" style="left:450px; top:0px;"></div>
    	
	<div datapositionx="10" datapositiony="1" class="icon" style="left:450px; top:33px;"></div>
    	
	<div datapositionx="10" datapositiony="2" class="icon" style="left:450px; top:66px;"></div>
    	
	<div datapositionx="10" datapositiony="3" class="icon" style="left:450px; top:99px;"></div>
    	
	<div datapositionx="10" datapositiony="4" class="icon" style="left:450px; top:132px;"></div>
    	
	<div datapositionx="10" datapositiony="5" class="icon" style="left:450px; top:165px;"></div>
    	
	<div datapositionx="10" datapositiony="6" class="icon" style="left:450px; top:198px;"></div>
    	
	<div datapositionx="10" datapositiony="7" class="icon" style="left:450px; top:231px;"></div>
    	
	<div datapositionx="10" datapositiony="8" class="icon" style="left:450px; top:264px;"></div>
    	
	<div datapositionx="10" datapositiony="9" class="icon" style="left:450px; top:297px;"></div>
    	
	<div datapositionx="10" datapositiony="10" class="icon" style="left:450px; top:330px;"></div>
    	
	<div datapositionx="10" datapositiony="11" class="icon" style="left:450px; top:363px;"></div>
    	
	<div datapositionx="10" datapositiony="12" class="icon" style="left:450px; top:396px;"></div>
    	
	<div datapositionx="10" datapositiony="13" class="icon" style="left:450px; top:429px;"></div>
    	
	<div datapositionx="10" datapositiony="14" class="icon" style="left:450px; top:462px;"></div>
    
    	
	<div datapositionx="11" datapositiony="0" class="icon" style="left:495px; top:0px;"></div>
    	
	<div datapositionx="11" datapositiony="1" class="icon" style="left:495px; top:33px;"></div>
    	
	<div datapositionx="11" datapositiony="2" class="icon" style="left:495px; top:66px;"></div>
    	
	<div datapositionx="11" datapositiony="3" class="icon" style="left:495px; top:99px;"></div>
    	
	<div datapositionx="11" datapositiony="4" class="icon" style="left:495px; top:132px;"></div>
    	
	<div datapositionx="11" datapositiony="5" class="icon" style="left:495px; top:165px;"></div>
    	
	<div datapositionx="11" datapositiony="6" class="icon" style="left:495px; top:198px;"></div>
    	
	<div datapositionx="11" datapositiony="7" class="icon" style="left:495px; top:231px;"></div>
    	
	<div datapositionx="11" datapositiony="8" class="icon" style="left:495px; top:264px;"></div>
    	
	<div datapositionx="11" datapositiony="9" class="icon" style="left:495px; top:297px;"></div>
    	
	<div datapositionx="11" datapositiony="10" class="icon" style="left:495px; top:330px;"></div>
    	
	<div datapositionx="11" datapositiony="11" class="icon" style="left:495px; top:363px;"></div>
    	
	<div datapositionx="11" datapositiony="12" class="icon" style="left:495px; top:396px;"></div>
    	
	<div datapositionx="11" datapositiony="13" class="icon" style="left:495px; top:429px;"></div>
    	
	<div datapositionx="11" datapositiony="14" class="icon" style="left:495px; top:462px;"></div>
    
    	
	<div datapositionx="12" datapositiony="0" class="icon" style="left:540px; top:0px;"></div>
    	
	<div datapositionx="12" datapositiony="1" class="icon" style="left:540px; top:33px;"></div>
    	
	<div datapositionx="12" datapositiony="2" class="icon" style="left:540px; top:66px;"></div>
    	
	<div datapositionx="12" datapositiony="3" class="icon" style="left:540px; top:99px;"></div>
    	
	<div datapositionx="12" datapositiony="4" class="icon" style="left:540px; top:132px;"></div>
    	
	<div datapositionx="12" datapositiony="5" class="icon" style="left:540px; top:165px;"></div>
    	
	<div datapositionx="12" datapositiony="6" class="icon" style="left:540px; top:198px;"></div>
    	
	<div datapositionx="12" datapositiony="7" class="icon" style="left:540px; top:231px;"></div>
    	
	<div datapositionx="12" datapositiony="8" class="icon" style="left:540px; top:264px;"></div>
    	
	<div datapositionx="12" datapositiony="9" class="icon" style="left:540px; top:297px;"></div>
    	
	<div datapositionx="12" datapositiony="10" class="icon" style="left:540px; top:330px;"></div>
    	
	<div datapositionx="12" datapositiony="11" class="icon" style="left:540px; top:363px;"></div>
    	
	<div datapositionx="12" datapositiony="12" class="icon" style="left:540px; top:396px;"></div>
    	
	<div datapositionx="12" datapositiony="13" class="icon" style="left:540px; top:429px;"></div>
    	
	<div datapositionx="12" datapositiony="14" class="icon" style="left:540px; top:462px;"></div>
    
    	
	<div datapositionx="13" datapositiony="0" class="icon" style="left:585px; top:0px;"></div>
    	
	<div datapositionx="13" datapositiony="1" class="icon" style="left:585px; top:33px;"></div>
    	
	<div datapositionx="13" datapositiony="2" class="icon" style="left:585px; top:66px;"></div>
    	
	<div datapositionx="13" datapositiony="3" class="icon" style="left:585px; top:99px;"></div>
    	
	<div datapositionx="13" datapositiony="4" class="icon" style="left:585px; top:132px;"></div>
    	
	<div datapositionx="13" datapositiony="5" class="icon" style="left:585px; top:165px;"></div>
    	
	<div datapositionx="13" datapositiony="6" class="icon" style="left:585px; top:198px;"></div>
    	
	<div datapositionx="13" datapositiony="7" class="icon" style="left:585px; top:231px;"></div>
    	
	<div datapositionx="13" datapositiony="8" class="icon" style="left:585px; top:264px;"></div>
    	
	<div datapositionx="13" datapositiony="9" class="icon" style="left:585px; top:297px;"></div>
    	
	<div datapositionx="13" datapositiony="10" class="icon" style="left:585px; top:330px;"></div>
    	
	<div datapositionx="13" datapositiony="11" class="icon" style="left:585px; top:363px;"></div>
    	
	<div datapositionx="13" datapositiony="12" class="icon" style="left:585px; top:396px;"></div>
    	
	<div datapositionx="13" datapositiony="13" class="icon" style="left:585px; top:429px;"></div>
    	
	<div datapositionx="13" datapositiony="14" class="icon" style="left:585px; top:462px;"></div>
    
    	
	<div datapositionx="14" datapositiony="0" class="icon" style="left:630px; top:0px;"></div>
    	
	<div datapositionx="14" datapositiony="1" class="icon" style="left:630px; top:33px;"></div>
    	
	<div datapositionx="14" datapositiony="2" class="icon" style="left:630px; top:66px;"></div>
    	
	<div datapositionx="14" datapositiony="3" class="icon" style="left:630px; top:99px;"></div>
    	
	<div datapositionx="14" datapositiony="4" class="icon" style="left:630px; top:132px;"></div>
    	
	<div datapositionx="14" datapositiony="5" class="icon" style="left:630px; top:165px;"></div>
    	
	<div datapositionx="14" datapositiony="6" class="icon" style="left:630px; top:198px;"></div>
    	
	<div datapositionx="14" datapositiony="7" class="icon" style="left:630px; top:231px;"></div>
    	
	<div datapositionx="14" datapositiony="8" class="icon" style="left:630px; top:264px;"></div>
    	
	<div datapositionx="14" datapositiony="9" class="icon" style="left:630px; top:297px;"></div>
    	
	<div datapositionx="14" datapositiony="10" class="icon" style="left:630px; top:330px;"></div>
    	
	<div datapositionx="14" datapositiony="11" class="icon" style="left:630px; top:363px;"></div>
    	
	<div datapositionx="14" datapositiony="12" class="icon" style="left:630px; top:396px;"></div>
    	
	<div datapositionx="14" datapositiony="13" class="icon" style="left:630px; top:429px;"></div>
    	
	<div datapositionx="14" datapositiony="14" class="icon" style="left:630px; top:462px;"></div>
    
    	
	<div datapositionx="15" datapositiony="0" class="icon" style="left:675px; top:0px;"></div>
    	
	<div datapositionx="15" datapositiony="1" class="icon" style="left:675px; top:33px;"></div>
    	
	<div datapositionx="15" datapositiony="2" class="icon" style="left:675px; top:66px;"></div>
    	
	<div datapositionx="15" datapositiony="3" class="icon" style="left:675px; top:99px;"></div>
    	
	<div datapositionx="15" datapositiony="4" class="icon" style="left:675px; top:132px;"></div>
    	
	<div datapositionx="15" datapositiony="5" class="icon" style="left:675px; top:165px;"></div>
    	
	<div datapositionx="15" datapositiony="6" class="icon" style="left:675px; top:198px;"></div>
    	
	<div datapositionx="15" datapositiony="7" class="icon" style="left:675px; top:231px;"></div>
    	
	<div datapositionx="15" datapositiony="8" class="icon" style="left:675px; top:264px;"></div>
    	
	<div datapositionx="15" datapositiony="9" class="icon" style="left:675px; top:297px;"></div>
    	
	<div datapositionx="15" datapositiony="10" class="icon" style="left:675px; top:330px;"></div>
    	
	<div datapositionx="15" datapositiony="11" class="icon" style="left:675px; top:363px;"></div>
    	
	<div datapositionx="15" datapositiony="12" class="icon" style="left:675px; top:396px;"></div>
    	
	<div datapositionx="15" datapositiony="13" class="icon" style="left:675px; top:429px;"></div>
    	
	<div datapositionx="15" datapositiony="14" class="icon" style="left:675px; top:462px;"></div>
    
    	
	<div datapositionx="16" datapositiony="0" class="icon" style="left:720px; top:0px;"></div>
    	
	<div datapositionx="16" datapositiony="1" class="icon" style="left:720px; top:33px;"></div>
    	
	<div datapositionx="16" datapositiony="2" class="icon" style="left:720px; top:66px;"></div>
    	
	<div datapositionx="16" datapositiony="3" class="icon" style="left:720px; top:99px;"></div>
    	
	<div datapositionx="16" datapositiony="4" class="icon" style="left:720px; top:132px;"></div>
    	
	<div datapositionx="16" datapositiony="5" class="icon" style="left:720px; top:165px;"></div>
    	
	<div datapositionx="16" datapositiony="6" class="icon" style="left:720px; top:198px;"></div>
    	
	<div datapositionx="16" datapositiony="7" class="icon" style="left:720px; top:231px;"></div>
    	
	<div datapositionx="16" datapositiony="8" class="icon" style="left:720px; top:264px;"></div>
    	
	<div datapositionx="16" datapositiony="9" class="icon" style="left:720px; top:297px;"></div>
    	
	<div datapositionx="16" datapositiony="10" class="icon" style="left:720px; top:330px;"></div>
    	
	<div datapositionx="16" datapositiony="11" class="icon" style="left:720px; top:363px;"></div>
    	
	<div datapositionx="16" datapositiony="12" class="icon" style="left:720px; top:396px;"></div>
    	
	<div datapositionx="16" datapositiony="13" class="icon" style="left:720px; top:429px;"></div>
    	
	<div datapositionx="16" datapositiony="14" class="icon" style="left:720px; top:462px;"></div>
    
    	
	<div datapositionx="17" datapositiony="0" class="icon" style="left:765px; top:0px;"></div>
    	
	<div datapositionx="17" datapositiony="1" class="icon" style="left:765px; top:33px;"></div>
    	
	<div datapositionx="17" datapositiony="2" class="icon" style="left:765px; top:66px;"></div>
    	
	<div datapositionx="17" datapositiony="3" class="icon" style="left:765px; top:99px;"></div>
    	
	<div datapositionx="17" datapositiony="4" class="icon" style="left:765px; top:132px;"></div>
    	
	<div datapositionx="17" datapositiony="5" class="icon" style="left:765px; top:165px;"></div>
    	
	<div datapositionx="17" datapositiony="6" class="icon" style="left:765px; top:198px;"></div>
    	
	<div datapositionx="17" datapositiony="7" class="icon" style="left:765px; top:231px;"></div>
    	
	<div datapositionx="17" datapositiony="8" class="icon" style="left:765px; top:264px;"></div>
    	
	<div datapositionx="17" datapositiony="9" class="icon" style="left:765px; top:297px;"></div>
    	
	<div datapositionx="17" datapositiony="10" class="icon" style="left:765px; top:330px;"></div>
    	
	<div datapositionx="17" datapositiony="11" class="icon" style="left:765px; top:363px;"></div>
    	
	<div datapositionx="17" datapositiony="12" class="icon" style="left:765px; top:396px;"></div>
    	
	<div datapositionx="17" datapositiony="13" class="icon" style="left:765px; top:429px;"></div>
    	
	<div datapositionx="17" datapositiony="14" class="icon" style="left:765px; top:462px;"></div>
    
    	
	<div datapositionx="18" datapositiony="0" class="icon" style="left:810px; top:0px;"></div>
    	
	<div datapositionx="18" datapositiony="1" class="icon" style="left:810px; top:33px;"></div>
    	
	<div datapositionx="18" datapositiony="2" class="icon" style="left:810px; top:66px;"></div>
    	
	<div datapositionx="18" datapositiony="3" class="icon" style="left:810px; top:99px;"></div>
    	
	<div datapositionx="18" datapositiony="4" class="icon" style="left:810px; top:132px;"></div>
    	
	<div datapositionx="18" datapositiony="5" class="icon" style="left:810px; top:165px;"></div>
    	
	<div datapositionx="18" datapositiony="6" class="icon" style="left:810px; top:198px;"></div>
    	
	<div datapositionx="18" datapositiony="7" class="icon" style="left:810px; top:231px;"></div>
    	
	<div datapositionx="18" datapositiony="8" class="icon" style="left:810px; top:264px;"></div>
    	
	<div datapositionx="18" datapositiony="9" class="icon" style="left:810px; top:297px;"></div>
    	
	<div datapositionx="18" datapositiony="10" class="icon" style="left:810px; top:330px;"></div>
    	
	<div datapositionx="18" datapositiony="11" class="icon" style="left:810px; top:363px;"></div>
    	
	<div datapositionx="18" datapositiony="12" class="icon" style="left:810px; top:396px;"></div>
    	
	<div datapositionx="18" datapositiony="13" class="icon" style="left:810px; top:429px;"></div>
    	
	<div datapositionx="18" datapositiony="14" class="icon" style="left:810px; top:462px;"></div>
    
    	
	<div datapositionx="19" datapositiony="0" class="icon" style="left:855px; top:0px;"></div>
    	
	<div datapositionx="19" datapositiony="1" class="icon" style="left:855px; top:33px;"></div>
    	
	<div datapositionx="19" datapositiony="2" class="icon" style="left:855px; top:66px;"></div>
    	
	<div datapositionx="19" datapositiony="3" class="icon" style="left:855px; top:99px;"></div>
    	
	<div datapositionx="19" datapositiony="4" class="icon" style="left:855px; top:132px;"></div>
    	
	<div datapositionx="19" datapositiony="5" class="icon" style="left:855px; top:165px;"></div>
    	
	<div datapositionx="19" datapositiony="6" class="icon" style="left:855px; top:198px;"></div>
    	
	<div datapositionx="19" datapositiony="7" class="icon" style="left:855px; top:231px;"></div>
    	
	<div datapositionx="19" datapositiony="8" class="icon" style="left:855px; top:264px;"></div>
    	
	<div datapositionx="19" datapositiony="9" class="icon" style="left:855px; top:297px;"></div>
    	
	<div datapositionx="19" datapositiony="10" class="icon" style="left:855px; top:330px;"></div>
    	
	<div datapositionx="19" datapositiony="11" class="icon" style="left:855px; top:363px;"></div>
    	
	<div datapositionx="19" datapositiony="12" class="icon" style="left:855px; top:396px;"></div>
    	
	<div datapositionx="19" datapositiony="13" class="icon" style="left:855px; top:429px;"></div>
    	
	<div datapositionx="19" datapositiony="14" class="icon" style="left:855px; top:462px;"></div>
    


<img class="personnage_principal" src="img/demon.png" style="left:765; top:297;";/>
	<div datapositionx="17" datapositiony="11" class="icon_fleche fleche_bg" style="left:720px; top:330px;" ></div>
	<div datapositionx="17" datapositiony="10" class="icon_fleche fleche_mg" style="left:720px; top:297px;" ></div>
	<div datapositionx="17" datapositiony="9" class="icon_fleche fleche_hg" style="left:720px; top:264px;" ></div>
	<div datapositionx="18" datapositiony="9" class="icon_fleche fleche_hc" style="left:765px; top:264px;" ></div>
	<div datapositionx="19" datapositiony="11" class="icon_fleche fleche_bd" style="left:810px; top:330px;" ></div>
	<div datapositionx="19" datapositiony="10" class="icon_fleche fleche_md" style="left:810px; top:297px;" ></div>
	<div datapositionx="19" datapositiony="9" class="icon_fleche fleche_hd" style="left:810px; top:264px;" ></div>

	<img class="personnage_secondaire" dataId="1" src="img/demon.png" style="left:765; top:363;";/>

	<img class="personnage" dataId="2" src="img/ange.png" style="left:765; top:330;";/>

</div>
<div id="caracteristique">
    Caracteristiques de Lord Bachourad

<table>
    <tr>
        <td>Degat : </td>
        <td>15</td>
    </tr>
    <tr>
        <td>Experience : </td>
        <td>185</td>
    </tr>    
    <tr>
        <td>Point Investissement : </td>
        <td>400</td>
    </tr>      
    <tr>
        <td>Mouvement : </td>
        <td>0 / 5</td>
    </tr>
    <tr>
        <td>Point de vie : </td>
        <td>-20 / 100</td>
    </tr>
    <tr>
        <td>Nombre Attaque : </td>
        <td>0 / 5</td>
    </tr>    
    <tr>
        <td>Tour de jeu </td>
        <td>2016-02-13 17:58:13</td>
    </tr>     
    <tr>
        <td>Prochain tour de jeu </td>
        <td>2016-02-13 17:58:23</td>
        <td>
                    <button id='finDeTour'>Activer</button>
                </td>        
    </tr>      
</table>
    
</div>
<div id="action">
    <img class="actionPersonnage" id="actionAttaque" src="img/attaque.gif" />
</div>

    </div>
</body>
</html><?php }
}
