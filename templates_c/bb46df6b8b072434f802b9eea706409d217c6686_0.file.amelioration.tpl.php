<?php
/* Smarty version 3.1.29, created on 2016-02-13 23:38:41
  from "C:\wamp\www\developpement\templates\page\amelioration.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bfb071806113_77815780',
  'file_dependency' => 
  array (
    'bb46df6b8b072434f802b9eea706409d217c6686' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\amelioration.tpl',
      1 => 1455403106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bfb071806113_77815780 ($_smarty_tpl) {
?>
<div id="message">
</div>
<div id="menu">
<a href="jeu.php">Jeu</a>
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
    </select>
</div>
    
<div id="upgrade">
        
</div>
<?php }
}
