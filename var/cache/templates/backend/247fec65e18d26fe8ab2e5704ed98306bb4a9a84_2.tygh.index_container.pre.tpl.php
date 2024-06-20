<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:28
  from '/var/www/html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360ce7d624_32001035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '247fec65e18d26fe8ab2e5704ed98306bb4a9a84' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_panel_configurator/hooks/index/index_container.pre.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360ce7d624_32001035 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('html_class', ((string)$_smarty_tpl->tpl_vars['html_class']->value)." te-theme-editor-active" ,false ,2);
}
}
}
