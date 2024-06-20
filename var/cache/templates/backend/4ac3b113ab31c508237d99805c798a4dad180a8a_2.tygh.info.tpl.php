<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:24
  from '/var/www/html/design/backend/templates/addons/call_requests/settings/info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667336084165d2_26459395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac3b113ab31c508237d99805c798a4dad180a8a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667336084165d2_26459395 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }
}
