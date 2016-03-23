<?php
/* Smarty version 3.1.29, created on 2016-03-17 22:05:38
  from "C:\wamp\www\developpement\templates\page\jeu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56eb1c22b2e5e2_48440636',
  'file_dependency' => 
  array (
    '086a6415f6be37802f8565cf5be7792f12e50548' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\jeu.tpl',
      1 => 1458248737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:map.tpl' => 1,
    'file:caracteristique.tpl' => 1,
    'file:action.tpl' => 1,
  ),
),false)) {
function content_56eb1c22b2e5e2_48440636 ($_smarty_tpl) {
?>
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
<div id="message">
    <?php if ($_smarty_tpl->tpl_vars['messageMouvement']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageMouvementContent']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messageAttaque']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageAttaqueContent']->value;?>

    <?php }?>
</div>
<div id="map">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="caracteristique">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:caracteristique.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="action">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
