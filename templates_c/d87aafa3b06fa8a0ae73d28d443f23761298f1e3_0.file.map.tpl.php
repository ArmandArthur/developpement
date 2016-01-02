<?php
/* Smarty version 3.1.29, created on 2016-01-02 00:12:54
  from "C:\wamp\www\dev\templates\map.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568707f6c81d05_57618670',
  'file_dependency' => 
  array (
    'd87aafa3b06fa8a0ae73d28d443f23761298f1e3' => 
    array (
      0 => 'C:\\wamp\\www\\dev\\templates\\map.tpl',
      1 => 1451689973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568707f6c81d05_57618670 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'C:\\wamp\\www\\dev\\smarty-3.1.29\\libs\\plugins\\function.math.php';
$_smarty_tpl->tpl_vars['vL'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['vL']->step = 1;$_smarty_tpl->tpl_vars['vL']->total = (int) ceil(($_smarty_tpl->tpl_vars['vL']->step > 0 ? $_smarty_tpl->tpl_vars['carte']->value->getLargeur()-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['carte']->value->getLargeur()-1)+1)/abs($_smarty_tpl->tpl_vars['vL']->step));
if ($_smarty_tpl->tpl_vars['vL']->total > 0) {
for ($_smarty_tpl->tpl_vars['vL']->value = 0, $_smarty_tpl->tpl_vars['vL']->iteration = 1;$_smarty_tpl->tpl_vars['vL']->iteration <= $_smarty_tpl->tpl_vars['vL']->total;$_smarty_tpl->tpl_vars['vL']->value += $_smarty_tpl->tpl_vars['vL']->step, $_smarty_tpl->tpl_vars['vL']->iteration++) {
$_smarty_tpl->tpl_vars['vL']->first = $_smarty_tpl->tpl_vars['vL']->iteration == 1;$_smarty_tpl->tpl_vars['vL']->last = $_smarty_tpl->tpl_vars['vL']->iteration == $_smarty_tpl->tpl_vars['vL']->total;?>
	<?php
$_smarty_tpl->tpl_vars['vH'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['vH']->step = 1;$_smarty_tpl->tpl_vars['vH']->total = (int) ceil(($_smarty_tpl->tpl_vars['vH']->step > 0 ? $_smarty_tpl->tpl_vars['carte']->value->getHauteur()-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['carte']->value->getHauteur()-1)+1)/abs($_smarty_tpl->tpl_vars['vH']->step));
if ($_smarty_tpl->tpl_vars['vH']->total > 0) {
for ($_smarty_tpl->tpl_vars['vH']->value = 0, $_smarty_tpl->tpl_vars['vH']->iteration = 1;$_smarty_tpl->tpl_vars['vH']->iteration <= $_smarty_tpl->tpl_vars['vH']->total;$_smarty_tpl->tpl_vars['vH']->value += $_smarty_tpl->tpl_vars['vH']->step, $_smarty_tpl->tpl_vars['vH']->iteration++) {
$_smarty_tpl->tpl_vars['vH']->first = $_smarty_tpl->tpl_vars['vH']->iteration == 1;$_smarty_tpl->tpl_vars['vH']->last = $_smarty_tpl->tpl_vars['vH']->iteration == $_smarty_tpl->tpl_vars['vH']->total;?>	
	<div class="icon" id="icon-<?php echo $_smarty_tpl->tpl_vars['vL']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['vH']->value;?>
" style="left:<?php echo smarty_function_math(array('equation'=>"x*y",'x'=>45,'y'=>$_smarty_tpl->tpl_vars['vL']->value),$_smarty_tpl);?>
px; top:<?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['vH']->value,'y'=>33),$_smarty_tpl);?>
px;"></div>
	<?php }
}
?>

<?php }
}
?>

<img class="personnage_principal" src="img/personnage.png" style="left:<?php echo smarty_function_math(array('equation'=>"x*y-45",'x'=>$_smarty_tpl->tpl_vars['personnage']->value->getPositionX(),'y'=>45),$_smarty_tpl);?>
; top:<?php echo smarty_function_math(array('equation'=>"x*y-33",'x'=>$_smarty_tpl->tpl_vars['personnage']->value->getPositionY(),'y'=>33),$_smarty_tpl);?>
;";/>
<?php
$_from = $_smarty_tpl->tpl_vars['personnage']->value->getDeplacementPossible();
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
}
}
