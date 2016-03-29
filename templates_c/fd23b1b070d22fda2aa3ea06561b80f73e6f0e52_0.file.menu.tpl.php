<?php
/* Smarty version 3.1.29, created on 2016-03-29 22:15:02
  from "C:\wamp\www\developpement\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fae246744ab1_16339972',
  'file_dependency' => 
  array (
    'fd23b1b070d22fda2aa3ea06561b80f73e6f0e52' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\menu.tpl',
      1 => 1459282491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fae246744ab1_16339972 ($_smarty_tpl) {
?>
<div id="menu">
    <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('permission') || $_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('role') || $_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('rolePermission') || $_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('roleJoueur')) {?>
    <ul class="menu" id="menuSuperAdmin">
        <li>
            <a href="#">Droits</a>
            <ul>
                <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('permission')) {?>
                    <li>
                        <a href="superAdminPermission.php">permission</a>
                    </li>                
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('role')) {?>
                <li>
                    <a href="superAdminRole.php">rôle</a>
                </li>
                <?php }?>                
                <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('rolePermission')) {?>
                <li>
                    <a href="superAdminPermissionRole.php">rôle et permissions</a>
                </li>
                <?php }?>                
                <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('roleJoueur')) {?>
                <li>
                    <a href="superAdminJoueurRole.php">rôle et joueur</a>
                </li>
                <?php }?>                
            </ul>
        </li>      
    </ul>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('evolutionCreerModifier') || $_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('IconePersonnage') || $_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('personnageCreer')) {?>        
    <ul class="menu" id="menuAdmin">
        <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('evolutionCreerModifier')) {?>
        <li>
            <a href="#">Evolution</a>
            <ul>
                <li>
                    <a href="adminEvolution.php">créer, modifier</a>
                </li>
            </ul>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('IconePersonnage')) {?>
        <li>
            <a href="#">Icônes</a>
            <ul>
                <li>
                    <a href="adminIconePersonnage.php">personnages</a>
                </li>
            </ul>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['Privilege']->value->hasPermission('personnageCreer')) {?>
        <li>
            <a href="#">Personnage</a>
            <ul>
                <li>
                    <a href="adminCreatePersonnage.php">créer</a>
                </li>
            </ul>
        </li>
        <?php }?>
    </ul>
    <?php }?>    
    <ul class="menu" id="menuPlayer">
        <li>
            <a href="jeu.php">Jeu</a>
        </li>
    </ul>
    
    <ul class="menu" id="menuInformation">
        <li>
            <a href="http://localhost:81/phpmyadmin">phpmyadmin</a>
        </li>
        
        <li>
            <select id="menuJoueurId">
            <?php
$_from = $_smarty_tpl->tpl_vars['selectJoueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['roleNom']) ? $_smarty_tpl->tpl_vars['roleNom'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['roleNom'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['roleNom']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <optgroup label='<?php echo $_smarty_tpl->tpl_vars['roleNom']->value;?>
'>
                    <?php
$_from = $_smarty_tpl->tpl_vars['item']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_JoueurItem_1_saved_item = isset($_smarty_tpl->tpl_vars['JoueurItem']) ? $_smarty_tpl->tpl_vars['JoueurItem'] : false;
$_smarty_tpl->tpl_vars['JoueurItem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['JoueurItem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['JoueurItem']->value) {
$_smarty_tpl->tpl_vars['JoueurItem']->_loop = true;
$__foreach_JoueurItem_1_saved_local_item = $_smarty_tpl->tpl_vars['JoueurItem'];
?>
                        <option 
                        <?php if ($_smarty_tpl->tpl_vars['JoueurItem']->value->getId() == $_smarty_tpl->tpl_vars['Joueur']->value->getId()) {?>
                            selected="selected"
                        <?php }?>
                            value="<?php echo $_smarty_tpl->tpl_vars['JoueurItem']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['JoueurItem']->value->getLogin();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['JoueurItem'] = $__foreach_JoueurItem_1_saved_local_item;
}
if ($__foreach_JoueurItem_1_saved_item) {
$_smarty_tpl->tpl_vars['JoueurItem'] = $__foreach_JoueurItem_1_saved_item;
}
?>
                </optgroup>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['roleNom'] = $__foreach_item_0_saved_key;
}
?>-->
            </select>
        </li>
        
        <li>
            <a href="index.php?page=deco">Deco</a>
        </li>        
    </ul>
    
</div>
<?php }
}
