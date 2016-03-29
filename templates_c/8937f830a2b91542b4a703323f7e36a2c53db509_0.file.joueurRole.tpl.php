<?php
/* Smarty version 3.1.29, created on 2016-03-28 15:27:51
  from "C:\wamp\www\developpement\templates\superAdmin\joueurRole.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f93157e0e7d1_72807392',
  'file_dependency' => 
  array (
    '8937f830a2b91542b4a703323f7e36a2c53db509' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\superAdmin\\joueurRole.tpl',
      1 => 1459171648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f93157e0e7d1_72807392 ($_smarty_tpl) {
?>
<div id="joueurRole">
    <div id="ajouter">
        <h1>Associer un rôle à un joueur</h1>
        <form id="formAjouterJoueurRole" action="superAdminJoueurRole.php" method="post">
            <div class="line">
                <label for="login">Login :</label>  
                <input id="login" name="login" />
            </div>            
            <div class="line">
                <label for="roleId">Rôle :</label>  
                <select id="roleId" name="roleId">
                    <option value=""> -- selection rôle --</option>
                <?php
$_from = $_smarty_tpl->tpl_vars['listeRole']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_0_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['role']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$__foreach_role_0_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
" ><?php echo $_smarty_tpl->tpl_vars['role']->value->getNom();?>
</option>
                <?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_local_item;
}
if ($__foreach_role_0_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_item;
}
?>
                </select>
            </div>
            <div class="line">
                <input id="action" name="action" type="hidden" value="ajouter" />
                <input type="submit" value="Valider" />
            </div>            
        </form>
    </div>
    <div id="liste">
        <h1>Liste des joueurs par groupe de rôle</h1>
            <?php
$_from = $_smarty_tpl->tpl_vars['selectJoueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_1_saved_key = isset($_smarty_tpl->tpl_vars['roleNom']) ? $_smarty_tpl->tpl_vars['roleNom'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['roleNom'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['roleNom']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <div class="line">
                    <span class="groupe"><?php echo $_smarty_tpl->tpl_vars['roleNom']->value;?>
</span>
                    <?php
$_from = $_smarty_tpl->tpl_vars['item']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_JoueurItem_2_saved_item = isset($_smarty_tpl->tpl_vars['JoueurItem']) ? $_smarty_tpl->tpl_vars['JoueurItem'] : false;
$_smarty_tpl->tpl_vars['JoueurItem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['JoueurItem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['JoueurItem']->value) {
$_smarty_tpl->tpl_vars['JoueurItem']->_loop = true;
$__foreach_JoueurItem_2_saved_local_item = $_smarty_tpl->tpl_vars['JoueurItem'];
?>
                        <span class="joueurs">
                            <?php echo $_smarty_tpl->tpl_vars['JoueurItem']->value->getLogin();?>

                            <span class="mif-cross mif-lg">
                                <span><?php echo $_smarty_tpl->tpl_vars['JoueurItem']->value->getId();?>
</span>
                            </span>
                        </span>
                    <?php
$_smarty_tpl->tpl_vars['JoueurItem'] = $__foreach_JoueurItem_2_saved_local_item;
}
if ($__foreach_JoueurItem_2_saved_item) {
$_smarty_tpl->tpl_vars['JoueurItem'] = $__foreach_JoueurItem_2_saved_item;
}
?>                    
                </div>                
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
if ($__foreach_item_1_saved_key) {
$_smarty_tpl->tpl_vars['roleNom'] = $__foreach_item_1_saved_key;
}
?>      
    </div>                
</div>    <?php }
}
