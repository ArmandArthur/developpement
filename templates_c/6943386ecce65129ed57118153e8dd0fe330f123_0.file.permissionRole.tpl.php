<?php
/* Smarty version 3.1.29, created on 2016-03-27 19:30:53
  from "C:\wamp\www\developpement\templates\superAdmin\permissionRole.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f818cdb83fc6_73295365',
  'file_dependency' => 
  array (
    '6943386ecce65129ed57118153e8dd0fe330f123' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\superAdmin\\permissionRole.tpl',
      1 => 1459099852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f818cdb83fc6_73295365 ($_smarty_tpl) {
?>
<div id="permissionRole">
    <div id="ajouter">
        <h1>Associer des permissions à un rôle</h1>
        <form id="formAjouterPermissionRole" action="superAdminPermissionRole.php" method="post">
            <div class="line">
                <label for="roleId">Rôle :</label>  
                <select id="roleId" name="roleId">
                    <option value="-"> -- selection rôle --</option>
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
                    <option 
                    <?php if ($_smarty_tpl->tpl_vars['role']->value->getId() == $_smarty_tpl->tpl_vars['roleIdSelected']->value) {?>
                        selected="selected"
                    <?php }?>
                    value="<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
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
                <label for="permissionId">Permissions :</label>  
                <?php
$_from = $_smarty_tpl->tpl_vars['listePermission']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_permission_1_saved_item = isset($_smarty_tpl->tpl_vars['permission']) ? $_smarty_tpl->tpl_vars['permission'] : false;
$_smarty_tpl->tpl_vars['permission'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['permission']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->_loop = true;
$__foreach_permission_1_saved_local_item = $_smarty_tpl->tpl_vars['permission'];
?>                    
                    <div class="checkbox">
                        <?php echo $_smarty_tpl->tpl_vars['permission']->value->getNom();?>
 : 
                        <input 
                        <?php
$_from = $_smarty_tpl->tpl_vars['listePermissionSelected']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_permissionSelected_2_saved_item = isset($_smarty_tpl->tpl_vars['permissionSelected']) ? $_smarty_tpl->tpl_vars['permissionSelected'] : false;
$_smarty_tpl->tpl_vars['permissionSelected'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['permissionSelected']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['permissionSelected']->value) {
$_smarty_tpl->tpl_vars['permissionSelected']->_loop = true;
$__foreach_permissionSelected_2_saved_local_item = $_smarty_tpl->tpl_vars['permissionSelected'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['permissionSelected']->value instanceOf Permission) {?>
                                <?php if ($_smarty_tpl->tpl_vars['permission']->value->getId() == $_smarty_tpl->tpl_vars['permissionSelected']->value->getId()) {?>
                                    checked="checked"
                                <?php }?>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['permissionSelected'] = $__foreach_permissionSelected_2_saved_local_item;
}
if ($__foreach_permissionSelected_2_saved_item) {
$_smarty_tpl->tpl_vars['permissionSelected'] = $__foreach_permissionSelected_2_saved_item;
}
?>
                        type="checkbox" name="permissionId[]" value="<?php echo $_smarty_tpl->tpl_vars['permission']->value->getId();?>
">
                    </div>
                <?php
$_smarty_tpl->tpl_vars['permission'] = $__foreach_permission_1_saved_local_item;
}
if ($__foreach_permission_1_saved_item) {
$_smarty_tpl->tpl_vars['permission'] = $__foreach_permission_1_saved_item;
}
?>
            </div>
            <div class="line">
                <input id="action" name="action" type="hidden" value="ajouter" />
                <input type="submit" value="Valider" />
            </div>            
        </form>
    </div>
</div>    <?php }
}
