<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c6c8f93_90677204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cb1379c4a4058bd2ce4ae6a672b1c5fb33b6d32' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status_container.pre.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397c6c8f93_90677204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('approved_status', $_smarty_tpl->tpl_vars['product_data']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED") && $_smarty_tpl->tpl_vars['product_data']->value['status'] !== smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"));
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('non_editable', true ,false ,2);
} elseif (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && !$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->_assignInScope('data_product_statuses', array("data-ca-product-statuses"=>"true","data-ca-product-statuses-disapproved"=>smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"),"data-ca-product-statuses-requires-approval"=>smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")) ,false ,2);
}
if ($_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")) {?>
    <?php $_smarty_tpl->_assignInScope('product_status_style', "text-error" ,false ,2);
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")) {?>
    <?php $_smarty_tpl->_assignInScope('product_status_style', "text-warning" ,false ,2);
}
}
}
