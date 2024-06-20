<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:28:12
  from '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/companies/tabs.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733f5c704118_51784727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63b01ada9f50b2bd7c9fa21d4c50272be41476b' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/companies/tabs.post.tpl',
      1 => 1718826500,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/view.tpl' => 2,
  ),
),false)) {
function content_66733f5c704118_51784727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value != "discussion") {?>hidden<?php }?>">
<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0, false);
?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/companies/tabs.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/companies/tabs.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="content_discussion" class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value && $_smarty_tpl->tpl_vars['selected_section']->value != "discussion") {?>hidden<?php }?>">
<?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::COMPANY"),'wrap'=>true,'locate_to_review_tab'=>true), 0, true);
?>
</div><?php }
}
}
