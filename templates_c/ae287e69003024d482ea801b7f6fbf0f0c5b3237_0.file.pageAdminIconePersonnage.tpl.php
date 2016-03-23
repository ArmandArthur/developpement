<?php
/* Smarty version 3.1.29, created on 2016-03-21 13:29:17
  from "C:\wamp\www\developpement\templates\page\pageAdminIconePersonnage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56efe91d1adc87_78333591',
  'file_dependency' => 
  array (
    'ae287e69003024d482ea801b7f6fbf0f0c5b3237' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageAdminIconePersonnage.tpl',
      1 => 1458563356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:admin/adminIconePersonnage.tpl' => 1,
  ),
),false)) {
function content_56efe91d1adc87_78333591 ($_smarty_tpl) {
?>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />    

<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/admin/iconePersonnage.css">

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/admin/iconePersonnage.js" ><?php echo '</script'; ?>
>
</head>

<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="adminIconePersonnage">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/adminIconePersonnage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
