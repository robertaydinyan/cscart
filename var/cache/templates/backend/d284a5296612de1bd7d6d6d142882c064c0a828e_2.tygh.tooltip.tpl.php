<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/common/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c835904_36049187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd284a5296612de1bd7d6d6d142882c064c0a828e' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/tooltip.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397c835904_36049187 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip flex-inline link--monochrome <?php if ($_smarty_tpl->tpl_vars['position']->value === "middle") {?>vertical-align-middle<?php } else { ?>top<?php }
if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"question_sign",'class'=>"cs-tooltip__icon"),$_smarty_tpl);?>
</a><?php }
}
}
