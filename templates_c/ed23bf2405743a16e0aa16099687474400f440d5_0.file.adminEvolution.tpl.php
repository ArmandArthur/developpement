<?php
/* Smarty version 3.1.29, created on 2016-03-29 12:40:05
  from "C:\wamp\www\developpement\templates\admin\adminEvolution.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fa5b8591da71_80713461',
  'file_dependency' => 
  array (
    'ed23bf2405743a16e0aa16099687474400f440d5' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\admin\\adminEvolution.tpl',
      1 => 1459248000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fa5b8591da71_80713461 ($_smarty_tpl) {
?>
<div id="message">
    <?php if ($_smarty_tpl->tpl_vars['messageInsertEvolution']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageInsertEvolutionContent']->value;?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['messageUpdateEvolution']->value == "true") {?>
        <?php echo $_smarty_tpl->tpl_vars['messageUpdateEvolutionContent']->value;?>

    <?php }?>    
</div>
<div id="evolution">
    <div id="ajouter">
        <h1 class="warning">
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
                            <option 
                            <?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value instanceof Evolution) {?>
                                <?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value->getPersonnageTypeId() == $_smarty_tpl->tpl_vars['personnageType']->value->getId()) {?>
                                    selected="selected"
                                <?php }?>                            
                            <?php }?>
                            value="<?php echo $_smarty_tpl->tpl_vars['personnageType']->value->getId();?>
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
                    <input id="palierInferieur" name="palierInferieur" type="text" 
                     value="<?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value instanceof Evolution) {
echo $_smarty_tpl->tpl_vars['evolutionSelected']->value->getPalierInferieur();
}?>"/> 
                </div>
                <div class="line">
                    <label for="palierSuperieur">Palier supérieur:</label>
                    <input id="palierSuperieur" name="palierSuperieur" type="text"
                     value="<?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value instanceof Evolution) {
echo $_smarty_tpl->tpl_vars['evolutionSelected']->value->getPalierSuperieur();
}?>"/>
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
                            <li 
                            <?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value instanceof Evolution) {?>
                                <?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value->getIconePersonnageId() == $_smarty_tpl->tpl_vars['iconePersonnage']->value->getId()) {?>
                                    class="selected"
                                <?php }?>
                            <?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getId();?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['iconePersonnage']->value->getChemin();?>
" alt="" />
                                
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
                    <?php if ($_smarty_tpl->tpl_vars['evolutionSelected']->value instanceof Evolution) {?>
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['evolutionSelected']->value->getId();?>
" />
                    <?php }?>
                    <input type="hidden" id="uniqueId" name="uniqueId" value="<?php echo $_smarty_tpl->tpl_vars['FormulaireUniqueId']->value->displayUniqueId();?>
"/>
                    <input id="action" name="action" type="hidden" value="ajouter" />
                    <input type="submit" class="submit">
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
               <td>
                   <form id="formModifierEvolution" action="adminEvolution.php" method="post">
                       <input name="action" type="hidden" value="modifier" />
                       <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['evolution']->value->getId();?>
" />
                       <input type="submit" value="modifier" />
                   </form>
               </td>
               <td>
                   <form id="formSupprimerEvolution" action="adminEvolution.php" method="post">
                       <input id="action" name="action" type="hidden" value="supprimer" />
                       <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['evolution']->value->getId();?>
" />
                       <input type="submit" value="supp" />
                   </form>
               </td>
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
