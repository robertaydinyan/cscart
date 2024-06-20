<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:15
  from '/var/www/html/design/backend/templates/views/addons/components/marketplace/addon_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b9f578dc1_86555740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9a9aa1cddd64975847cd0a254c50a11bf34354' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/marketplace/addon_price.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733b9f578dc1_86555740 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('cscart_marketplace.list_price','cscart_marketplace.price_free'));
$_smarty_tpl->_assignInScope('show_price', (($tmp = $_smarty_tpl->tpl_vars['show_price']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
    <div class="addons-addon-price">
        <?php if ($_smarty_tpl->tpl_vars['a']->value['addon_marketplace_list_price'] && $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_price'] < $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_list_price']) {?>
            <small class="addons-addon-price__list-price muted" title="<?php echo $_smarty_tpl->__("cscart_marketplace.list_price");?>
">
                <s><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['currency'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_list_price'], ENT_QUOTES, 'UTF-8');?>
</s>
            </small>
        <?php }?>
        <?php if (floatval($_smarty_tpl->tpl_vars['a']->value['addon_marketplace_price'])) {?>
            <span class="addons-addon-price__price">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['currency'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_price'], ENT_QUOTES, 'UTF-8');?>

            </span>
        <?php } else { ?>
            <span class="addons-addon-price__price addons-addon-price__price--free">
                <?php echo $_smarty_tpl->__("cscart_marketplace.price_free");?>

            </span>
        <?php }?>
    </div>
<?php }
}
}
