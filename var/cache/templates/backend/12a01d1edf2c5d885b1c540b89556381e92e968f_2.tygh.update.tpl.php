<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:51:19
  from '/var/www/html/design/backend/templates/views/currencies/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667336b70932a2_27925468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12a01d1edf2c5d885b1c540b89556381e92e968f' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/currencies/update.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_667336b70932a2_27925468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','storefronts','name','code','primary_currency','currency_rate','currency_sign','after_sum','tt_views_currencies_update_after_sum','ths_sign','tt_views_currencies_update_ths_sign','dec_sign','tt_views_currencies_update_dec_sign','decimals','tt_views_currencies_update_decimals','add_storefronts','all_storefronts'));
if ($_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['currency']->value['currency_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "0");?>    
<?php }
$_smarty_tpl->_assignInScope('tabs_count', fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value ? 2 : 1);?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" name="update_currency_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class=" form-horizontal<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

    <input type="hidden" name="currency_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['return_url'], ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs tabs--enable-fill tabs--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabs_count']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <li id="tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
            <li id="tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("storefronts");?>
</a></li>
        <?php }?>
    </ul>
</div>

<div class="cm-tabs-content" id="content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<fieldset>
    <div class="control-group">
        <label class="control-label cm-required" for="description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[description]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
" id="description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" size="18">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label cm-required" for="currency_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("code");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[currency_code]" size="8" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
" id="currency_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" onkeyup="var matches = this.value.match(/^(\w*)/gi);  if (matches) this.value = matches;">
        </div>
    </div>
    
    
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label class="control-label" for="is_primary_currency_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
        <div class="controls">
            <input type="hidden" name="currency_data[coefficient]" value="1" />
            <input type="checkbox" name="currency_data[is_primary]" value="Y" <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary'] == "Y") {?>checked="checked"<?php }?> onclick="Tygh.$('.cm-coefficient').prop('disabled', Tygh.$(this).prop('checked'))" id="is_primary_currency_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
    <?php }?>

    <div class="control-group">
        <label class="control-label cm-required" for="coefficient_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("currency_rate");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[coefficient]" size="7" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['coefficient'], ENT_QUOTES, 'UTF-8');?>
" id="coefficient_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-coefficient" <?php if ($_smarty_tpl->tpl_vars['currency']->value['is_primary'] == "Y") {?>disabled="disabled"<?php }?>>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="symbol_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("currency_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[symbol]" size="6" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['symbol'], ENT_QUOTES, 'UTF-8');?>
" id="symbol_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>
    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:autoupdate"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:autoupdate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:autoupdate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="control-group">
        <label class="control-label" for="after_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("after_sum");?>
:</label>
        <div class="controls">
            <input type="hidden" name="currency_data[after]" value="N" />
            <input type="checkbox" name="currency_data[after]" value="Y" <?php if ($_smarty_tpl->tpl_vars['currency']->value['after'] == "Y") {?>checked="checked"<?php }?> id="after_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_after_sum");?>
</p>
        </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"currency_data[status]",'id'=>"add_currency",'hidden'=>true), 0, false);
?>
    <?php }?>

    <div class="control-group">
        <label class="control-label" for="thousands_separator_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("ths_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[thousands_separator]" size="6" maxlength="6" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['thousands_separator'], ENT_QUOTES, 'UTF-8');?>
" id="thousands_separator_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_ths_sign");?>
</p>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="decimal_separator_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("dec_sign");?>
:</label>
        <div class="controls">
            <input type="text" name="currency_data[decimals_separator]" size="6" maxlength="6" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['decimals_separator'], ENT_QUOTES, 'UTF-8');?>
" id="decimal_separator_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_dec_sign");?>
</p>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="decimals_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("decimals");?>
:</label>
       <div class="controls">
            <input type="text" name="currency_data[decimals]" size="1" maxlength="2" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['currency']->value['decimals'] ?? null)===null||$tmp==='' ? 2 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="decimals_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
           <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_currencies_update_decimals");?>
</p>
       </div>
    </div>
    </fieldset>
<!--content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
        <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('add_storefront_text', $_smarty_tpl->__("add_storefronts"));?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'input_name'=>"currency_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['currency']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0, false);
?>
        <!--content_tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if (fn_allow_save_object('','',true)) {?>
    <div class="buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[currencies.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, false);
?>
    </div>
<?php }?>

</form>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"currencies:tabs_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"currencies:tabs_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"currencies:tabs_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
