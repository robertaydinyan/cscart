<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:01:07
  from '/var/www/html/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66734713a64267_52505596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5442fff7a909305cf45f62e0eaa80b3c397058' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66734713a64267_52505596 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan_short'));
?>
<th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }
}
