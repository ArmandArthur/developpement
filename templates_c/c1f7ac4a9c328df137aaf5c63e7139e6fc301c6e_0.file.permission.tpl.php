<?php
/* Smarty version 3.1.29, created on 2016-03-26 18:55:29
  from "C:\wamp\www\developpement\templates\superAdmin\permission.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f6cd11e33557_33236634',
  'file_dependency' => 
  array (
    'c1f7ac4a9c328df137aaf5c63e7139e6fc301c6e' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\superAdmin\\permission.tpl',
      1 => 1459014189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f6cd11e33557_33236634 ($_smarty_tpl) {
?>
<div id="permission">
    <div id="ajouter">
        <h1>Ajouter Permission</h1>
        <form id="formAjouterPermission" action="superAdminPermission.php" method="post">
            <div class="line">
                <label for="nom">Nom :</label>  
                <input id="nom" name="nom" />
            </div>
            <div class="line">
                <input id="action" name="action" type="hidden" value="ajouter" />
                <input type="submit" value="Valider" />
            </div>            
        </form>
    </div>
</div>    <?php }
}
