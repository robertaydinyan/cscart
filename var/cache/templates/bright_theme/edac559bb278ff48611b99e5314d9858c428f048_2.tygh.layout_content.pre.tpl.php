<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:11
  from '/var/www/html/design/themes/responsive/templates/addons/product_variations/hooks/products/layout_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397f6a6028_86909716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edac559bb278ff48611b99e5314d9858c428f048' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/product_variations/hooks/products/layout_content.pre.tpl',
      1 => 1718826497,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397f6a6028_86909716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
<div id="product_detail_page">
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/layout_content.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/layout_content.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
<div id="product_detail_page">
<?php }
}
}
}
