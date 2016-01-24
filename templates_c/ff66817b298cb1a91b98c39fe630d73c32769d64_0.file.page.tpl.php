<?php
/* Smarty version 3.1.29, created on 2016-01-23 16:31:35
  from "C:\wamp\www\developpement\templates\page\page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a39cd75878d2_69433183',
  'file_dependency' => 
  array (
    'ff66817b298cb1a91b98c39fe630d73c32769d64' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\page.tpl',
      1 => 1453563092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/jeu.tpl' => 1,
  ),
),false)) {
function content_56a39cd75878d2_69433183 ($_smarty_tpl) {
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/action.css">
<link rel="stylesheet" type="text/css" href="css/map.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/caracteristique.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="jeu">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:page/jeu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
