<?php
/* Smarty version 3.1.29, created on 2016-03-29 12:05:32
  from "C:\wamp\www\developpement\templates\admin\adminCreatePersonnage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fa536c09c514_41342703',
  'file_dependency' => 
  array (
    '7a2211bd205e59677ccf1516911dca050b68fc34' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\admin\\adminCreatePersonnage.tpl',
      1 => 1459245924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fa536c09c514_41342703 ($_smarty_tpl) {
?>
<div id="message">
    <?php if ($_smarty_tpl->tpl_vars['messageInsertPersonnage']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageInsertPersonnageContent']->value;?>

    <?php }?>
</div>
<div id="createPersonnage">
    <div id="ajouter">
        <h1>Créer un personnage</h1>
        <form id="formAjouterPersonnage" action="adminCreatePersonnage.php" method="post" enctype="multipart/form-data">
                <div class="line">
                    <label for="joueurId">Joueur :</label>             
                    <select id="joueurId" name="joueurId">
                    <?php
$_from = $_smarty_tpl->tpl_vars['listeJoueur']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_0_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_0_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value->getId();?>
" ><?php echo $_smarty_tpl->tpl_vars['joueur']->value->getLogin();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_local_item;
}
if ($__foreach_joueur_0_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_item;
}
?>
                    </select>
                </div>
                <div class="line">
                    <label for="personnageTypeId">Type de personnage :</label>  
                    <select id="personnageTypeId" name="personnageTypeId">
                    <?php
$_from = $_smarty_tpl->tpl_vars['listePersonnageType']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_personnageType_1_saved_item = isset($_smarty_tpl->tpl_vars['personnageType']) ? $_smarty_tpl->tpl_vars['personnageType'] : false;
$_smarty_tpl->tpl_vars['personnageType'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['personnageType']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['personnageType']->value) {
$_smarty_tpl->tpl_vars['personnageType']->_loop = true;
$__foreach_personnageType_1_saved_local_item = $_smarty_tpl->tpl_vars['personnageType'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getId();?>
" ><?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getNom();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['personnageType'] = $__foreach_personnageType_1_saved_local_item;
}
if ($__foreach_personnageType_1_saved_item) {
$_smarty_tpl->tpl_vars['personnageType'] = $__foreach_personnageType_1_saved_item;
}
?>
                    </select>
                </div>
                <div class="line">
                    <label for="nom">Nom :</label>  
                    <input id="nom" name="nom" value="" />
                </div>
                <div class="line">
                    <input type="hidden" id="uniqueId" name="uniqueId" value="<?php echo $_smarty_tpl->tpl_vars['FormulaireUniqueId']->value->displayUniqueId();?>
"/>
                    <input type="submit" class="submit"></button>
                </div>            
        </form>
    </div>      
    
</div>
<?php }
}
