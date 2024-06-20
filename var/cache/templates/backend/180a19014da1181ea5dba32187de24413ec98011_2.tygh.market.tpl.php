<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:15
  from '/var/www/html/design/backend/templates/views/addons/market.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b9f51feb3_00024363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '180a19014da1181ea5dba32187de24413ec98011' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/market.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons_list.tpl' => 1,
    'tygh:views/addons/components/marketplace/marketplace_sidebar.tpl' => 1,
    'tygh:views/addons/components/manage/manage_adv_buttons.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66733b9f51feb3_00024363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('addon_market','addon_market'));
echo smarty_function_script(array('src'=>"js/tygh/backend/addons/market.js"),$_smarty_tpl);?>

<?php ob_start();
echo $_smarty_tpl->__("addon_market");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('page_title', $_smarty_tpl->tpl_vars['search']->value['q'] ? $_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['search']->value['q']) : $_smarty_tpl->__("addon_market"));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
<div class="items-container addons-market" id="addons_market">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_marketplace_addons'=>true), 0, false);
?>
<!--addons_market--></div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/marketplace/marketplace_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable2 = ob_get_clean();
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/addons/components/manage/manage_adv_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['page_title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>($_prefixVariable2),'adv_buttons'=>($_prefixVariable3),'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id"), 0, false);
}
}
