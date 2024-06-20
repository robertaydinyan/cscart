<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:54
  from '/var/www/html/design/backend/templates/addons/vendor_panel_configurator/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396e53c330_91832566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26f9de46beb518d54167826d82f9a183f828646' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_panel_configurator/config.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673396e53c330_91832566 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['element_color']) {?>
        <?php $_smarty_tpl->_assignInScope('mainColor', (($tmp = $_smarty_tpl->tpl_vars['dashboard_element_color']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['element_color'] ?? null : $tmp) ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["main_color"]) {?>
        <?php $_smarty_tpl->_assignInScope('mainColor', $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["main_color"] ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('mainColor', "#024567" ,false ,2);?>     <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['sidebar_color']) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarColor', (($tmp = $_smarty_tpl->tpl_vars['dashboard_sidebar_color']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['sidebar_color'] ?? null : $tmp) ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_color"]) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarColor', $_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_color"] ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarColor', "#fff" ,false ,2);?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['main_pair']['icon']['image_path']) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarBg', "url(".((string)$_smarty_tpl->tpl_vars['runtime']->value['vendor_panel_style']['main_pair']['icon']['image_path']).")" ,false ,2);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value["vendor_panel_style"]["menu_sidebar_bg"]) {?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarBg', "url(".((string)$_smarty_tpl->tpl_vars['config']->value['vendor_panel_style']['menu_sidebar_bg']).")" ,false ,2);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('menuSidebarBg', "none" ,false ,2);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_gray_main_color']->value) {?>
        <?php $_smarty_tpl->_assignInScope('isGrayMainColor', (($tmp = $_smarty_tpl->tpl_vars['is_gray_main_color']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp) ,false ,2);?>
    <?php }
}
}
}
