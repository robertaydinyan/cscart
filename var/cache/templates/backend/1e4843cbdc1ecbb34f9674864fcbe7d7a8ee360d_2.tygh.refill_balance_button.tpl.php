<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:55
  from '/var/www/html/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396f19d9c6_66797776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e4843cbdc1ecbb34f9674864fcbe7d7a8ee360d' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673396f19d9c6_66797776 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_prefixVariable1), true);
}
}
