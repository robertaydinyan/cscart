<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:02:03
  from '/var/www/html/design/backend/templates/views/products/components/search_filters/products_order_ids.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673474b65bcd0_92311174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c309629a3223ddd96f46bce9bc2f3fe0b2940fd' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/products/components/search_filters/products_order_ids.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/orders/picker.tpl' => 1,
  ),
),false)) {
function content_6673474b65bcd0_92311174 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('no_items'));
$_smarty_tpl->_subTemplateRender("tygh:pickers/orders/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item_ids'=>$_smarty_tpl->tpl_vars['search']->value['order_ids'],'no_item_text'=>$_smarty_tpl->__("no_items"),'data_id'=>"order_ids",'input_name'=>"order_ids",'view_mode'=>"simple"), 0, false);
}
}
