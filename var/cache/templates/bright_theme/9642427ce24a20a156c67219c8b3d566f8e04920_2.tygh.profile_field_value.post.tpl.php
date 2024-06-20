<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:28:12
  from '/var/www/html/design/themes/responsive/templates/addons/call_requests/hooks/companies/profile_field_value.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733f5c6f3458_46473496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9642427ce24a20a156c67219c8b3d566f8e04920' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/call_requests/hooks/companies/profile_field_value.post.tpl',
      1 => 1718826499,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
),false)) {
function content_66733f5c6f3458_46473496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.request_call','call_requests.request_call','call_requests.request_call','call_requests.request_call'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['field_id']->value === "phone" && $_smarty_tpl->tpl_vars['addons']->value['call_requests']['enable_call_requests_for_vendors'] == smarty_modifier_enum("YesNo::YES")) {?>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->_assignInScope('obj_prefix', "block");?>
        <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id']),'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0, false);
?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/hooks/companies/profile_field_value.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/hooks/companies/profile_field_value.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['field_id']->value === "phone" && $_smarty_tpl->tpl_vars['addons']->value['call_requests']['enable_call_requests_for_vendors'] == smarty_modifier_enum("YesNo::YES")) {?>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->_assignInScope('obj_prefix', "block");?>
        <?php $_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id']),'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0, true);
?>
    </div>
<?php }
}
}
}
