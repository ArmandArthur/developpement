<?php
/* Smarty version 3.1.29, created on 2016-02-13 22:53:35
  from "C:\wamp\www\developpement\templates\caracteristique.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bfa5df749cf9_19712076',
  'file_dependency' => 
  array (
    'f9e2eb9cc26f252955b8b6a1c0642676555a0414' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\caracteristique.tpl',
      1 => 1455382629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bfa5df749cf9_19712076 ($_smarty_tpl) {
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
        <td>Point Investissement : </td>
        <td><?php echo $_smarty_tpl->tpl_vars['personnage']->value->getPointInvestissement();?>
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
