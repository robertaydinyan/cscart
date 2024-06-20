<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:15
  from '/var/www/html/design/backend/templates/views/addons/components/addons/addon_license_required.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b9f5670c0_79993307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bee48c37273d733c549c7324d7fb69ccd733af0' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/addons/addon_license_required.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733b9f5670c0_79993307 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required'));
if (fn_allowed_for("MULTIVENDOR") && fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
    <?php $_smarty_tpl->_assignInScope('license_required', array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"),'target_id'=>"content_mve_ultimate_or_plus_license_required") ,false ,2);
} elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->_assignInScope('license_required', array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_license_required"),'target_id'=>"content_mve_ultimate_license_required") ,false ,2);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('license_required', array('promo_popup_title'=>$_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.ultimate_license_required"),'target_id'=>"content_ultimate_license_required") ,false ,2);
}
}
}
