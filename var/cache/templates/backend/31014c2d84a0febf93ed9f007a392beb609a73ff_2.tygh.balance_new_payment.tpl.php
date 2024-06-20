<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:21
  from '/var/www/html/design/backend/templates/views/companies/components/balance_new_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673394d84e844_74734217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31014c2d84a0febf93ed9f007a392beb609a73ff' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/balance_new_payment.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_6673394d84e844_74734217 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('payment_amount','comments','notify_vendor'));
?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="new_payout_form">
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"payment[vendor]",'id'=>"p_vendor",'selected'=>$_REQUEST['vendor']), 0, false);
?>

<div class="control-group">
    <label class="cm-required control-label" for="payment_amount"><?php echo $_smarty_tpl->__("payment_amount");?>
</label>
    <div class="controls">
        <input type="text" class="cm-numeric" name="payment[amount]" id="payment_amount" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="payment_comments"><?php echo $_smarty_tpl->__("comments");?>
</label>
    <div class="controls">
    <textarea class="span9" rows="8" cols="55" name="payment[comments]" id="payment_comments"
    ></textarea></div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <div class="control-group">
        <label for="" class="control-label">&nbsp;</label>
        <div class="controls cm-toggle-button">
            <div class="select-field notify-customer">
                <label class="checkbox" for="notify_user">
                    <input type="checkbox"
                           name="payment[notify_user]"
                           id="notify_user"
                           value="Y"
                    />
                    <?php echo $_smarty_tpl->__("notify_vendor");?>

                </label>
            </div>
        </div>
    </div>
<?php }?>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[companies.payouts_add]",'cancel_action'=>"close"), 0, false);
?>
</div>

</form><?php }
}
