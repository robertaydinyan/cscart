<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:01:11
  from '/var/www/html/design/themes/responsive/templates/common/view_tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667339070b36e4_36136076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7010a9dd3c7a20f61f6d01acbaa8b12ec2c3e8f' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/common/view_tools.tpl',
      1 => 1718826492,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667339070b36e4_36136076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','quick_product_viewer','of','next','quick_product_viewer','prev_page','quick_product_viewer','of','next','quick_product_viewer'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['view_tools']->value) {?>
	<div class="ty-product-switcher">
	    <a class="ty-product-switcher__a ty-product-switcher__a-left <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['prev_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("prev_page");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-circle ty-product-switcher__icon"),$_smarty_tpl);?>
</a>
	        <span class="switcher-selected-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['current'], ENT_QUOTES, 'UTF-8');?>
</span>
	        <span><?php echo $_smarty_tpl->__("of");?>
</span>
	        <span class="switcher-total"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
	    <a class="ty-product-switcher__a ty-product-switcher__a-right <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['next_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("next");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-circle ty-product-switcher__icon"),$_smarty_tpl);?>
</a>
	</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/view_tools.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/view_tools.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['view_tools']->value) {?>
	<div class="ty-product-switcher">
	    <a class="ty-product-switcher__a ty-product-switcher__a-left <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['prev_id']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['prev_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("prev_page");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['prev_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-circle ty-product-switcher__icon"),$_smarty_tpl);?>
</a>
	        <span class="switcher-selected-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['current'], ENT_QUOTES, 'UTF-8');?>
</span>
	        <span><?php echo $_smarty_tpl->__("of");?>
</span>
	        <span class="switcher-total"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['total'], ENT_QUOTES, 'UTF-8');?>
</span>
	    <a class="ty-product-switcher__a ty-product-switcher__a-right <?php if (!$_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>disabled<?php } elseif ($_smarty_tpl->tpl_vars['quick_view']->value) {?>cm-dialog-opener cm-dialog-auto-size<?php }?>" <?php if ($_smarty_tpl->tpl_vars['view_tools']->value['next_id']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['next_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['view_tools']->value['links_label']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['links_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['view_tools']->value['show_item_id']) {?> #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');
}
} else {
echo $_smarty_tpl->__("next");
}?>" <?php if ($_smarty_tpl->tpl_vars['quick_view']->value) {?>data-ca-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view_tools']->value['next_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="product_quick_view" data-ca-dialog-title="<?php echo $_smarty_tpl->__("quick_product_viewer");?>
" rel="nofollow"<?php }
}?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-circle ty-product-switcher__icon"),$_smarty_tpl);?>
</a>
	</div>
<?php }
}
}
}
