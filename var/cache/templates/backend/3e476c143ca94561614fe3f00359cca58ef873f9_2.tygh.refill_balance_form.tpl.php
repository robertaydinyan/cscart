<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:55
  from '/var/www/html/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396f19a648_07031301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e476c143ca94561614fe3f00359cca58ef873f9' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_form.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
    'tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl' => 1,
  ),
),false)) {
function content_6673396f19a648_07031301 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.dashboard.analytics_card.enter_an_amount','vendor_debt_payout.dashboard.analytics_card.refill_balance'));
?>
<form id="vendor_debt_payout_refill_balance" name="refill_balance" method="post" action="<?php echo htmlspecialchars((string) fn_url("debt.refill_balance"), ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php $_smarty_tpl->_assignInScope('amount', '');?>
    <?php if ($_smarty_tpl->tpl_vars['current_balance']->value < 0) {?>
        <?php $_smarty_tpl->_assignInScope('amount', abs($_smarty_tpl->tpl_vars['current_balance']->value));?>
    <?php }?>
    <div id="vendor_debt_payout_refill_amount" class="control-group hidden cm-refill-balance-block">
        <label class="control-label cm-refill-balance-label" for="elm_vendor_debt_payout_refill_balance">
            <?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard.analytics_card.enter_an_amount");?>
:
        </label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_id'=>"elm_vendor_debt_payout_refill_balance",'input_name'=>"refill_amount",'view'=>"input",'class'=>"input-full cm-refill-balance-amount",'value'=>$_smarty_tpl->tpl_vars['amount']->value), 0, false);
?>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <a id="on_vendor_debt_payout_refill_amount" class="btn btn-primary cm-combination">
        <?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard.analytics_card.refill_balance");?>

    </a>
</form><?php }
}
