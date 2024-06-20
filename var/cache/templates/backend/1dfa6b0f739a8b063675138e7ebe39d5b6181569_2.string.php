<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:55
  from '1dfa6b0f739a8b063675138e7ebe39d5b6181569' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396f17dae7_80378082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673396f17dae7_80378082 (Smarty_Internal_Template $_smarty_tpl) {
?><p><img src="design/backend/media/images/custom_blocks/custom_blocks_2.svg" width="150" height="150" style="width: 150px; height: 150px; float: right; margin: 0px 0px 10px 10px;"></p><h4>2. Add your products</h4><p>List your products by hand or upload a CSV or XML file to import products in bulk.</p><p><a href="<?php echo htmlspecialchars((string) fn_url('products.manage'), ENT_QUOTES, 'UTF-8');?>
" class="btn">Add one product</a> <a href="<?php echo htmlspecialchars((string) fn_url('sync_data.update&sync_provider_id=shopify_import'), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-link">Import from Shopify</a> <a href="<?php echo htmlspecialchars((string) fn_url('import_presets.add&object_type=products'), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-link">Import custom CSV or XML</a></p><?php }
}
