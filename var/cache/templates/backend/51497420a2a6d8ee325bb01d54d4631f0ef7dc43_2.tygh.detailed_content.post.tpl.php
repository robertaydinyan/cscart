<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:00:30
  from '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/detailed_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338de2862e1_21981697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51497420a2a6d8ee325bb01d54d4631f0ef7dc43' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/detailed_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
  ),
),false)) {
function content_667338de2862e1_21981697 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation','pre_moderation','pre_moderation_edit','pre_moderation_edit_vendors'));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_prior_approval'] == 'custom' || $_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_updates_approval'] == 'custom' || $_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['vendor_profile_updates_approval'] == 'custom') {?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("vendor_data_premoderation"),'target'=>"#collapsable_vendor_moderate"), 0, false);
?>

<div id="collapsable_vendor_moderate" class="in collapse">
    <fieldset>
    
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_prior_approval'] == 'custom') {?>
        <div class="control-group setting-wide">
            <label class="control-label" for="company_pre_moderation"><?php echo $_smarty_tpl->__("pre_moderation");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[pre_moderation]" value="N" />
                <input type="checkbox" id="company_pre_moderation" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['pre_moderation'] == "Y") {?>checked="checked"<?php }?> name="company_data[pre_moderation]" value="Y">
            </div>
        </div>
        <?php }?>
    
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['products_updates_approval'] == 'custom') {?>
        <div class="control-group setting-wide">
            <label class="control-label" for="company_pre_moderation_edit"><?php echo $_smarty_tpl->__("pre_moderation_edit");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[pre_moderation_edit]" value="N" />
                <input type="checkbox" id="company_pre_moderation_edit" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['pre_moderation_edit'] == "Y") {?>checked="checked"<?php }?> name="company_data[pre_moderation_edit]" value="Y">
            </div>
        </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['vendor_profile_updates_approval'] == 'custom') {?>
        <div class="control-group setting-wide">
            <label class="control-label" for="company_pre_moderation_edit_vendors"><?php echo $_smarty_tpl->__("pre_moderation_edit_vendors");?>
:</label>
            <div class="controls">
                <input type="hidden" name="company_data[pre_moderation_edit_vendors]" value="N" />
                <input type="checkbox" id="company_pre_moderation_edit_vendors" <?php if ($_smarty_tpl->tpl_vars['company_data']->value['pre_moderation_edit_vendors'] == "Y") {?>checked="checked"<?php }?> name="company_data[pre_moderation_edit_vendors]" value="Y">
            </div>
        </div>
        <?php }?>
         
    </fieldset>
</div>
<?php }
}
}
}
