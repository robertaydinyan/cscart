<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:29:32
  from '/var/www/html/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733faccb1480_24967509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '679f850c352a3c66587b3b72bb03076e78a356a1' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/enjoying_addon_notification.tpl' => 1,
  ),
),false)) {
function content_66733faccb1480_24967509 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['addon']->value['identified'] && !$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"addons_write_review_sidebar"), 0, false);
?>
    </div>
<?php }
}
}
