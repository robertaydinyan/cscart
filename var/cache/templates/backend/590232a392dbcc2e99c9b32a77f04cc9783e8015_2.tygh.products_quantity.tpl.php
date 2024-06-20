<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:02:03
  from '/var/www/html/design/backend/templates/views/products/components/search_filters/products_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673474b620ea5_80371410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590232a392dbcc2e99c9b32a77f04cc9783e8015' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/products/components/search_filters/products_quantity.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673474b620ea5_80371410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('have_amount_filter', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_items']->value, 'ff');
$_smarty_tpl->tpl_vars['ff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ff']->value) {
$_smarty_tpl->tpl_vars['ff']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['ff']->value['field_type'] == "A") {?>
        <?php $_smarty_tpl->_assignInScope('have_amount_filter', 1);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_assignInScope('have_amount_filter', $_smarty_tpl->tpl_vars['have_amount_filter']->value ,false ,2);
}
}
