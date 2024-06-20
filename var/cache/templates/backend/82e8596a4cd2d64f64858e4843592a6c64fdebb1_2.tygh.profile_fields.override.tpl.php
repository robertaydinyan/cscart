<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:00:30
  from '/var/www/html/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338de23fcb4_25938034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e8596a4cd2d64f64858e4843592a6c64fdebb1' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667338de23fcb4_25938034 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['field']->value['field_type'] == (defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <!--hide vendor plan field in admin area-->
<?php }
}
}
