<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/addons/attachments/views/components/add_new_attachments_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c8ffde2_15909428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '991b1616796b35e798d83a2548e44e2e0ce9f8a9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/attachments/views/components/add_new_attachments_files.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/attachments/views/attachments/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6673397c8ffde2_15909428 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('new_attachment','add_attachment'));
?>
<div class="btn-toolbar clearfix">
    <div class="pull-right">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/attachments/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attachment'=>array(),'object_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['object_type']->value), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_attachments_files",'text'=>$_smarty_tpl->__("new_attachment"),'link_text'=>$_smarty_tpl->__("add_attachment"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"general",'icon'=>"icon-plus"), 0, false);
?>
    </div>
</div>
<?php }
}
