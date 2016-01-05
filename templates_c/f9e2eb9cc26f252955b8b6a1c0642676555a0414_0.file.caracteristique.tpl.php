<?php
/* Smarty version 3.1.29, created on 2016-01-05 15:40:47
  from "C:\wamp\www\developpement\templates\caracteristique.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568bd5ef949c54_03499891',
  'file_dependency' => 
  array (
    'f9e2eb9cc26f252955b8b6a1c0642676555a0414' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\caracteristique.tpl',
      1 => 1451930260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568bd5ef949c54_03499891 ($_smarty_tpl) {
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
