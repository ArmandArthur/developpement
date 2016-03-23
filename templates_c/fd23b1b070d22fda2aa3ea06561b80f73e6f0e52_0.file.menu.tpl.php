<?php
/* Smarty version 3.1.29, created on 2016-03-22 18:23:25
  from "C:\wamp\www\developpement\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f17f8d3ef116_95555743',
  'file_dependency' => 
  array (
    'fd23b1b070d22fda2aa3ea06561b80f73e6f0e52' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\menu.tpl',
      1 => 1458667402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f17f8d3ef116_95555743 ($_smarty_tpl) {
?>
<div id="menu">
    <ul class="menu" id="menuAdmin">
        <li>
            <a href="adminEvolution.php">Evolution</a>
        </li>
        <li>
            <a href="#">Icônes</a>
            <ul>
                <li>
                    <a href="adminIconePersonnage.php">personnages</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Personnage</a>
            <ul>
                <li>
                    <a href="adminCreatePersonnage.php">créer</a>
                </li>
            </ul>
        </li>        
    </ul>
    <ul class="menu" id="menuPlayer">
        <li>
            <a href="jeu.php">Jeu</a>
        </li>
    </ul>
</div>
<?php }
}
