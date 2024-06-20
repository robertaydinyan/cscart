<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:21
  from '/var/www/html/design/backend/templates/views/companies/balance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673394d7d2013_78645562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9709386303c36b2dc9b0cf078cc40f6e7cf37459' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/balance.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/price.tpl' => 3,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/companies/components/balance_info.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:views/companies/components/balance_new_payment.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/companies/components/balance_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6673394d7d2013_78645562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),4=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.sanitize_html.php','function'=>'smarty_modifier_sanitize_html',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','status','date','vendor_payouts.type','vendor','vendor_payouts.transaction_value','expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','status','date','vendor_payouts.type','vendor','deleted','tools','delete','vendor_payouts.transaction_value','comment','no_data','new_withdrawal','add_withdrawal','new_payout','add_payout','vendor_accounting','vendor_payouts.current_balance'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>(($tmp = $_REQUEST['selected_section'] ?? null)===null||$tmp==='' ? "transactions" ?? null : $tmp),'group_name'=>"vendor_payouts"), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_assignInScope('hide_controls', true);?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit" name="manage_payouts_form" id="manage_payouts_form">

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['c_url']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <?php if ($_smarty_tpl->tpl_vars['payouts']->value) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "payouts_table", null, null);?>
                <div class="table-responsive-wrapper longtap-selection">
                    <table width="100%" class="table table-middle table--relative table-responsive" id="payouts_list">
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                        <tr>
                            <th class="left">
                                <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    <input type="checkbox"
                                           class="bulkedit-toggler hide"
                                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                <?php }?>
                            </th>
                            <th width="5%">
                                <div class="btn-expand-wrapper">
                                    <span id="on_st"
                                        alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                        title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                        class=" hand cm-combinations-visitors btn-expand btn-expand--header">
                                        <span class="icon-caret-right"></span>
                                    </span>
                                    <span id="off_st"
                                        alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                        title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                        class="hand hidden cm-combinations-visitors btn-expand btn-expand--header">
                                        <span class="icon-caret-down"></span>
                                    </span>
                                </div>
                            </th>
                            <th width="5%"><?php echo $_smarty_tpl->__("status");?>
</th>
                            <th>
                                <a class="cm-ajax"
                                   href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=sort_date&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                                   data-ca-target-id="pagination_contents">
                                    <?php echo $_smarty_tpl->__("date");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "sort_date") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?>
                                </a>
                            </th>
                            <th><?php echo $_smarty_tpl->__("vendor_payouts.type");?>
</th>
                            <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
                                <th><?php echo $_smarty_tpl->__("vendor");?>
</th>
                            <?php }?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:balance_list_th"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:balance_list_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:balance_list_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <th class="center" width="5%">&nbsp;</th>
                            <th width="15%" class="right"><?php echo $_smarty_tpl->__("vendor_payouts.transaction_value");?>
</th>
                        </tr>
                        </thead>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payouts']->value, 'payout', false, NULL, 'payouts', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['payout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payout']->value) {
$_smarty_tpl->tpl_vars['payout']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration']++;
?>
                            <tr class="payout payout-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['payout']->value['payout_type'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['payout']->value['approval_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
"
                            >
                                <td class="left mobile-hide">
                                    <input type="checkbox" name="payout_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['payout']->value['approval_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide"/>
                                </td>
                                <td class="left approval-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['payout']->value['approval_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                                    <button type="button"
                                          name="plus_minus"
                                          id="on_payout_note_<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"
                                          alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                          title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                          class="hand cm-combination-visitors btn-expand">
                                        <span class="icon-caret-right"></span>
                                    </button>
                                    <button type="button"
                                          name="minus_plus"
                                          id="off_payout_note_<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"
                                          alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                          title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
"
                                          class="hand hidden cm-combination-visitors btn-expand">
                                        <span class="icon-caret-down"></span>
                                    </button>
                                </td>
                                <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['payout']->value['payout_type'] == smarty_modifier_enum("VendorPayoutTypes::PAYOUT") || $_smarty_tpl->tpl_vars['payout']->value['payout_type'] == smarty_modifier_enum("VendorPayoutTypes::WITHDRAWAL")) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"companies_payouts",'id'=>$_smarty_tpl->tpl_vars['payout']->value['payout_id'],'status'=>$_smarty_tpl->tpl_vars['payout']->value['approval_status'],'items_status'=>$_smarty_tpl->tpl_vars['approval_statuses']->value,'notify_vendor'=>true,'update_controller'=>"companies.payouts",'st_return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url'],'st_result_ids'=>"balance_total,payouts_list",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_controls']->value), 0, true);
?>
                                    <?php }?>
                                </td>
                                <td data-th="<?php echo $_smarty_tpl->__("date");?>
">
                                    <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['payout']->value['payout_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td data-th="<?php echo $_smarty_tpl->__("vendor_payouts.type");?>
">
                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:payout_type_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:payout_type_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <?php echo smarty_modifier_sanitize_html($_smarty_tpl->tpl_vars['payout']->value['payout_type_description']);?>

                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:payout_type_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                    <td data-th="<?php echo $_smarty_tpl->__("vendor");?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['payout']->value['company_id']) {?>
                                            <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['payout']->value['company'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

                                        <?php } else { ?>
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'], ENT_QUOTES, 'UTF-8');?>

                                        <?php }?>
                                    </td>
                                <?php }?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:balance_list_tr"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:balance_list_tr"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:balance_list_tr"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <td class="center nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                    <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value) {?>
                                        <div class="hidden-tools">
                                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                                <li><?php ob_start();
echo htmlspecialchars((string) rawurlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"companies.payout_delete?payout_id=".((string)$_smarty_tpl->tpl_vars['payout']->value['payout_id'])."&redirect_url=".$_prefixVariable1,'method'=>"POST"), true);?>
</li>
                                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                        </div>
                                    <?php }?>
                                </td>
                                <td class="right" data-th="<?php echo $_smarty_tpl->__("vendor_payouts.transaction_value");?>
">
                                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:payout_amount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:payout_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                        <?php if ($_smarty_tpl->tpl_vars['payout']->value['payout_type'] == smarty_modifier_enum("VendorPayoutTypes::PAYOUT") && $_smarty_tpl->tpl_vars['payout']->value['payout_amount'] < 0) {?>
                                            <small class="muted">
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['display_amount']), 0, true);
?>
                                            </small>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['payout']->value['display_amount']), 0, true);
?>
                                        <?php }?>
                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:payout_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                </td>
                            </tr>
                            <tr id="payout_note_<?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_payouts']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"
                                class="row-more <?php if ($_smarty_tpl->tpl_vars['hide_extra_button']->value != "Y") {?>hidden<?php }?>">
                                <td colspan="8" class="row-more-body row-more-body--not-title top row-gray">
                                    <div class="control-group">
                                        <label class="control-label"
                                               for="payout_comments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->__("comment");?>

                                        </label>
                                        <div class="controls">
                                            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                                <p><?php if ($_smarty_tpl->tpl_vars['payout']->value['comments']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['comments'], ENT_QUOTES, 'UTF-8');
} else { ?>-<?php }?></p>
                                            <?php } else { ?>
                                                <textarea class="span6"
                                                          rows="4"
                                                          cols="25"
                                                          name="payout_comments[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
]"
                                                          id="payout_comments_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['payout_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payout']->value['comments'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                                            <?php }?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!--payouts_list--></table>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_payouts_form",'object'=>"payouts",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'payouts_table')), 0, false);
?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>

        <div class="clearfix">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['payouts']->value && $_smarty_tpl->tpl_vars['totals']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/balance_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </form>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php if (!$_smarty_tpl->tpl_vars['hide_controls']->value && $_smarty_tpl->tpl_vars['payouts']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[companies.update_payout_comments]",'but_role'=>"action",'but_target_form'=>"manage_payouts_form",'but_meta'=>"cm-submit"), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"companies:balance_adv_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"companies:balance_adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['is_allow_add_payout']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/balance_new_payment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('c_url'=>$_smarty_tpl->tpl_vars['c_url']->value), 0, false);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <?php $_smarty_tpl->_assignInScope('popup_title', $_smarty_tpl->__("new_withdrawal"));?>
                    <?php $_smarty_tpl->_assignInScope('btn_title', $_smarty_tpl->__("add_withdrawal"));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('popup_title', $_smarty_tpl->__("new_payout"));?>
                    <?php $_smarty_tpl->_assignInScope('btn_title', $_smarty_tpl->__("add_payout"));?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_payment",'text'=>$_smarty_tpl->tpl_vars['popup_title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->tpl_vars['btn_title']->value,'link_text'=>$_smarty_tpl->tpl_vars['btn_title']->value,'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary"), 0, false);
?>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"companies:balance_adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"companies.balance",'view_type'=>"balance"), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/balance_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"companies.balance"), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <?php echo $_smarty_tpl->__("vendor_accounting");?>

    <?php if ($_smarty_tpl->tpl_vars['current_balance']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "balance", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0, true);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <span class="f-middle"><?php echo $_smarty_tpl->__("vendor_payouts.current_balance",array("[balance]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'balance')));?>
</span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
