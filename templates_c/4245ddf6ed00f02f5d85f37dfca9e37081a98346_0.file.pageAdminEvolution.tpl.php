<?php
/* Smarty version 3.1.29, created on 2016-03-23 11:52:00
  from "C:\wamp\www\developpement\templates\page\pageAdminEvolution.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f27550e13af7_22634368',
  'file_dependency' => 
  array (
    '4245ddf6ed00f02f5d85f37dfca9e37081a98346' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageAdminEvolution.tpl',
      1 => 1458730319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:admin/adminEvolution.tpl' => 1,
  ),
),false)) {
function content_56f27550e13af7_22634368 ($_smarty_tpl) {
?>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />    

<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<link rel="stylesheet" type="text/css" href="css/admin/evolution.css">

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/admin/evolution.js"><?php echo '</script'; ?>
>

</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="adminEvolution">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/adminEvolution.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
