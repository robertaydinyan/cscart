<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_exceptions_type.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c72a013_56112303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5300049aa17d1734bb99f829e7437fbd0c48e82e' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_product_exceptions_type.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397c72a013_56112303 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("exceptions_type")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}