<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:45:37
  from '/var/www/html/design/backend/templates/addons/stripe_connect/views/payments/components/cc_processors/stripe_connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667343719a1c16_64921934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78fdeb1bcded68731476d1c3b50cdab17d03595' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/stripe_connect/views/payments/components/cc_processors/stripe_connect.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/widget_copy.tpl' => 4,
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_667343719a1c16_64921934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('stripe_connect.client_id','stripe_connect.publishable_key','stripe_connect.secret_key','stripe_connect.redirect_uris','stripe_connect.redirect_uri_vendor','stripe_connect.redirect_uris.description','stripe_connect.redirect_uri_admin','stripe_connect.redirect_uris.description','currency','stripe_connect.enable_3d_secure','stripe_connect.enable_3d_secure.description','stripe_connect.stripe_checkout','stripe_connect.stripe_checkout.description','stripe_connect.allow_express_accounts','stripe_connect.allow_express_accounts.description','stripe_connect.check_accounts','stripe_connect.check_accounts_cron','stripe_connect.delay_transfer_of_funds_to_vendors','stripe_connect.delay_transfer_of_funds','stripe_connect.trigger_transfer_funds.description','stripe_connect.automatic_transfer','stripe_connect.cron_text'));
$_smarty_tpl->_assignInScope('suffix', (($tmp = $_smarty_tpl->tpl_vars['payment_id']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>

<input type="hidden"
       name="payment_data[processor_params][is_stripe_connect]"
       value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

/>

<input type="hidden"
       name="payment_data[processor_params][created_at]"
       value="<?php if ($_smarty_tpl->tpl_vars['processor_params']->value['created_at']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor_params']->value['created_at'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) time(), ENT_QUOTES, 'UTF-8');
}?>"
/>

<div class="control-group">
    <label for="elm_client_id<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("stripe_connect.client_id");?>
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
    <label for="elm_publishable_key<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("stripe_connect.publishable_key");?>
:</label>
    <div class="controls">
        <input type="text"
               name="payment_data[processor_params][publishable_key]"
               id="elm_publishable_key<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor_params']->value['publishable_key'], ENT_QUOTES, 'UTF-8');?>
"
        />
    </div>
</div>

<div class="control-group">
    <label for="elm_secret_key<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("stripe_connect.secret_key");?>
:</label>
    <div class="controls">
        <input type="password"
               name="payment_data[processor_params][secret_key]"
               id="elm_secret_key<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['processor_params']->value['secret_key'], ENT_QUOTES, 'UTF-8');?>
"
               autocomplete="new-password"
        />
    </div>
</div>

<div class="control-group">
    <label class="control-label">
        <?php echo $_smarty_tpl->__("stripe_connect.redirect_uris");?>
:
    </label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_title'=>$_smarty_tpl->__("stripe_connect.redirect_uri_vendor"),'widget_copy_text'=>$_smarty_tpl->__("stripe_connect.redirect_uris.description"),'widget_copy_code_text'=>fn_url("companies.stripe_connect_auth","V")), 0, false);
?>

        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_title'=>$_smarty_tpl->__("stripe_connect.redirect_uri_admin"),'widget_copy_text'=>$_smarty_tpl->__("stripe_connect.redirect_uris.description"),'widget_copy_code_text'=>fn_url("companies.stripe_connect_auth","A")), 0, true);
?>
        <?php }?>
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
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency', false, 'code');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency'] == $_smarty_tpl->tpl_vars['code']->value) {?> selected="selected"<?php }?>
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>

<div class="control-group">
    <label for="elm_payment_type<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("stripe_connect.enable_3d_secure");?>
:
    </label>
    <div class="controls">
        <input type="hidden"
               name="payment_data[processor_params][payment_type]"
               value="<?php echo htmlspecialchars((string) "card_simple", ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="payment_data[processor_params][payment_type]"
               value="<?php echo htmlspecialchars((string) "card", ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payment_type'] === "card" || empty($_smarty_tpl->tpl_vars['processor_params']->value['payment_type'])) {?>
                    checked="checked"
                <?php }?>
               onclick="Tygh.$.disable_elms(['stripe_checkout<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
'], !this.checked);Tygh.$('#stripe_checkout<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
').prop('checked', false);"
        />
        <div class="stripe-config-form__3d-secure-description">
            <?php echo $_smarty_tpl->__("stripe_connect.enable_3d_secure.description");?>

        </div>
    </div>
</div>

<div class="control-group">
    <label for="elm_is_checkout_enabled<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("stripe_connect.stripe_checkout");?>
:
    </label>
    <div class="controls">
        <input type="hidden"
               name="payment_data[processor_params][is_checkout_enabled]"
               value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>

        />
        <input id="stripe_checkout<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               type="checkbox"
               name="payment_data[processor_params][is_checkout_enabled]"
               value=<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>

               <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['payment_type'] === "card") {?>
                   <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['is_checkout_enabled'] === smarty_modifier_enum("YesNo::YES")) {?>
                       checked="checked"
                   <?php }?>
               <?php } elseif (empty($_smarty_tpl->tpl_vars['processor_params']->value['payment_type'])) {?>
                   checked="checked"
               <?php } else { ?>
                   disabled="disabled"
               <?php }?>
        />
        <div class="stripe-config-form__is-checkout-enabled-description">
            <?php echo $_smarty_tpl->__("stripe_connect.stripe_checkout.description");?>

        </div>
    </div>
</div>

<div class="control-group">
    <label for="elm_payment_type<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("stripe_connect.allow_express_accounts");?>
:
    </label>
    <div class="controls">
        <input type="hidden"
               name="payment_data[processor_params][allow_express_accounts]"
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="payment_data[processor_params][allow_express_accounts]"
               id="elm_allow_express_accounts<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['allow_express_accounts'] === smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
               value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <div class="stripe-config-form__allow-express-accounts-description">
            <?php echo $_smarty_tpl->__("stripe_connect.allow_express_accounts.description");?>

        </div>
    </div>
</div>
<div class="control-group">
    <label class="control-label">
        <?php echo $_smarty_tpl->__("stripe_connect.check_accounts");?>
:
    </label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_text'=>$_smarty_tpl->__("stripe_connect.check_accounts_cron"),'widget_copy_code_text'=>fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"stripe_connect.check_accounts"))), 0, true);
?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("stripe_connect.delay_transfer_of_funds_to_vendors"),'target'=>"#delay_transfer_of_funds".((string)$_smarty_tpl->tpl_vars['suffix']->value)), 0, false);
?>

<fieldset id="delay_transfer_of_funds<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse-visible collapse in">
    <div class="control-group">
        <label for="elm_delay_transfer_of_funds<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        ><?php echo $_smarty_tpl->__("stripe_connect.delay_transfer_of_funds");?>
:</label>
        <div class="controls">
            <input type="hidden"
                   name="payment_data[processor_params][delay_transfer_of_funds]"
                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
            />
            <input type="checkbox"
                   name="payment_data[processor_params][delay_transfer_of_funds]"
                   id="elm_delay_transfer_of_funds<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['delay_transfer_of_funds'] === smarty_modifier_enum("YesNo::YES")) {?>checked<?php }?>
                   value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
            />
            <div class="stripe-config-form__delay-transfer-of-funds-description">
                <?php echo $_smarty_tpl->__("stripe_connect.trigger_transfer_funds.description");?>

            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['payment_id']->value) {?>
        <div class="control-group">
            <label class="control-label">
                <?php echo $_smarty_tpl->__("stripe_connect.automatic_transfer");?>
:
            </label>
            <div class="controls">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/widget_copy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('widget_copy_text'=>$_smarty_tpl->__("stripe_connect.cron_text"),'widget_copy_code_text'=>fn_get_console_command("php /path/to/cart/",$_smarty_tpl->tpl_vars['config']->value['admin_index'],array("dispatch"=>"stripe_connect.transfer_funds_by_cron","payment_id"=>$_smarty_tpl->tpl_vars['payment_id']->value,"days"=>14))), 0, true);
?>
            </div>
        </div>
    <?php }?>
</fieldset>
<?php }
}
