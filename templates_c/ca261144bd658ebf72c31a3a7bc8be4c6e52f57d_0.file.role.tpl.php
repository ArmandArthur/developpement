<?php
/* Smarty version 3.1.29, created on 2016-03-26 19:24:46
  from "C:\wamp\www\developpement\templates\superAdmin\role.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f6d3ee537cc2_85643120',
  'file_dependency' => 
  array (
    'ca261144bd658ebf72c31a3a7bc8be4c6e52f57d' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\superAdmin\\role.tpl',
      1 => 1459016478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f6d3ee537cc2_85643120 ($_smarty_tpl) {
?>
<div id="role">
    <div id="ajouter">
        <h1>Ajouter Role</h1>
        <form id="formAjouterRole" action="superAdminRole.php" method="post">
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
