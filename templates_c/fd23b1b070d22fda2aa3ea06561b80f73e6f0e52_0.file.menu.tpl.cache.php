<?php
/* Smarty version 3.1.29, created on 2016-01-23 20:22:54
  from "C:\wamp\www\developpement\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a3d30ed0dd36_51409173',
  'file_dependency' => 
  array (
    'fd23b1b070d22fda2aa3ea06561b80f73e6f0e52' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\menu.tpl',
      1 => 1453568423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a3d30ed0dd36_51409173 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '348056a3d30ece3946_55323596';
?>
<a href="">Admin carte</a>
<select id="selectPersonnage">
    <option value="<?php echo $_smarty_tpl->tpl_vars['personnage']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getNom();?>
</option>
    <?php
$_from = $_smarty_tpl->tpl_vars['personnages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_personnage_0_saved_item = isset($_smarty_tpl->tpl_vars['personnage']) ? $_smarty_tpl->tpl_vars['personnage'] : false;
$_smarty_tpl->tpl_vars['personnage'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['personnage']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['personnage']->value) {
$_smarty_tpl->tpl_vars['personnage']->_loop = true;
$__foreach_personnage_0_saved_local_item = $_smarty_tpl->tpl_vars['personnage'];
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['personnage']->value->getId();?>
" ><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getNom();?>
</option>
    <?php
$_smarty_tpl->tpl_vars['personnage'] = $__foreach_personnage_0_saved_local_item;
}
if ($__foreach_personnage_0_saved_item) {
$_smarty_tpl->tpl_vars['personnage'] = $__foreach_personnage_0_saved_item;
}
?>
</select><?php }
}
