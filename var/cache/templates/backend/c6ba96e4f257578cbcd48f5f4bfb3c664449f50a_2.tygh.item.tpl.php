<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:02:22
  from '/var/www/html/design/backend/templates/views/product_features/components/variants_picker/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673475e82c0e2_50769777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6ba96e4f257578cbcd48f5f4bfb3c664449f50a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/product_features/components/variants_picker/item.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673475e82c0e2_50769777 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="object-picker__product-feature-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }
}
