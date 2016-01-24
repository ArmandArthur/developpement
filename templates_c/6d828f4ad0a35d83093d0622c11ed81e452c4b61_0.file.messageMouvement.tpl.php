<?php
/* Smarty version 3.1.29, created on 2016-01-24 16:49:49
  from "C:\wamp\www\developpement\templates\message\messageMouvement.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a4f29d7d9375_90307981',
  'file_dependency' => 
  array (
    '6d828f4ad0a35d83093d0622c11ed81e452c4b61' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\message\\messageMouvement.tpl',
      1 => 1453650584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a4f29d7d9375_90307981 ($_smarty_tpl) {
?>
<div class="warning">
      <?php if ($_smarty_tpl->tpl_vars['tourDisponible']->value == false) {?>
          Votre tour est expiré
      <?php } else { ?>
        Vous n'avez plus assez de mouvement pour vous déplacer.
      <?php }?>
</div><?php }
}
