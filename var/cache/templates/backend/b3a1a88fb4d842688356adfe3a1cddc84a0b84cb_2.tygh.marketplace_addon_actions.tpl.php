<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:15
  from '/var/www/html/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b9f57bf15_71154648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a1a88fb4d842688356adfe3a1cddc84a0b84cb' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/marketplace/marketplace_addon_actions.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733b9f57bf15_71154648 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.buy'));
if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
    <div>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_page'], ENT_QUOTES, 'UTF-8');?>
" class="btn" target="_blank">
            <?php echo $_smarty_tpl->__("cscart_marketplace.buy");?>

        </a>
    </div>
<?php }
}
}
