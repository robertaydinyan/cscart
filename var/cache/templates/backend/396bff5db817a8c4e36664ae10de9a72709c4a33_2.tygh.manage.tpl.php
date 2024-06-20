<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:10:45
  from '/var/www/html/design/backend/templates/addons/vendor_plans/views/vendor_plans/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b45573006_02165788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '396bff5db817a8c4e36664ae10de9a72709c4a33' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_plans/views/vendor_plans/manage.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:addons/vendor_plans/views/vendor_plans/components/plans_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66733b45573006_02165788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),3=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','price','vendor_plans.best_choise_short','vendors','status','position_short','name','price','vendor_plans.best_choise_short','vendors','tools','edit','delete','status','no_data','vendor_plans.new_vendor_plan','vendor_plans.add_vendor_plan','vendor_plans.add_vendor_plan','vendor_plans.vendor_plans'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="vendor_plans_form" id="vendor_plans_form">

<?php $_smarty_tpl->_assignInScope('has_management_permissions', fn_check_permissions("vendor_plans","update","admin","POST"));?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('extra_status', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['plans']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "vendor_plans_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative<?php if (!$_smarty_tpl->tpl_vars['has_management_permissions']->value) {?> cm-hide-inputs<?php }?> table-responsive">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th width="1%" class="left mobile-hide">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <input type="checkbox"
                                   class="bulkedit-toggler hide"
                                   data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                   data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="6%" class="nowrap">
                            <a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=position&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("position_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "position") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                        </th>
                        <th width="25%">
                            <a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                        </th>
                        <th width="25%" class="center">
                            <a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=price&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("price");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "price") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a>
                        </th>
                        <th width="10%" class="center nowrap"><?php echo $_smarty_tpl->__("vendor_plans.best_choise_short");?>
</th>
                        <th width="12%" class="center"><?php echo $_smarty_tpl->__("vendors");?>
</th>
                        <th width="10%" class="nowrap">&nbsp;</th>
                        <th width="10%" class="right">
                            <a class="cm-ajax" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a>
                        </th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                    <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['plan']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target" data-ct-company-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-category-ids="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['plan']->value['category_ids']), ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <td class="left mobile-hide">
                            <input type="checkbox" name="plan_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['plan']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                        </td>
                        <td class="left" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                            <input type="text" name="plans_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['position'], ENT_QUOTES, 'UTF-8');?>
" size="3" class="input-micro input-hidden" />
                        </td>
                        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                            <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
                                <a class="row-status cm-external-click link--monochrome" data-ca-external-click-id="<?php echo htmlspecialchars((string) "opener_plan_".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']), ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
                                </a>
                            <?php }?>
                        </td>
                        <td class="row-status" data-th="<?php echo $_smarty_tpl->__("price");?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currencies']->value[(defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null)]['symbol'], ENT_QUOTES, 'UTF-8');?>
)">
                            <input type="text" name="plans_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['price'], ENT_QUOTES, 'UTF-8');?>
" size="6" class="input-mini input-hidden" />&nbsp;<select name="plans_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
][periodicity]" class="input-small input-hidden"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['periodicities']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['plan']->value['periodicity']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select>
                        </td>
                        <td class="center" data-th="<?php echo $_smarty_tpl->__("vendor_plans.best_choise_short");?>
">
                            <input type="radio" name="default_plan" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['plan_id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['plan']->value['is_default']) {?> checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['plan']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>disabled="disabled"<?php }?> />
                        </td>
                        <td class="center" data-th="<?php echo $_smarty_tpl->__("vendors");?>
">
                            <a href="<?php echo htmlspecialchars((string) fn_url("companies.manage?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id'])), ENT_QUOTES, 'UTF-8');?>
" class="badge"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['plan']->value['companies_count'], ENT_QUOTES, 'UTF-8');?>
</a>
                        </td>
                        <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"vendor_plans:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"vendor_plans:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
                                    <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"plan_".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id']),'text'=>$_smarty_tpl->tpl_vars['plan']->value['plan'],'link_text'=>$_smarty_tpl->__("edit"),'act'=>"link",'href'=>"vendor_plans.update?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id'])), 0, true);
?></li>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'href'=>"vendor_plans.delete?plan_id=".((string)$_smarty_tpl->tpl_vars['plan']->value['plan_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'text'=>$_smarty_tpl->__("delete"),'method'=>"POST"), true);?>
</li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"vendor_plans:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items')), true);?>

                            </div>
                        </td>
                        <td class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"vendor_plans",'id'=>$_smarty_tpl->tpl_vars['plan']->value['plan_id'],'status'=>$_smarty_tpl->tpl_vars['plan']->value['status'],'items_status'=>fn_get_default_statuses($_smarty_tpl->tpl_vars['plan']->value['status'],true),'hidden'=>true,'update_controller'=>"vendor_plans",'hide_for_vendor'=>!$_smarty_tpl->tpl_vars['has_management_permissions']->value,'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['extra_status']->value),'status_target_id'=>"pagination_contents"), 0, true);
?>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"vendor_plans_form",'object'=>"vendor_plans",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'vendor_plans_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['plans']->value && $_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[vendor_plans.m_update]",'but_role'=>"submit-button",'but_target_form'=>"vendor_plans_form",'but_meta'=>"bulkedit-disable-save-button",'is_btn_primary'=>false), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['has_management_permissions']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_usergroups",'text'=>$_smarty_tpl->__("vendor_plans.new_vendor_plan"),'title'=>$_smarty_tpl->__("vendor_plans.add_vendor_plan"),'link_text'=>$_smarty_tpl->__("vendor_plans.add_vendor_plan"),'href'=>fn_url("vendor_plans.add"),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary"), 0, true);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"vendor_plans.manage",'view_type'=>"vendor_plans"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_plans/views/vendor_plans/components/plans_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"vendor_plans.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("vendor_plans.vendor_plans"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
