<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:55
  from '/var/www/html/design/backend/templates/views/index/components/custom_blocks_section/custom_blocks_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396f16f519_36596526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e561e44009afce1f8a47864152caf651e821cfb' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/index/components/custom_blocks_section/custom_blocks_card.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673396f16f519_36596526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.safe_eval_string.php','function'=>'smarty_function_safe_eval_string',),));
\Tygh\Languages\Helper::preloadLangVars(array('custom_blocks.dismissed_by_vendor','dismiss'));
if ($_smarty_tpl->tpl_vars['custom_blocks_card']->value) {
$_smarty_tpl->_assignInScope('actions_button_icon', $_smarty_tpl->tpl_vars['custom_blocks_card']->value['is_dismissed'] ? "icon-eye-close" : "icon-ellipsis-horizontal");
$_smarty_tpl->_assignInScope('is_vendor_only', ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && !$_smarty_tpl->tpl_vars['auth']->value['act_as_user']));
$_smarty_tpl->_assignInScope('is_admin_act_as_vendor', ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && $_smarty_tpl->tpl_vars['auth']->value['act_as_user'] && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] === smarty_modifier_enum("UserTypes::VENDOR")));
$_smarty_tpl->_assignInScope('show_actions', ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['is_editable'] && ($_smarty_tpl->tpl_vars['is_vendor_only']->value || ($_smarty_tpl->tpl_vars['is_admin_act_as_vendor']->value && !(defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)))) || $_smarty_tpl->tpl_vars['custom_blocks_card']->value['is_dismissed']);?><div class="custom-blocks-card" id="custom_blocks_card_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['show_actions']->value) {?><div class="custom-blocks-card__actions"><form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"method="post"class="custom-blocks-card__actions-form"name="custom_blocks_card_actions_form"enctype="multipart/form-data"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?><li><?php if ($_smarty_tpl->tpl_vars['custom_blocks_card']->value['is_dismissed']) {?><span class="dropdown--text-wrap dropdown--text-wrap-long"><?php echo $_smarty_tpl->__("custom_blocks.dismissed_by_vendor");?>
</span><?php } else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-post cm-ajax",'text'=>$_smarty_tpl->__("dismiss"),'href'=>"index.dismiss_block?block_id=".((string)$_smarty_tpl->tpl_vars['custom_blocks_card']->value['id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'form'=>"custom_blocks_card_action_form_".((string)$_smarty_tpl->tpl_vars['custom_blocks_card']->value['id']),'data'=>array("data-ca-target-id"=>$_smarty_tpl->tpl_vars['custom_blocks_section']->value['id'])), true);
}?></li><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>$_smarty_tpl->tpl_vars['actions_button_icon']->value,'no_caret'=>true,'class'=>"custom-blocks-card__actions-btn-group"), true);?>
</form></div><?php }?><div class="custom-blocks-card__inner <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['is_fixed']) {?>custom-blocks-card__inner--fixed<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['is_editable']) {?>custom-blocks-card__inner--editable<?php }
if (!$_smarty_tpl->tpl_vars['show_actions']->value) {?>custom-blocks-card__inner--hide-actions<?php }?>"><?php echo smarty_function_safe_eval_string(array('var'=>$_smarty_tpl->tpl_vars['custom_blocks_card']->value['content']),$_smarty_tpl);?>
</div><!--custom_blocks_card_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
}
