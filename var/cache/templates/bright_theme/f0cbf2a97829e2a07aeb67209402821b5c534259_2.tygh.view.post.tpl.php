<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:01:27
  from '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/categories/view.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673391772f821_88747067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0cbf2a97829e2a07aeb67209402821b5c534259' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/categories/view.post.tpl',
      1 => 1718826500,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/block_view.tpl' => 2,
  ),
),false)) {
function content_6673391772f821_88747067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category','discussion_title_category'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/block_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::CATEGORY"),'title'=>$_smarty_tpl->__("discussion_title_category"),'wrap'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/categories/view.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/categories/view.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/block_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_smarty_tpl->tpl_vars['category_data']->value['category_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::CATEGORY"),'title'=>$_smarty_tpl->__("discussion_title_category"),'wrap'=>true), 0, true);
}
}
}
