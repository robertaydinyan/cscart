<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:21
  from '/var/www/html/design/backend/templates/views/companies/components/balance_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673394d88aae4_34665864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c496dc3670b91338b9b68a8c6ea08f99c7cc06' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/balance_search_form.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/ajax_select_object.tpl' => 1,
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_6673394d88aae4_34665864 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','vendor','all_vendors','vendor_payouts.type','all','vendor_payouts.type.','vendor_payouts.approval_status','all'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="balance_search_form" method="get" class="cm-disable-empty-all">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>

<?php if ($_REQUEST['redirect_url']) {?>
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_REQUEST['redirect_url'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
if ($_REQUEST['selected_section'] != '') {?>
    <input type="hidden" id="selected_section" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="sidebar-field ajax-select">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("vendor");?>
</label>
        <div class="controls">
            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                <input type="hidden" name="vendor" id="search_hidden_vendor" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search']->value['vendor'] ?? null)===null||$tmp==='' ? 'all' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_url'=>"companies.get_companies_list?show_all=Y",'text'=>(($tmp = fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['vendor']) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("all_vendors") ?? null : $tmp),'result_elm'=>"search_hidden_vendor",'id'=>"company_search",'relative_dropdown'=>false), 0, false);
?>
                <?php } else { ?>
                <?php echo htmlspecialchars((string) fn_get_company_name($_smarty_tpl->tpl_vars['search']->value['vendor']), ENT_QUOTES, 'UTF-8');?>

            <?php }?>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['payout_types']->value) {?>
    <div class="sidebar-field">
        <label><?php echo $_smarty_tpl->__("vendor_payouts.type");?>
:</label>
        <select name="payout_type">
            <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payout_types']->value, 'type_id');
$_smarty_tpl->tpl_vars['type_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type_id']->value) {
$_smarty_tpl->tpl_vars['type_id']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_REQUEST['payout_type'] == $_smarty_tpl->tpl_vars['type_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_payouts.type.".((string)$_smarty_tpl->tpl_vars['type_id']->value));?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php }?>


<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("vendor_payouts.approval_status");?>
:</label>
    <select name="approval_status">
        <option value=""><?php echo $_smarty_tpl->__("all");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['approval_statuses']->value, 'status_description', false, 'status_id');
$_smarty_tpl->tpl_vars['status_description']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status_id']->value => $_smarty_tpl->tpl_vars['status_description']->value) {
$_smarty_tpl->tpl_vars['status_description']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_REQUEST['approval_status'] == $_smarty_tpl->tpl_vars['status_id']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_description']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>

<div class="sidebar-field">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"balance_search_form",'display'=>"form"), 0, false);
?>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'no_adv_link'=>true,'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"balance"), 0, false);
?>

</form>
</div>
<hr><?php }
}
