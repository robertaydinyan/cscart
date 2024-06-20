<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:00
  from '/var/www/html/design/backend/templates/addons/vendor_panel_configurator/hooks/theme_editor/backgrounds.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733974055cd1_77323284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a12ac73e40d7db7e062e9997f32fee88d031c05' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_panel_configurator/hooks/theme_editor/backgrounds.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733974055cd1_77323284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('theme_editor.background_image','theme_editor.browse'));
$_smarty_tpl->_assignInScope('is_demo_mode', (($tmp = $_smarty_tpl->tpl_vars['config']->value['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_theme_editor', ((defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] === smarty_modifier_enum("UserTypes::VENDOR") || $_smarty_tpl->tpl_vars['is_demo_mode']->value));
if ($_smarty_tpl->tpl_vars['show_theme_editor']->value) {
$_smarty_tpl->_assignInScope('query_params', array('addon'=>"vendor_panel_configurator",'selected_sub_section'=>"vendor_panel_configurator_vendor_panel_style",'selected_section'=>"settings"));
$_smarty_tpl->_assignInScope('style_settings_url', fn_url(((string)$_smarty_tpl->tpl_vars['config']->value['admin_index'])."?dispatch=addons.update&".((string)(http_build_query($_smarty_tpl->tpl_vars['query_params']->value))),smarty_modifier_enum("SiteArea::ADMIN_PANEL")));?><div class="ty-control-group te-bg-group"><div><div class="te-color-picker-container te-colors clearfix"><span class="te-bg-title"><?php echo $_smarty_tpl->__("theme_editor.background_image");?>
&nbsp;</span><div class="input-prepend"><div class="te-fileuploader te-fileuploader--right clearfix"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style_settings_url']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
target="_blank" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="te-btn ty-left fileinput-btn"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-upload ty-icon-upload te-fileuploader__icon flex-inline top"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</a></div></div></div></div></div><?php }
}
}
