<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:02:03
  from '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673474b6c74a8_11641586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e475077f7eaa21fef9da0cbc6937075627247f2' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673474b6c74a8_11641586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.require_approval','vendor_data_premoderation.require_vendor_action'));
if ($_smarty_tpl->tpl_vars['_REQUEST']->value && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] === "products.manage" && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'] && ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL") || $_smarty_tpl->tpl_vars['_REQUEST']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"))) {?>
    <?php if ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")) {?>
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_approval");?>

    <?php } elseif ($_smarty_tpl->tpl_vars['_REQUEST']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")) {?>        
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_vendor_action");?>

    <?php }
}
}
}
