<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:46:10
  from '/var/www/html/design/backend/templates/addons/paypal_checkout/views/payments/components/cc_processors/paypal_checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667343927e1fc2_09265010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bef9e88c85df52b1ec2e9106de28aa0d6982989d' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/paypal_checkout/views/payments/components/cc_processors/paypal_checkout.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/widget_copy.tpl' => 1,
    'tygh:common/subheader.tpl' => 3,
  ),
),false)) {
function content_667343927e1fc2_09265010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('paypal_checkout.webhook_help_message','paypal_checkout.settings.account','paypal_checkout.client_id','paypal_checkout.secret','test_live_mode','test','live','currency','paypal_checkout.settings.enable_funding','paypal_checkout.funding.','paypal_checkout.settings.style','paypal_checkout.style.shape','paypal_checkout.shape.','paypal_checkout.style.color','paypal_checkout.color.','paypal_checkout.style.height'));
$_smarty_tpl->_assignInScope('suffix', (($tmp = $_smarty_tpl->tpl_vars['payment_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_text'=>$_smarty_tpl->__("paypal_checkout.webhook_help_message"),'widget_copy_code_text'=>fn_url("paypal_checkout.webhook","C",fn_get_storefront_protocol())), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("paypal_checkout.settings.account")), 0, false);
?>

<input type="hidden"
       name="payment_data[processor_params][is_paypal_checkout]"
       value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
/>

<input type="hidden"
       name="payment_data[processor_params][created_at]"
       value="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['created_at']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor_params']->value['created_at'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) time(), ENT_QUOTES, 'UTF-8');
}?>"
/>

<input type="hidden"
       name="payment_data[processor_params][access_token]"
       value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['processor_params']->value['access_token'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
/>

<input type="hidden"
       name="payment_data[processor_params][expiry_time]"
       value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['processor_params']->value['expiry_time'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
/>

<div class="control-group">
    <label for="elm_client_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("paypal_checkout.client_id");?>
:</label>
    <div class="controls">
        <input type="text"
               name="payment_data[processor_params][client_id]"
               id="elm_client_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor_params']->value['client_id'], ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_secret<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("paypal_checkout.secret");?>
:</label>
    <div class="controls">
        <input type="password"
               name="payment_data[processor_params][secret]"
               id="elm_secret<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor_params']->value['secret'], ENT_QUOTES, 'UTF-8');?>
"
               autocomplete="new-password"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_mode<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    ><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]"
                id="elm_mode<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <option value="test"
                    <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode'] == "test") {?>selected="selected"<?php }?>
            ><?php echo $_smarty_tpl->__("test");?>
</option>
            <option value="live"
                    <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode'] == "live") {?>selected="selected"<?php }?>
            ><?php echo $_smarty_tpl->__("live");?>
</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label for="elm_currency<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    ><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]"
                id="elm_currency<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-paypal_checkout-element="currency"
                data-ca-paypal_checkout-credit-selector="#elm_funding_credit<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency', false, 'code');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency'] == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("paypal_checkout.settings.enable_funding"),'meta'=>"collapsed",'target'=>"#elm_funding".((string)$_smarty_tpl->tpl_vars['suffix']->value)), 0, true);
?>

<div id="elm_funding<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse out">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array("venmo","sepa","bancontact","eps","giropay","ideal","mybank","p24","sofort","mercadopago","blik","paylater"), 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
        <div class="control-group">
            <label for="elm_funding_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['source']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="control-label"
            ><?php echo $_smarty_tpl->__("paypal_checkout.funding.".((string)$_smarty_tpl->tpl_vars['source']->value));?>
:</label>
            <div class="controls">
                <input type="hidden"
                       name="payment_data[processor_params][disable_funding][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['source']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['source']->value, ENT_QUOTES, 'UTF-8');?>
"
                />
                <input type="checkbox"
                       name="payment_data[processor_params][disable_funding][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['source']->value, ENT_QUOTES, 'UTF-8');?>
]"
                       id="elm_funding_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['source']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                       value="0"
                       <?php if (!(($tmp = $_smarty_tpl->tpl_vars['processor_params']->value['disable_funding'][$_smarty_tpl->tpl_vars['source']->value] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)) {?>checked="checked"<?php }?>
                />
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("paypal_checkout.settings.style"),'meta'=>"collapsed",'target'=>"#elm_button_appearance".((string)$_smarty_tpl->tpl_vars['suffix']->value)), 0, true);
?>

<div id="elm_button_appearance<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse out">
    <div class="control-group">
        <label for="elm_shape<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("paypal_checkout.style.shape");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][style][shape]" id="elm_shape<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array("pill","rect"), 'shape');
$_smarty_tpl->tpl_vars['shape']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shape']->value) {
$_smarty_tpl->tpl_vars['shape']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shape']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ((($tmp = $_smarty_tpl->tpl_vars['processor_params']->value['style']['shape'] ?? null)===null||$tmp==='' ? "rect" ?? null : $tmp) == $_smarty_tpl->tpl_vars['shape']->value) {?>selected="selected"<?php }?>
                    ><?php echo $_smarty_tpl->__("paypal_checkout.shape.".((string)$_smarty_tpl->tpl_vars['shape']->value));?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label for="elm_color<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("paypal_checkout.style.color");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][style][color]" id="elm_color<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array("gold","blue","silver","black"), 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ((($tmp = $_smarty_tpl->tpl_vars['processor_params']->value['style']['color'] ?? null)===null||$tmp==='' ? "gold" ?? null : $tmp) == $_smarty_tpl->tpl_vars['color']->value) {?>selected="selected"<?php }?>
                    ><?php echo $_smarty_tpl->__("paypal_checkout.color.".((string)$_smarty_tpl->tpl_vars['color']->value));?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <div class="control-group">
        <label for="elm_height<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("paypal_checkout.style.height");?>
:</label>
        <div class="controls">
            <input name="payment_data[processor_params][style][height]"
                id="elm_height<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                type="text"
                class="cm-numeric"
                data-m-dec="0"
                data-v-max="55"
                data-a-sign="px"
                data-p-sign="s"
                value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['processor_params']->value['style']['height'] ?? null)===null||$tmp==='' ? 55 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
            />
        </div>
    </div>
</div>
<?php }
}
