<?php
/* Smarty version 3.1.29, created on 2016-01-05 21:05:43
  from "C:\wamp\www\developpement\templates\message\messageAttaque.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568c22177bc983_31685762',
  'file_dependency' => 
  array (
    'd1302397f4aee7f2b53a716a23a6c1b4cf4663d7' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\message\\messageAttaque.tpl',
      1 => 1452024338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568c22177bc983_31685762 ($_smarty_tpl) {
?>
<div class="warning">
      <?php if ($_smarty_tpl->tpl_vars['seToucher']->value == false) {?>
        Vous devez être au contact de votre adversaire pour le frapper.
      <?php } else { ?>
        Vous infligez <?php echo $_smarty_tpl->tpl_vars['personnage']->value->getDegat();?>
 dégats à <?php echo $_smarty_tpl->tpl_vars['personnageAttaquer']->value->getNom();?>
.
        <?php if ($_smarty_tpl->tpl_vars['personnageAttaquer']->value->isMort() == "true") {?>
          Il succombe à ses blessures.
        <?php }?>
    <?php }?>
</div><?php }
}
