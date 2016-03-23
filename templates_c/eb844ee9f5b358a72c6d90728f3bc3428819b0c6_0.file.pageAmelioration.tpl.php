<?php
/* Smarty version 3.1.29, created on 2016-02-14 13:15:57
  from "C:\wamp\www\developpement\templates\page\pageAmelioration.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c06ffda56151_95950901',
  'file_dependency' => 
  array (
    'eb844ee9f5b358a72c6d90728f3bc3428819b0c6' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\pageAmelioration.tpl',
      1 => 1455448220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/amelioration.tpl' => 1,
  ),
),false)) {
function content_56c06ffda56151_95950901 ($_smarty_tpl) {
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
 type="text/javascript" src="js/amelioration.js"><?php echo '</script'; ?>
>

</head>
<body>
    <div id="amelioration">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:page/amelioration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
</body>
</html><?php }
}
