<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_name.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c632eb8_92956956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a10157f85750de1dd3dee76064debc3990190f2' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_name.pre.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397c632eb8_92956956 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.variation_of_product'));
if ($_smarty_tpl->tpl_vars['parent_product_data']->value) {?>
    <div class="control-group">
        <div class="controls">
            <p>
                <?php echo $_smarty_tpl->__("product_variations.variation_of_product",array("[url]"=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['parent_product_id'])),"[product]"=>$_smarty_tpl->tpl_vars['parent_product_data']->value['variation_name']));?>

            </p>
        </div>
    </div>
<?php }
}
}
