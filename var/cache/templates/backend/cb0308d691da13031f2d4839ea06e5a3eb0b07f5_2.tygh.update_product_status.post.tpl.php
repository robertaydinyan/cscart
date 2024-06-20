<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c6ceba3_02669078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb0308d691da13031f2d4839ea06e5a3eb0b07f5' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397c6ceba3_02669078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapproval_reason'));
if ($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'] && ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL") || $_smarty_tpl->tpl_vars['product_data']->value['status'] === smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"))) {?>
    <div class="control-group">
        <label for="elm_disapproval_reason" class="control-label">
            <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
        </label>
        <div class="controls">
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    </div>
<?php }
}
}