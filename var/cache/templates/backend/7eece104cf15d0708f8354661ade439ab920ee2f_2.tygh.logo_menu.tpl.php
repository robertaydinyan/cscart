<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:29
  from '/var/www/html/design/backend/templates/components/menu/logo_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360d49b903_90947127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eece104cf15d0708f8354661ade439ab920ee2f' => 
    array (
      0 => '/var/www/html/design/backend/templates/components/menu/logo_menu.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360d49b903_90947127 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin.go_to_the_homepage'));
?>
<a href="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) " ", ENT_QUOTES, 'UTF-8');?>
class="top-bar__btn top-bar__btn--not-hover mobile-hidden" <?php echo htmlspecialchars((string) " ", ENT_QUOTES, 'UTF-8');?>
title="<?php echo $_smarty_tpl->__("admin.go_to_the_homepage");?>
" <?php echo htmlspecialchars((string) " ", ENT_QUOTES, 'UTF-8');?>
><span class="top-bar__btn-inner logo-menu__btn-inner"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/cart_logo.svg" border="0" alt="" class="logo-menu__logo"/></span></a><?php }
}
