<?php
/* Smarty version 3.1.29, created on 2016-01-23 20:22:54
  from "C:\wamp\www\developpement\templates\map.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a3d30ede7bf0_56968339',
  'file_dependency' => 
  array (
    'cd0df559bc13571cdf27112387029e9aa35dbd8a' => 
    array (
      0 => 'C:\\wamp\\www\\developpement\\templates\\map.tpl',
      1 => 1453296016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a3d30ede7bf0_56968339 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'C:\\wamp\\www\\developpement\\smarty-3.1.29\\libs\\plugins\\function.math.php';
$_smarty_tpl->compiled->nocache_hash = '1892956a3d30ed1d287_37969262';
$_smarty_tpl->tpl_vars['vL'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['vL']->step = 1;$_smarty_tpl->tpl_vars['vL']->total = (int) ceil(($_smarty_tpl->tpl_vars['vL']->step > 0 ? $_smarty_tpl->tpl_vars['carte']->value->getLargeur()-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['carte']->value->getLargeur()-1)+1)/abs($_smarty_tpl->tpl_vars['vL']->step));
if ($_smarty_tpl->tpl_vars['vL']->total > 0) {
for ($_smarty_tpl->tpl_vars['vL']->value = 0, $_smarty_tpl->tpl_vars['vL']->iteration = 1;$_smarty_tpl->tpl_vars['vL']->iteration <= $_smarty_tpl->tpl_vars['vL']->total;$_smarty_tpl->tpl_vars['vL']->value += $_smarty_tpl->tpl_vars['vL']->step, $_smarty_tpl->tpl_vars['vL']->iteration++) {
$_smarty_tpl->tpl_vars['vL']->first = $_smarty_tpl->tpl_vars['vL']->iteration == 1;$_smarty_tpl->tpl_vars['vL']->last = $_smarty_tpl->tpl_vars['vL']->iteration == $_smarty_tpl->tpl_vars['vL']->total;?>
    <?php
$_smarty_tpl->tpl_vars['vH'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['vH']->step = 1;$_smarty_tpl->tpl_vars['vH']->total = (int) ceil(($_smarty_tpl->tpl_vars['vH']->step > 0 ? $_smarty_tpl->tpl_vars['carte']->value->getHauteur()-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['carte']->value->getHauteur()-1)+1)/abs($_smarty_tpl->tpl_vars['vH']->step));
if ($_smarty_tpl->tpl_vars['vH']->total > 0) {
for ($_smarty_tpl->tpl_vars['vH']->value = 0, $_smarty_tpl->tpl_vars['vH']->iteration = 1;$_smarty_tpl->tpl_vars['vH']->iteration <= $_smarty_tpl->tpl_vars['vH']->total;$_smarty_tpl->tpl_vars['vH']->value += $_smarty_tpl->tpl_vars['vH']->step, $_smarty_tpl->tpl_vars['vH']->iteration++) {
$_smarty_tpl->tpl_vars['vH']->first = $_smarty_tpl->tpl_vars['vH']->iteration == 1;$_smarty_tpl->tpl_vars['vH']->last = $_smarty_tpl->tpl_vars['vH']->iteration == $_smarty_tpl->tpl_vars['vH']->total;?>	
	<div datapositionx="<?php echo $_smarty_tpl->tpl_vars['vL']->value;?>
" datapositiony="<?php echo $_smarty_tpl->tpl_vars['vH']->value;?>
" class="icon" style="left:<?php echo smarty_function_math(array('equation'=>"x*y",'x'=>45,'y'=>$_smarty_tpl->tpl_vars['vL']->value),$_smarty_tpl);?>
px; top:<?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['vH']->value,'y'=>33),$_smarty_tpl);?>
px;"></div>
    <?php }
}
?>

<?php }
}
?>


<img class="personnage_principal" src="<?php echo $_smarty_tpl->tpl_vars['personnage']->value->getChemin();?>
" style="left:<?php echo smarty_function_math(array('equation'=>"x*y-45",'x'=>$_smarty_tpl->tpl_vars['personnage']->value->getPositionX(),'y'=>45),$_smarty_tpl);?>
; top:<?php echo smarty_function_math(array('equation'=>"x*y-33",'x'=>$_smarty_tpl->tpl_vars['personnage']->value->getPositionY(),'y'=>33),$_smarty_tpl);?>
;";/>
<?php
$_from = $_smarty_tpl->tpl_vars['direction']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
	<div datapositionx="<?php echo $_smarty_tpl->tpl_vars['i']->value['flecheX'];?>
" datapositiony="<?php echo $_smarty_tpl->tpl_vars['i']->value['flecheY'];?>
" class="icon_fleche <?php echo $_smarty_tpl->tpl_vars['i']->value['flecheClass'];?>
" style="left:<?php echo smarty_function_math(array('equation'=>"x*y-45",'x'=>$_smarty_tpl->tpl_vars['i']->value['flecheX'],'y'=>45),$_smarty_tpl);?>
px; top:<?php echo smarty_function_math(array('equation'=>"x*y-33",'x'=>$_smarty_tpl->tpl_vars['i']->value['flecheY'],'y'=>33),$_smarty_tpl);?>
px;" ></div>
<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['personnages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_personnage_1_saved_item = isset($_smarty_tpl->tpl_vars['personnage']) ? $_smarty_tpl->tpl_vars['personnage'] : false;
$_smarty_tpl->tpl_vars['personnage'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['personnage']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['personnage']->value) {
$_smarty_tpl->tpl_vars['personnage']->_loop = true;
$__foreach_personnage_1_saved_local_item = $_smarty_tpl->tpl_vars['personnage'];
?>
	<img class="personnage_secondaire" dataId="<?php echo $_smarty_tpl->tpl_vars['personnage']->value->getId();?>
" src="<?php echo $_smarty_tpl->tpl_vars['personnage']->value->getChemin();?>
" style="left:<?php echo smarty_function_math(array('equation'=>"x*y-45",'x'=>$_smarty_tpl->tpl_vars['personnage']->value->getPositionX(),'y'=>45),$_smarty_tpl);?>
; top:<?php echo smarty_function_math(array('equation'=>"x*y-33",'x'=>$_smarty_tpl->tpl_vars['personnage']->value->getPositionY(),'y'=>33),$_smarty_tpl);?>
;";/>
<?php
$_smarty_tpl->tpl_vars['personnage'] = $__foreach_personnage_1_saved_local_item;
}
if ($__foreach_personnage_1_saved_item) {
$_smarty_tpl->tpl_vars['personnage'] = $__foreach_personnage_1_saved_item;
}
?>

<?php
$_from = $_smarty_tpl->tpl_vars['adversaires']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_adversaire_2_saved_item = isset($_smarty_tpl->tpl_vars['adversaire']) ? $_smarty_tpl->tpl_vars['adversaire'] : false;
$_smarty_tpl->tpl_vars['adversaire'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['adversaire']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['adversaire']->value) {
$_smarty_tpl->tpl_vars['adversaire']->_loop = true;
$__foreach_adversaire_2_saved_local_item = $_smarty_tpl->tpl_vars['adversaire'];
?>
	<img class="personnage" dataId="<?php echo $_smarty_tpl->tpl_vars['adversaire']->value->getId();?>
" src="<?php echo $_smarty_tpl->tpl_vars['adversaire']->value->getChemin();?>
" style="left:<?php echo smarty_function_math(array('equation'=>"x*y-45",'x'=>$_smarty_tpl->tpl_vars['adversaire']->value->getPositionX(),'y'=>45),$_smarty_tpl);?>
; top:<?php echo smarty_function_math(array('equation'=>"x*y-33",'x'=>$_smarty_tpl->tpl_vars['adversaire']->value->getPositionY(),'y'=>33),$_smarty_tpl);?>
;";/>
<?php
$_smarty_tpl->tpl_vars['adversaire'] = $__foreach_adversaire_2_saved_local_item;
}
if ($__foreach_adversaire_2_saved_item) {
$_smarty_tpl->tpl_vars['adversaire'] = $__foreach_adversaire_2_saved_item;
}
}
}
