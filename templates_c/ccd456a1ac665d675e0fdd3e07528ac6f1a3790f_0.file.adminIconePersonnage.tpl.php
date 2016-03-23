<?php
/* Smarty version 3.1.29, created on 2016-03-21 13:15:43
  from "C:\wamp\www\developpement\templates\admin\adminIconePersonnage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56efe5efc91eb3_37794469',
  'file_dependency' => 
  array (
    'ccd456a1ac665d675e0fdd3e07528ac6f1a3790f' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\admin\\adminIconePersonnage.tpl',
      1 => 1458562542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56efe5efc91eb3_37794469 ($_smarty_tpl) {
?>
<div id="message">
    <?php if ($_smarty_tpl->tpl_vars['insertIconePersonnage']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['insertIconePersonnageContent']->value;?>

    <?php }?>
</div>
<div id="iconePersonnage">
    <div id="ajouter">
        <h1>Ajouter un icône</h1>
        <form id="formAjouterIconePersonnage" action="adminIconePersonnage.php" method="post" enctype="multipart/form-data">
                <div class="line">
                    <label for="chemin">Fichier :</label>             
                    <input type="file" id="chemin" name="chemin" />
                </div>
                <div class="line">
                    <input type="submit" class="submit"></button>
                </div>
        </form>
    </div>
    <div id="liste">
        <h1>Liste des icônes</h1>
        <table>
        <?php
$_from = $_smarty_tpl->tpl_vars['listeIconePersonnage']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_iconePersonnage_0_saved_item = isset($_smarty_tpl->tpl_vars['iconePersonnage']) ? $_smarty_tpl->tpl_vars['iconePersonnage'] : false;
$_smarty_tpl->tpl_vars['iconePersonnage'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['iconePersonnage']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['iconePersonnage']->value) {
$_smarty_tpl->tpl_vars['iconePersonnage']->_loop = true;
$__foreach_iconePersonnage_0_saved_local_item = $_smarty_tpl->tpl_vars['iconePersonnage'];
?>
            <tr>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getChemin();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getChemin();?>
" /></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['iconePersonnage'] = $__foreach_iconePersonnage_0_saved_local_item;
}
if ($__foreach_iconePersonnage_0_saved_item) {
$_smarty_tpl->tpl_vars['iconePersonnage'] = $__foreach_iconePersonnage_0_saved_item;
}
?>
        </table>
    </div>    
</div>
<?php }
}
