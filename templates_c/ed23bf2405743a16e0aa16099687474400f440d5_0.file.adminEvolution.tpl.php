<?php
/* Smarty version 3.1.29, created on 2016-03-23 12:26:44
  from "C:\wamp\www\developpement\templates\admin\adminEvolution.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f27d74106e06_09087671',
  'file_dependency' => 
  array (
    'ed23bf2405743a16e0aa16099687474400f440d5' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\admin\\adminEvolution.tpl',
      1 => 1458732368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f27d74106e06_09087671 ($_smarty_tpl) {
?>
<div id="message">
    <?php if ($_smarty_tpl->tpl_vars['messageInsertEvolution']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageInsertEvolutionContent']->value;?>

    <?php }?>
</div>
<div id="evolution">
    <div id="ajouter">
        <h1 class="warning">Les évolutions sont obligatoires.<br/><br/>
        Pour ajouter une évolution, il faut ajouter des icônes de personnage.</h1>
        <h1>Ajouter évolution</h1>
        <form id="formAjouterEvolution" action="adminEvolution.php" method="post">
                <div class="line">
                    <label for="selectPersonnageType">Type de personnage :</label>             
                    <select id="selectPersonnageType" name="personnageTypeId">
                    <?php
$_from = $_smarty_tpl->tpl_vars['listePersonnageType']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_personnageType_0_saved_item = isset($_smarty_tpl->tpl_vars['personnageType']) ? $_smarty_tpl->tpl_vars['personnageType'] : false;
$_smarty_tpl->tpl_vars['personnageType'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['personnageType']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['personnageType']->value) {
$_smarty_tpl->tpl_vars['personnageType']->_loop = true;
$__foreach_personnageType_0_saved_local_item = $_smarty_tpl->tpl_vars['personnageType'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getId();?>
" ><?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getNom();?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['personnageType'] = $__foreach_personnageType_0_saved_local_item;
}
if ($__foreach_personnageType_0_saved_item) {
$_smarty_tpl->tpl_vars['personnageType'] = $__foreach_personnageType_0_saved_item;
}
?>
                    </select>                    
                </div>
                <div class="line">
                    <label for="palierInferieur">Palier inférieur:</label>
                    <input id="palierInferieur" name="palierInferieur" type="text" /> 
                </div>
                <div class="line">
                    <label for="palierSuperieur">Palier supérieur:</label>
                    <input id="palierSuperieur" name="palierSuperieur" type="text" />
                </div>
                <div class="line">
                    <label for="iconePersonnageId">Icône personnage Id: </label>
                    <ul id="selectIconePersonnageId" name="selectIconePersonnageId">
                        <?php
$_from = $_smarty_tpl->tpl_vars['listeIconePersonnage']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_iconePersonnage_1_saved_item = isset($_smarty_tpl->tpl_vars['iconePersonnage']) ? $_smarty_tpl->tpl_vars['iconePersonnage'] : false;
$_smarty_tpl->tpl_vars['iconePersonnage'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['iconePersonnage']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['iconePersonnage']->value) {
$_smarty_tpl->tpl_vars['iconePersonnage']->_loop = true;
$__foreach_iconePersonnage_1_saved_local_item = $_smarty_tpl->tpl_vars['iconePersonnage'];
?>
                            <li value="<?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getId();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getChemin();?>
" alt="" /><?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getChemin();?>
</li>
                        <?php
$_smarty_tpl->tpl_vars['iconePersonnage'] = $__foreach_iconePersonnage_1_saved_local_item;
}
if ($__foreach_iconePersonnage_1_saved_item) {
$_smarty_tpl->tpl_vars['iconePersonnage'] = $__foreach_iconePersonnage_1_saved_item;
}
?>   
                    </ul>
                    <input id="iconePersonnageId" name="iconePersonnageId" type="hidden" />
                </div>
                <div class="line">
                    <input type="submit" class="submit"></button>
                </div>
        </form>
    </div>
    <div id="liste">
        <h1>Liste des évolutions</h1>
        <table>
            <tr>
                <th>Palier inférieur</th>
                <th>Palier supérieur</th>
                <th>Icone</th>
            </tr>
       <?php
$_from = $_smarty_tpl->tpl_vars['listeEvolution']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_evolution_2_saved_item = isset($_smarty_tpl->tpl_vars['evolution']) ? $_smarty_tpl->tpl_vars['evolution'] : false;
$_smarty_tpl->tpl_vars['evolution'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['evolution']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['evolution']->value) {
$_smarty_tpl->tpl_vars['evolution']->_loop = true;
$__foreach_evolution_2_saved_local_item = $_smarty_tpl->tpl_vars['evolution'];
?>
           <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['evolution']->value->getPalierInferieur();?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['evolution']->value->getPalierSuperieur();?>
</td>
               <td><img src="<?php echo $_smarty_tpl->tpl_vars['evolution']->value->getIconePersonnagePath();?>
" /></td>
           </tr>
        <?php
$_smarty_tpl->tpl_vars['evolution'] = $__foreach_evolution_2_saved_local_item;
}
if ($__foreach_evolution_2_saved_item) {
$_smarty_tpl->tpl_vars['evolution'] = $__foreach_evolution_2_saved_item;
}
?>
        </table>
    </div>    
</div>
<?php }
}
