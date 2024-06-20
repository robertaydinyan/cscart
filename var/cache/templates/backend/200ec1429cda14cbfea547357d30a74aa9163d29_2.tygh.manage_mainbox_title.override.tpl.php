<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:01:07
  from '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66734713b325f7_57854123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '200ec1429cda14cbfea547357d30a74aa9163d29' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/manage_mainbox_title.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66734713b325f7_57854123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.vendors_require_approval'));
if ($_smarty_tpl->tpl_vars['_REQUEST']->value && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['dispatch'] === "companies.manage" && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'] && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'][0] === smarty_modifier_enum("Addons\VendorDataPremoderation\PremoderationStatuses::PENDING") && $_smarty_tpl->tpl_vars['_REQUEST']->value['status'][1] === smarty_modifier_enum("Addons\VendorDataPremoderation\PremoderationStatuses::DISAPPROVED")) {?>
    <?php echo $_smarty_tpl->__("vendor_data_premoderation.vendors_require_approval");?>

<?php }
}
}
