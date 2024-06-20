<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:21
  from '/var/www/html/design/backend/templates/views/companies/components/balance_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673394d842df4_06111995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bab7d1c800eec34aeffb95218a8cd20a27eb0a3' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/balance_info.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 4,
  ),
),false)) {
function content_6673394d842df4_06111995 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('totals','vendor_payouts.income_carried_forward','vendor_payouts.income','vendor_payouts.balance_carried_forward','vendor_payouts.balance'));
?>
<div class="statistic-list pull-right clearfix" id="balance_total">
    <div class="table-wrapper">
        <table width="100%">
            <thead>
            <tr>
                <th></th>
                <th width="15%" class="right"><h4><?php echo $_smarty_tpl->__("totals");?>
</h4></th>
            </tr>
            </thead>
            <?php if ((isset($_smarty_tpl->tpl_vars['totals']->value['income_carried_forward']))) {?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("vendor_payouts.income_carried_forward");?>
:</td>
                    <td class="shift-right"><span class="statistic-list-item__price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income_carried_forward']), 0, false);
?></span></td>
                </tr>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['totals']->value['income']))) {?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.income");?>
:</h4></td>
                    <td class="shift-right"><h4 class="statistic-list-item__price text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['income'] > 0) {?>success<?php } else { ?>error<?php }?>"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['income']), 0, true);
?></h4></td>
                </tr>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward']))) {?>
                <tr>
                    <td class="shift-right"><?php echo $_smarty_tpl->__("vendor_payouts.balance_carried_forward");?>
:</td>
                    <td class="shift-right"><span class="statistic-list-item__price"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance_carried_forward']), 0, true);
?></span></td>
                </tr>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['totals']->value['balance']))) {?>
                <tr>
                    <td class="shift-right"><h4><?php echo $_smarty_tpl->__("vendor_payouts.balance");?>
:</h4></td>
                    <td class="shift-right"><h4 class="statistic-list-item__price text-<?php if ($_smarty_tpl->tpl_vars['totals']->value['balance'] > 0) {?>success<?php } else { ?>error<?php }?>"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['totals']->value['balance']), 0, true);
?></h4></td>
                </tr>
            <?php }?>
        </table>
    </div>
<!--balance_total--></div>
<?php }
}
