<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:01:07
  from '/var/www/html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66734713a71718_64951196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08742f5fbb195220b06197995504bde2f923d6b5' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66734713a71718_64951196 (Smarty_Internal_Template $_smarty_tpl) {
?><td width="19%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }
}
