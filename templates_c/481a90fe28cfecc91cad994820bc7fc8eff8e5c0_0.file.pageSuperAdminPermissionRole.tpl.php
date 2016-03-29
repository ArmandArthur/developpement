<?php
/* Smarty version 3.1.29, created on 2016-03-28 13:24:06
  from "C:\wamp\www\developpement\templates\page\pageSuperAdminPermissionRole.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f91456ce28f2_77758571',
  'file_dependency' => 
  array (
    '481a90fe28cfecc91cad994820bc7fc8eff8e5c0' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageSuperAdminPermissionRole.tpl',
      1 => 1459163723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:superAdmin/permissionRole.tpl' => 1,
  ),
),false)) {
function content_56f91456ce28f2_77758571 ($_smarty_tpl) {
?>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />    

<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<link rel="stylesheet" type="text/css" href="css/superAdmin/permissionRole.css">

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/commun.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/superAdmin/permissionRole.js" ><?php echo '</script'; ?>
>
</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="superAdminPermissionRole">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:superAdmin/permissionRole.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
