<?php
/* Smarty version 3.1.29, created on 2016-01-06 23:40:50
  from "C:\wamp\www\developpement\templates\page\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568d97f2b3fd84_30212972',
  'file_dependency' => 
  array (
    '409c410747deeaf908f53648eee00de3f435f9ad' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\login.tpl',
      1 => 1452098357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568d97f2b3fd84_30212972 ($_smarty_tpl) {
?>
<form method="post" action="">
    <input type="text" id="login" /> 
</form>

<div id="listeJoueur">
    <span> Liste des joueurs</span>
    <br />
<?php
$_from = $_smarty_tpl->tpl_vars['joueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_0_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_0_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
        <span><?php echo $_smarty_tpl->tpl_vars['joueur']->value->getLogin();?>
</span> ,
<?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_local_item;
}
if ($__foreach_joueur_0_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_item;
}
?>
</div><?php }
}
