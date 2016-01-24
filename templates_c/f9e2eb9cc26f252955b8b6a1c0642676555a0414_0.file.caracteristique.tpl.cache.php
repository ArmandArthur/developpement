<?php
/* Smarty version 3.1.29, created on 2016-01-23 20:22:54
  from "C:\wamp\www\developpement\templates\caracteristique.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a3d30eef0667_37998130',
  'file_dependency' => 
  array (
    'f9e2eb9cc26f252955b8b6a1c0642676555a0414' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\caracteristique.tpl',
      1 => 1453557667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a3d30eef0667_37998130 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '661456a3d30ee956f8_79410113';
?>
Caracteristiques de <?php echo $_smarty_tpl->tpl_vars['personnage']->value->getNom();?>


<table>
    <tr>
        <td>Degat : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getDegat();?>
</td>
    </tr>
    <tr>
        <td>Experience : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getExperience();?>
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
    <tr>
        <td>Nombre Attaque : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getNombreAttaque();?>
 / <?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getNombreAttaque();?>
</td>
    </tr>    
    <tr>
        <td>Tour de jeu </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getTourDeJeu();?>
</td>
    </tr>     
    <tr>
        <td>Prochain tour de jeu </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getProchainTourDeJeu();?>
</td>
        <td>
        <?php if (time() > strtotime($_smarty_tpl->tpl_vars['personnage']->value->getProchainTourDeJeu())) {?>
            <button id='finDeTour'>Activer</button>
        <?php }?>
        </td>        
    </tr>      
</table>
    <?php }
}
