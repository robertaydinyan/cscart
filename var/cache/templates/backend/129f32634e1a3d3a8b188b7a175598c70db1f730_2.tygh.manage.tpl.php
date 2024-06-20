<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:51:19
  from '/var/www/html/design/backend/templates/views/currencies/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667336b7019593_86083127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '129f32634e1a3d3a8b188b7a175598c70db1f730' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/currencies/manage.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/object_group.tpl' => 1,
    'tygh:views/currencies/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/sidebox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_667336b7019593_86083127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('currency_rate','currency_sign','no_data','new_currency','add_currency','add_currency','exchange_rate','error_exchange_rate','currencies'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <div class="items-container <?php if ($_smarty_tpl->tpl_vars['is_allow_update_currencies']->value) {?>cm-sortable<?php }?> <?php if (!fn_allow_save_object('','',true)) {?> cm-hide-inputs<?php }?>"
         data-ca-sortable-table="currencies" data-ca-sortable-id-name="currency_id" id="manage_currencies_list">
        <?php if ($_smarty_tpl->tpl_vars['currencies_data']->value) {?>
        <div class="table-responsive-wrapper">
            <table class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies_data']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary'] == "Y") {?>
                        <?php $_smarty_tpl->_assignInScope('_href_delete', '');?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('_href_delete', "currencies.delete?currency_id=".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id']));?>
                    <?php }?>
                    <?php ob_start();
echo $_smarty_tpl->__("currency_rate");
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("currency_sign");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('currency_details', "<span>".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_code'])."</span>, ".$_prefixVariable1.": <span>".((string)$_smarty_tpl->tpl_vars['currency']->value['coefficient'])."</span>, ".$_prefixVariable2.": <span>".((string)$_smarty_tpl->tpl_vars['currency']->value['symbol'])."</span>");?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tool_items", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_data", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:extra_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:extra_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:extra_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['currency']->value['currency_id'],'text'=>$_smarty_tpl->tpl_vars['currency']->value['description'],'details'=>$_smarty_tpl->tpl_vars['currency_details']->value,'href'=>"currencies.update?currency_id=".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'href_delete'=>$_smarty_tpl->tpl_vars['_href_delete']->value,'delete_data'=>$_smarty_tpl->tpl_vars['currency']->value['currency_code'],'delete_target_id'=>"manage_currencies_list",'header_text'=>$_smarty_tpl->tpl_vars['currency']->value['description'],'table'=>"currencies",'object_id_name'=>"currency_id",'status'=>$_smarty_tpl->tpl_vars['currency']->value['status'],'additional_class'=>$_smarty_tpl->tpl_vars['is_allow_update_currencies']->value ? "cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['currency']->value['currency_id']) : '','no_table'=>true,'non_editable'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'is_view_link'=>true,'draggable'=>$_smarty_tpl->tpl_vars['is_allow_update_currencies']->value,'hidden'=>true,'update_controller'=>"currencies",'st_result_ids'=>"manage_currencies_list",'tool_items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tool_items'),'extra_data'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_data')), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <!--manage_currencies_list--></div>

    <div class="buttons-container">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_tools", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:import_rates"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:import_rates"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:import_rates"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_update_currencies']->value && fn_allow_save_object('','',true)) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/currencies/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currency'=>array()), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_currency",'text'=>$_smarty_tpl->__("new_currency"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("add_currency"),'link_text'=>$_smarty_tpl->__("add_currency"),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary"), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="sidebar-row exchange-rates">
        <h6 class="hidden exchange-rates__header"><?php echo $_smarty_tpl->__("exchange_rate");?>
</h6>
        <ul class="unstyled currencies-rate" id="currencies_stock_exchange">
        </ul>
        <span class="hidden exchange-rates__error"><?php echo $_smarty_tpl->__("error_exchange_rate");?>
</span>
    </div>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>

        var exchangeRate = {

            primary_currency: "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['primary_currency']->value, ENT_QUOTES, 'UTF-8');?>
",

            api_key: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['alpha_vantage_api_key'], ENT_QUOTES, 'UTF-8');?>
',

            init: function() {

                // Check if primary_currency is valid else use USD as default value
                exchangeRate.getRate(exchangeRate.primary_currency, 'USD', exchangeRate.getAllCurrency);

                $.ceEvent('on', 'ce.form_confirm', function(elm) {
                    var code = elm.data('caParams');

                    if(code !== 'EUR' && code !== 'GBP' && code !== 'CHF') {
                        $('li[data-ca-currency-code="' + code + '"]').remove();
                    }
                });
            },

            getAllCurrency: function(data){
                var currencies = ['USD', 'EUR', 'GBP', 'CHF'];

                if (data.RealtimeCurrencyExchangeRate !== undefined) {
                    var default_rate = data.RealtimeCurrencyExchangeRate.ExchangeRate !== undefined
                        ? parseFloat(data.RealtimeCurrencyExchangeRate.ExchangeRate)
                        : 0
                } else {
                    $('.exchange-rates__header, .exchange-rates__error').removeClass('hidden');
                }

                if (typeof(default_rate) !== "number" || default_rate === 0) {
                    exchangeRate.primary_currency = 'USD';
                }

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies_data']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['currency_code'] != "EUR" && $_smarty_tpl->tpl_vars['currency']->value['currency_code'] != "GBP" && $_smarty_tpl->tpl_vars['currency']->value['currency_code'] != "CHF" && $_smarty_tpl->tpl_vars['currency']->value['currency_code'] != "USD") {?>
                        currencies.push("<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
");
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                $.each(currencies, function(index, value) {
                    exchangeRate.getRate(value, exchangeRate.primary_currency);
                });
            },

            getRate: function (from, to, callback) {
                callback = callback || exchangeRate.parseExchangeRate;

                var url = 'https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE' +
                    '&from_currency=' + from +
                    '&to_currency=' + to +
                    '&apikey=' + exchangeRate.api_key +
                    '&ts=<?php echo htmlspecialchars((string) (defined('TIME') ? constant('TIME') : null), ENT_QUOTES, 'UTF-8');?>
';

                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(data, textStatus, jqxhr) {
                        if (callback) {
                            data = exchangeRate.normalizeData(data);
                            callback(data, textStatus, jqxhr);
                        }
                    },
                    dataType: "json",
                    cache: false
                });
            },

            normalizeData: function(data) {
                var normalized_obj = new Object();

                for (var key in data) {
                    var property_value = data[key],
                        properety_name = key.replace(/[\s_]+/g, '').replace(/^\d+\./, '');

                    if (typeof(data[key]) === 'object') {
                        property_value = exchangeRate.normalizeData(data[key]);
                    }

                    normalized_obj[properety_name] = property_value;
                }

                return normalized_obj;
            },

            parseExchangeRate: function(data) {
                if (data.RealtimeCurrencyExchangeRate !== undefined) {
                    var name = data.RealtimeCurrencyExchangeRate.FromCurrencyCode !== undefined
                        ? data.RealtimeCurrencyExchangeRate.FromCurrencyCode
                        : null;
                    var rate = data.RealtimeCurrencyExchangeRate.ExchangeRate !== undefined
                        ? parseFloat(data.RealtimeCurrencyExchangeRate.ExchangeRate)
                        : null;
                }

                var container = Tygh.$('#currencies_stock_exchange');

                if (rate && name && name !== exchangeRate.primary_currency) {
                    function asc_sort(a, b){
                        return ($(b).text()) < ($(a).text()) ? 1 : -1;
                    }
                    container.append('<li data-ca-currency-code="' + name + '">' + name + '/' + exchangeRate.primary_currency + '<span class="pull-right muted">' + rate + '</span></li>');
                    container.find('li').sort(asc_sort).appendTo(container);
                    $('.exchange-rates__header').removeClass('hidden');
                }
            }
        };

        exchangeRate.init();
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "important", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:important_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:important_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <p><?php echo $_smarty_tpl->__('important_currency_text',array('[link]'=>fn_url('settings.manage?section_id=Appearance')));?>
</p>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:important_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'important'),'title'=>$_smarty_tpl->__('important')), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("currencies"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons')), 0, false);
}
}
