<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:59:52
  from '/var/www/html/design/themes/responsive/templates/addons/vendor_rating/hooks/companies/vendor_rating.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338b8ec8a86_15469616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74d0e91f36df6997c08e9b3899def38b3a6defd3' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/vendor_rating/hooks/companies/vendor_rating.post.tpl',
      1 => 1718826496,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_rating/components/relative_vendor_rating.tpl' => 2,
  ),
),false)) {
function content_667338b8ec8a86_15469616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_rating/components/relative_vendor_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['company']->value['relative_vendor_rating']), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/hooks/companies/vendor_rating.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/hooks/companies/vendor_rating.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_rating/components/relative_vendor_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['company']->value['relative_vendor_rating']), 0, true);
}
}
}
}
