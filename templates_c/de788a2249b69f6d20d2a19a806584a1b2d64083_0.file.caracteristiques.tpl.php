<?php
/* Smarty version 3.1.29, created on 2016-01-04 18:57:41
  from "C:\wamp\www\developpement\templates\caracteristiques.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568ab295ca5a60_36521472',
  'file_dependency' => 
  array (
    'de788a2249b69f6d20d2a19a806584a1b2d64083' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\caracteristiques.tpl',
      1 => 1451930260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568ab295ca5a60_36521472 ($_smarty_tpl) {
?>
Caracteristiques de <?php echo $_smarty_tpl->tpl_vars['personnage']->value->getNom();?>


<table>
    <tr>
        <td>Degat : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getDegat();?>
</td>
    </tr>
    <tr>
        <td>Mouvement : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getMouvement();?>
 / <?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getMouvement();?>
</td>
    </tr>
    <tr>
        <td>Point de vie : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getPointDeVie();?>
 / <?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getPointDeVie();?>
</td>
    </tr>
</table>
    <?php }
}
