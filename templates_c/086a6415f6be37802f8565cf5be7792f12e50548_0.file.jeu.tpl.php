<?php
/* Smarty version 3.1.29, created on 2016-01-06 23:41:31
  from "C:\wamp\www\developpement\templates\page\jeu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568d981b6cc300_02898540',
  'file_dependency' => 
  array (
    '086a6415f6be37802f8565cf5be7792f12e50548' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\jeu.tpl',
      1 => 1452120031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:map.tpl' => 1,
    'file:caracteristique.tpl' => 1,
    'file:action.tpl' => 1,
  ),
),false)) {
function content_568d981b6cc300_02898540 ($_smarty_tpl) {
?>
<html>
<head>
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
    <div id="message">
    </div>
    <div id="menu">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div id="map">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div id="caracteristique">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:caracteristique.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div id="action">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
