<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:29
  from '/var/www/html/design/backend/templates/addons/onboarding_guide/hooks/bottom_panel/extra_link_in_help_menu_group_1.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360d3c6789_09746833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6a6645b300222659125966e14bc03c937444e91' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/onboarding_guide/hooks/bottom_panel/extra_link_in_help_menu_group_1.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360d3c6789_09746833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.reset_onboarding'));
if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && (fn_onboarding_guide_has_progress() || fn_onboarding_guide_is_dismissed())) {?>
<a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.restart"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("onboarding_guide.reset_onboarding");?>
</a>
<?php }
}
}