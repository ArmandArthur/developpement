<?php
/* Smarty version 3.1.29, created on 2016-01-23 20:22:54
  from "C:\wamp\www\developpement\templates\page\jeu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a3d30ecd3cb1_59400145',
  'file_dependency' => 
  array (
    '086a6415f6be37802f8565cf5be7792f12e50548' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\page\\jeu.tpl',
      1 => 1453570508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:map.tpl' => 1,
    'file:caracteristique.tpl' => 1,
    'file:action.tpl' => 1,
  ),
),false)) {
function content_56a3d30ecd3cb1_59400145 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '293956a3d30ec9c175_65979588';
?>
<div id="message">
    <?php if ($_smarty_tpl->tpl_vars['messageMouvement']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageMouvementContent']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messageAttaque']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageAttaqueContent']->value;?>

    <?php }?>
</div>
<div id="menu">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="map">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:map.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="caracteristique">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:caracteristique.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div id="action">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
