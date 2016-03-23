<?php
/* Smarty version 3.1.29, created on 2016-03-22 23:19:02
  from "C:\wamp\www\developpement\templates\page\pageHomepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f1c4d665f4d4_54703285',
  'file_dependency' => 
  array (
    '3ee1f8ff81a4250068fba4a791189f1e310b719b' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageHomepage.tpl',
      1 => 1458684999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_56f1c4d665f4d4_54703285 ($_smarty_tpl) {
?>
<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />    

<link rel="stylesheet" type="text/css" href="css/init.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-2.1.4.min.js" ><?php echo '</script'; ?>
>

</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
