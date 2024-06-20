<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:32
  from '/var/www/html/design/backend/templates/addons/onboarding_guide/steps/manage_sellers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667336102609d7_03636401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd715ea7f07558be2f452dc5ee396b435f97c14ee' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/onboarding_guide/steps/manage_sellers.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667336102609d7_03636401 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.create_vendor_description','onboarding_guide.create_one_vendor','onboarding_guide.view_storefront'));
?>
<div class="onboarding_content_margin--bottom">
    <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.create_vendor_description");?>
</span>
</div>
<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("companies.add"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.create_one_vendor");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
    <a href="<?php echo htmlspecialchars((string) fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C&redirect_url=companies.catalog",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" class="og-step-complete btn btn-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.view_storefront");?>
 ↗</a>
</div><?php }
}
