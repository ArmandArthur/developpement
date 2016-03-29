<?php
/* Smarty version 3.1.29, created on 2016-03-28 13:35:48
  from "C:\wamp\www\developpement\templates\page\pageJeu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f91714eda336_42471684',
  'file_dependency' => 
  array (
    'f6b4bbd7ebdedf9aca482d199b0b0c56ddfa8bab' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageJeu.tpl',
      1 => 1459163706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:page/jeu.tpl' => 1,
  ),
),false)) {
function content_56f91714eda336_42471684 ($_smarty_tpl) {
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

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jeu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/commun.js" ><?php echo '</script'; ?>
>

</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="jeu">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:page/jeu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
