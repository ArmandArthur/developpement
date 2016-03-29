<?php
/* Smarty version 3.1.29, created on 2016-03-28 15:32:12
  from "C:\wamp\www\developpement\templates\page\pageSuperAdminJoueurRole.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f9325c87e3a1_47034705',
  'file_dependency' => 
  array (
    'ee2ee3c436bd4e0bc7a2260a7b4a9d23a9211cf8' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageSuperAdminJoueurRole.tpl',
      1 => 1459171931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:superAdmin/joueurRole.tpl' => 1,
  ),
),false)) {
function content_56f9325c87e3a1_47034705 ($_smarty_tpl) {
?>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />    

<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<link rel="stylesheet" type="text/css" href="css/commun/metro-icons.css">
<link rel="stylesheet" type="text/css" href="css/superAdmin/joueurRole.css">

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/commun.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/superAdmin/roleJoueur.js" ><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="superAdminJoueurRole">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:superAdmin/joueurRole.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
