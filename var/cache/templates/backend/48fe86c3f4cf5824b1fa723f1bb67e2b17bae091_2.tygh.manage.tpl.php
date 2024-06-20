<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:13:11
  from '/var/www/html/design/backend/templates/views/upgrade_center/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733bd7562369_98233040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48fe86c3f4cf5824b1fa723f1bb67e2b17bae091' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/upgrade_center/manage.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:views/upgrade_center/components/package_icon.tpl' => 2,
    'tygh:views/upgrade_center/components/notices.tpl' => 1,
    'tygh:views/upgrade_center/components/install_button.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/upgrade_center/components/upload_upgrade_package.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/product_release_info.tpl' => 3,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66733bd7562369_98233040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.formatfilesize.php','function'=>'smarty_modifier_formatfilesize',),3=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),4=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),5=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),6=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('upgrade_center.warning_msg_timeout_fail','upgrade_center.warning_msg_timeout_check_failed','warning','upgrade_center.warning_msg_upgrade_is_complicated','upgrade_center.warning_msg_specialists','upgrade_center.warning_msg_third_party_add_ons','upgrade_center.warning_msg_test_local','upgrade_center.warning_msg_after_upgrade','upgrade_center.warning_msg_generally','check_php_timeout','upgrade_center.skip_backup','i_agree_continue','upgrade_center.incompatible_third_party_addons','upgrade_center.check_addons','install','download','loading','upgraded_on','local_modifications','refresh_packages_list','settings','installed_upgrades','upload_upgrade_package','upload_upgrade_package','upload_upgrade_package','product_env.dont_miss_features','product_env.upgrade_to_latest_version','product_env.up_to_date','product_env.now_running','product_env.can_upgrade_store','product_env.latest_product_version','developers','status','any','active','disabled','admin_search_button','reset','upgrade_center'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
    <div class="upgrade-center" id="content_packages">
        <a id="popup_timeout_check_failed_link" class="cm-dialog-opener cm-dialog-auto-size hidden" data-ca-target-id="popup_timeout_check_failed"></a>

        <div class="hidden upgrade-center_wizard cm-dialog-auto-size <?php if ($_smarty_tpl->tpl_vars['timeout_check_failed']->value) {?> cm-dialog-auto-open<?php }?>" id="popup_timeout_check_failed" title="<?php echo $_smarty_tpl->__("upgrade_center.warning_msg_timeout_fail");?>
">
            <div class="upgrade_center_wizard-msg">
                <p class="text-error lead">
                    <?php echo $_smarty_tpl->__("upgrade_center.warning_msg_timeout_check_failed");?>

                </p>
            </div>
            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cancel_action'=>"close",'hide_first_button'=>true), 0, false);
?>
            </div>
        </div>

        <div class="table-responsive-wrapper upgrade-list" id="upgrade_table">
            <table class="table table-upgrade table-responsive table-responsive-w-titles">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrade_packages']->value, 'packages', false, 'type');
$_smarty_tpl->tpl_vars['packages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['packages']->value) {
$_smarty_tpl->tpl_vars['packages']->do_else = false;
?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package', false, '_id');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_id']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('id', smarty_modifier_replace($_smarty_tpl->tpl_vars['_id']->value,".","_"));?>
                        <tr id="upgrade_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <td>
                                <div class="upgrade-center_icon">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/upgrade_center/components/package_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('package'=>$_smarty_tpl->tpl_vars['package']->value), 0, true);
?>
                                </div>
                            </td>
                            <td>
                                <div class="upgrade-center_package">
                                    <form id="upgrade_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="upgrade_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" action="<?php echo htmlspecialchars((string) fn_url(), ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit cm-disable-check-changes">
                                        <input type="hidden" name="type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="hidden" name="result_ids" value="install_notices_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
,install_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
">

                                        <div class="hidden upgrade-center_wizard" id="content_upgrade_center_wizard_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("warning");?>
">
                                            <div class="upgrade_center_wizard-msg">
                                                <p class="text-error lead">
                                                    <?php echo $_smarty_tpl->__("upgrade_center.warning_msg_upgrade_is_complicated");?>

                                                </p>
                                                <blockquote>
                                                    <p><?php echo $_smarty_tpl->__("upgrade_center.warning_msg_specialists",array('[upgrade_center_specialist]'=>$_smarty_tpl->tpl_vars['config']->value['resources']['upgrade_center_specialist_url'],'[upgrade_center_team]'=>$_smarty_tpl->tpl_vars['config']->value['resources']['upgrade_center_team_url']));?>
</p>
                                                    <br>
                                                    <p><?php echo $_smarty_tpl->__("upgrade_center.warning_msg_third_party_add_ons");?>
</p>
                                                    <br>
                                                    <p><?php echo $_smarty_tpl->__("upgrade_center.warning_msg_test_local");?>
</p>
                                                    <br>
                                                    <p><?php echo $_smarty_tpl->__("upgrade_center.warning_msg_after_upgrade");?>
</p>
                                                    <br>
                                                    <p><?php echo $_smarty_tpl->__("upgrade_center.warning_msg_generally");?>
<br><br>
                                                        <input type="submit" name="dispatch[upgrade_center.check_timeout]" class="upgrade-center_check_timeout btn cm-ajax cm-comet cm-post" value="<?php echo $_smarty_tpl->__("check_php_timeout");?>
">
                                                    </p>
                                                    <br>
                                                </blockquote>
                                            </div>
                                            <div class="buttons-container">
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['backup']['is_skippable']) {?>
                                                <label class="pull-left skip-backup">
                                                    <input id="skip_backup" type="checkbox" name="skip_backup" value="Y"<?php if ($_smarty_tpl->tpl_vars['package']->value['backup']['skip_by_default']) {?> checked="checked"<?php }?> />
                                                    <span><?php echo $_smarty_tpl->__("upgrade_center.skip_backup");?>
</span>
                                                </label>
                                                <?php }?>
                                                <div class="btn-group btn-hover dropleft">
                                                    <input type="submit" name="dispatch[upgrade_center.install]" class="btn btn-primary cm-ajax cm-comet cm-dialog-closer" value="<?php echo $_smarty_tpl->__("i_agree_continue");?>
">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="upgrade-center_item">
                                            <div class="upgrade-center_content">
                                                <h4 class="upgrade-center_title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                                                <ul class="upgrade-center_info">
                                                    <li><small class="muted"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['package']->value['timestamp']), ENT_QUOTES, 'UTF-8');?>
</small></li>
                                                    <li><small class="muted"><?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['package']->value['size']);?>
</small></li>
                                                </ul>
                                                <div class="upgrade-center_desc">
                                                    <?php echo $_smarty_tpl->tpl_vars['package']->value['description'];?>

                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['type']->value === "core" && $_smarty_tpl->tpl_vars['_id']->value === "core" && !empty($_smarty_tpl->tpl_vars['package']->value['incompatible_addons'])) {?>
                                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "incompatible_addons_query", null, null);?>addons.manage?<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value['incompatible_addons'], 'incompatible_addon_name');
$_smarty_tpl->tpl_vars['incompatible_addon_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['incompatible_addon_name']->value) {
$_smarty_tpl->tpl_vars['incompatible_addon_name']->do_else = false;
?>names[]=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['incompatible_addon_name']->value, ENT_QUOTES, 'UTF-8');?>
&<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                    <div class="alert alert-muted">
                                                        <?php echo $_smarty_tpl->__("upgrade_center.incompatible_third_party_addons");?>

                                                        <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'incompatible_addons_query'),"A"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("upgrade_center.check_addons");?>
</a>
                                                    </div>
                                                <?php }?>
                                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/upgrade_center/components/notices.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td class="nowrap right">
                                <div class="upgrade-center__actions">
                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['ready_to_install']) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/upgrade_center/components/install_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'_id'=>$_smarty_tpl->tpl_vars['_id']->value,'caption'=>$_smarty_tpl->__("install"),'form'=>"upgrade_form_".((string)$_smarty_tpl->tpl_vars['type']->value)."_".((string)$_smarty_tpl->tpl_vars['id']->value),'show_package_contents'=>true,'package_name'=>$_smarty_tpl->tpl_vars['package']->value['name']), 0, true);
?>
                                    <?php } else { ?>
                                        <div class="upgrade-center_install">
                                            <input form="upgrade_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                name="dispatch[upgrade_center.download]"
                                                type="submit"
                                                class="btn cm-loading-btn <?php if ($_smarty_tpl->tpl_vars['type']->value == "core" || $_smarty_tpl->tpl_vars['type']->value == "hotfix") {?>btn-primary<?php }?>"
                                                value="<?php echo $_smarty_tpl->__("download");?>
"
                                                data-ca-loading-text="<?php echo $_smarty_tpl->__("loading");?>
">
                                        </div>
                                    <?php }?>
                                </div>
                            </td>
                        <!--upgrade_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}
if ($_smarty_tpl->tpl_vars['packages']->do_else) {
?>
                    <p class="no-items"><?php echo $_smarty_tpl->__('text_no_upgrades_available');?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <!--upgrade_table--></div>
    <!--content_packages--></div>

    <div class="upgrade-center hidden" id="content_installed_upgrades">
        <div class="table-responsive-wrapper upgrade-list" id="installed_upgrades">
            <table class="table table-upgrade table-responsive table-responsive-w-titles">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installed_packages']->value, 'package', false, '_id');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_id']->value => $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('id', smarty_modifier_replace($_smarty_tpl->tpl_vars['_id']->value,".","_"));?>
                    <tr id="installed_upgrade_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <td>
                            <div class="upgrade-center_icon">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:views/upgrade_center/components/package_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('package'=>$_smarty_tpl->tpl_vars['package']->value), 0, true);
?>
                            </div>
                        </td>
                        <td>
                            <div class="upgrade-center_item">
                                <div class="upgrade-center_content">
                                    <h4 class="upgrade-center_title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h4>
                                    <ul class="upgrade-center_info">
                                        <li> <strong><?php echo $_smarty_tpl->__("upgraded_on");?>
:</strong> <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['package']->value['timestamp']), ENT_QUOTES, 'UTF-8');?>
</li>
                                    </ul>
                                    <p class="upgrade-center_desc">
                                        <?php echo $_smarty_tpl->tpl_vars['package']->value['description'];?>

                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="nowrap right">
                            <?php if (!empty($_smarty_tpl->tpl_vars['package']->value['conflicts'])) {?>
                                <div class="upgrade-center__actions">
                                    <div class="upgrade-center_install">
                                        <a class="upgrade-center_pkg cm-dialog-opener cm-ajax btn" href="<?php echo htmlspecialchars((string) fn_url("upgrade_center.conflicts?package_id=".((string)$_smarty_tpl->tpl_vars['package']->value['id'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="conflicts_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['package']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-dialog-title="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['package']->value['name'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("local_modifications");?>
</a>
                                    </div>
                                </div>
                            <?php }?>
                        </td>
                    <!--installed_upgrade_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['package']->do_else) {
?>
                    <p class="no-items"><?php echo $_smarty_tpl->__('no_data');?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <!--installed_upgrades--></div>
    <!--content_installed_upgrades--></div>
    
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>

        (function(_, $){
            $('.cm-loading-btn').on('click', function() {
                var self = $(this);
                setTimeout(function() {
                    self.prop('value', self.data('caLoadingText'));
                    $('.cm-loading-btn').attr('disabled', true);
                }, 50);
                return true;
            });

            $('.upgrade-center_check_timeout').on('click', function() {
                var timer;
                var millisecBeforeShowMsg = 365000;

                $.ceEvent('on', 'ce.progress_init', function(o) {
                    timer = window.setTimeout(function() {
                        $.toggleStatusBox('hide');
                        $.ceDialog('get_last').ceDialog('close');
                        $('#popup_timeout_check_failed_link').trigger('click');
                        $('#comet_control, .modal-backdrop').remove();
                    }, millisecBeforeShowMsg);
                });

                $.ceEvent('on', 'ce.progress_finish', function(o) {
                    if(timer) {
                        window.clearTimeout(timer);
                        timer = null;
                    }
                });
            });

        })(Tygh, Tygh.$);
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_smarty_tpl->tpl_vars['selected_section']->value,'track'=>true), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("refresh_packages_list"),'href'=>"upgrade_center.refresh"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("settings"),'href'=>"settings.manage&section_id=Upgrade_center"), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'install_btn');?>

    <?php if ($_smarty_tpl->tpl_vars['installed_upgrades']->value['has_upgrades']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"upgrade_center.installed_upgrades",'but_text'=>$_smarty_tpl->__("installed_upgrades"),'but_role'=>"link"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "upload_upgrade_package", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/upgrade_center/components/upload_upgrade_package.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"upgrade_center:adv_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"upgrade_center:adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_upgrade_package_container",'text'=>$_smarty_tpl->__("upload_upgrade_package"),'title'=>$_smarty_tpl->__("upload_upgrade_package"),'link_text'=>$_smarty_tpl->__("upload_upgrade_package"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'upload_upgrade_package'),'act'=>"general",'link_class'=>"btn-primary cm-dialog-auto-size",'icon'=>"icon-plus"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"upgrade_center:adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <div class="sidebar-row">
        <?php if ($_smarty_tpl->tpl_vars['latest_version_upgrade']->value) {?>
            <h6><?php echo $_smarty_tpl->__("product_env.dont_miss_features");?>
</h6>
        <?php } elseif ($_smarty_tpl->tpl_vars['available_core_upgrade']->value) {?>
            <h6><?php echo $_smarty_tpl->__("product_env.upgrade_to_latest_version");?>
</h6>
        <?php } else { ?>
            <h6><?php echo $_smarty_tpl->__("product_env.up_to_date");?>
</h6>
        <?php }?>
        <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->assign('release_info', ob_get_clean());
?>
        <p><?php echo $_smarty_tpl->__("product_env.now_running",array("[release_info]"=>smarty_modifier_trim($_smarty_tpl->tpl_vars['release_info']->value)));?>
.</p>
        <?php if ($_smarty_tpl->tpl_vars['available_core_upgrade']->value) {?>
            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('env_provider'=>$_smarty_tpl->tpl_vars['available_core_upgrade']->value), 0, true);
$_smarty_tpl->assign('release_info', ob_get_clean());
?>
            <p><?php echo $_smarty_tpl->__("product_env.can_upgrade_store",array("[release_info]"=>smarty_modifier_trim($_smarty_tpl->tpl_vars['release_info']->value)));?>
.</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['latest_version_upgrade']->value) {?>
            <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('env_provider'=>$_smarty_tpl->tpl_vars['latest_version_upgrade']->value), 0, true);
$_smarty_tpl->assign('release_info', ob_get_clean());
?>
            <p><?php echo $_smarty_tpl->__("product_env.latest_product_version",array("[release_info]"=>smarty_modifier_trim($_smarty_tpl->tpl_vars['release_info']->value)));?>
.</p>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['upgrade_packages']->value['addon'] || $_smarty_tpl->tpl_vars['search']->value) {?>
        <div class="sidebar-row">
            <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="upgrade_center_filters" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="upgrade_center_filters">
                <?php if ($_smarty_tpl->tpl_vars['developers']->value || $_smarty_tpl->tpl_vars['search']->value) {?>
                    <div class="sidebar-field">
                        <strong><?php echo $_smarty_tpl->__("developers");?>
</strong>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['developers']->value, 'developer', false, 'developer_key');
$_smarty_tpl->tpl_vars['developer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['developer_key']->value => $_smarty_tpl->tpl_vars['developer']->value) {
$_smarty_tpl->tpl_vars['developer']->do_else = false;
?>
                            <label class="control-label checkbox" for="supplier_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer_key']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="checkbox" id="supplier_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="supplier[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer']->value['title'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['developer']->value['title'],$_smarty_tpl->tpl_vars['search']->value['supplier'])) {?> checked="checked"<?php }?>>
                                <span>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer']->value['title'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['developer']->value['position'], ENT_QUOTES, 'UTF-8');?>
)
                            </span>
                            </label>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>

                <div class="sidebar-field">
                    <label for="addon_status"><strong><?php echo $_smarty_tpl->__("status");?>
</strong></label>
                    <select id="addon_status" name="status">
                        <option value="any" <?php if (empty($_smarty_tpl->tpl_vars['search']->value['status']) || $_smarty_tpl->tpl_vars['search']->value['status'] == "any") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                        <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] === "A") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
                        <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] === "D") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
                    </select>
                </div>

                <div class="sidebar-field advanced-search-field">
                    <input class="btn" type="submit" name="dispatch[upgrade_center.manage]" value="<?php echo $_smarty_tpl->__("admin_search_button");?>
">
                    <a class="btn btn-link" href="<?php echo htmlspecialchars((string) fn_url("upgrade_center.manage.reset_view"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
                </div>
            </form>
        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("upgrade_center"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
