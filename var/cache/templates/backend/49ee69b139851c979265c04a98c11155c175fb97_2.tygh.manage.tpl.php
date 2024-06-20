<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:55:08
  from '/var/www/html/design/backend/templates/views/languages/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673379c117706_22099072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ee69b139851c979265c04a98c11155c175fb97' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/languages/manage.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/languages/update.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/sidebox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6673379c117706_22099072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('language_code','name','country','status','language_code','name','Default','country','tools','edit','delete','clone','export','update_translation','update_translation','status','new_language','add_language','add_language','on_site_live_editing','more_languages','languages_find_more','languages'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>

        <div id="content_languages">

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_language", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/languages/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('lang_data'=>array()), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="languages_form" name="languages_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
                <input type="hidden" name="page" value="<?php echo htmlspecialchars((string) $_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
                <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars((string) $_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

                <?php $_smarty_tpl->_assignInScope('language_statuses', fn_get_default_statuses('',true));?>
                <?php $_smarty_tpl->_assignInScope('is_not_only_default_lang', smarty_modifier_count($_smarty_tpl->tpl_vars['langs']->value) > 1);?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "languages_table", null, null);?>
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-responsive">
                        <thead data-ca-bulkedit-default-object="true">
                            <tr class="cm-first-sibling">
                                <th width="6%" class="left" data-th="">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['is_allow_update_languages']->value && $_smarty_tpl->tpl_vars['is_not_only_default_lang']->value ? $_smarty_tpl->tpl_vars['language_statuses']->value : '','is_check_disabled'=>!$_smarty_tpl->tpl_vars['is_not_only_default_lang']->value || !$_smarty_tpl->tpl_vars['is_allow_update_languages']->value), 0, false);
?>

                                    <input type="checkbox"
                                        class="bulkedit-toggler hide"
                                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="15%"><?php echo $_smarty_tpl->__("language_code");?>
</th>
                                <th width="20%"><?php echo $_smarty_tpl->__("name");?>
</th>
                                <th width="20%"><?php echo $_smarty_tpl->__("country");?>
</th>

                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <th width="8%">&nbsp;</th>
                                <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                            </tr>
                        </thead>
                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['langs']->value) == 1) {?>
                            <?php $_smarty_tpl->_assignInScope('disable_change', true);?>
                        <?php }?>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                        <tr class="cm-longtap-target cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['is_allow_update_languages']->value && $_smarty_tpl->tpl_vars['is_not_only_default_lang']->value) {?>
                                data-ca-longtap-action="setCheckBox"
                                data-ca-longtap-target="input.cm-item"
                                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-bulkedit-dispatch-parameter="lang_ids[]"
                            <?php }?>
                        >
                            <td width="6%" class="left" data-th="">
                                <input type="checkbox" name="lang_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide"></td>
                            <td width="15%" data-th="<?php echo $_smarty_tpl->__("language_code");?>
">
                                <input type="hidden" name="update_language[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
][lang_code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->tpl_vars['language']->value['lang_code'],'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id'],'class'=>"link--monochrome"), true);?>

                            </td>
                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code'] == (defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null)) {?>(<?php echo $_smarty_tpl->__("Default");?>
)<?php }?>
                            </td>
                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("country");?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"flag flag-".((string)(strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'])))),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                            </td>

                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            <td width="8%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("edit"),'href'=>"languages.update?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'prefix'=>$_smarty_tpl->tpl_vars['language']->value['lang_id']), true);?>
</li>

                                            <?php if ($_smarty_tpl->tpl_vars['language']->value['lang_code'] != (defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null)) {?>
                                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"languages.delete_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'method'=>"POST"), true);?>
</li>
                                            <?php }?>

                                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-language-name",'text'=>$_smarty_tpl->__("clone"),'href'=>"languages.clone_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'method'=>"POST"), true);?>
</li>
                                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("export"),'href'=>"languages.export_language?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'method'=>"POST"), true);?>
</li>
                                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("update_translation"),'title'=>$_smarty_tpl->__("update_translation"),'href'=>"languages.update_translation?lang_id=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id']),'id'=>"opener_group_".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables",'target_id'=>"content_group".((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables",'class'=>"cm-dialog-auto-size",'prefix'=>((string)$_smarty_tpl->tpl_vars['language']->value['lang_id'])."_variables"), true);?>
</li>
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                                </div>

                            </td>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popups", null, null);?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popups');?>

                                <div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
></div>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                            <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                                <?php $_smarty_tpl->_assignInScope('lang_id', $_smarty_tpl->tpl_vars['language']->value['lang_id']);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"languages",'id'=>$_smarty_tpl->tpl_vars['lang_id']->value,'prefix'=>"lng",'status'=>$_smarty_tpl->tpl_vars['language']->value['status'],'hidden'=>"Y",'object_id_name'=>"lang_id",'table'=>"languages",'update_controller'=>"languages",'st_result_ids'=>"content_languages",'non_editable'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id']), 0, true);
?>
                            </td>

                        </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                        </table>
                    </div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('has_permission'=>$_smarty_tpl->tpl_vars['is_allow_update_languages']->value && $_smarty_tpl->tpl_vars['is_not_only_default_lang']->value,'form'=>"languages_form",'object'=>"languages",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'languages_table')), 0, false);
?>
            </form>
        <!--content_languages--></div>

        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <div class="hidden" id="content_available_languages"></div>
        <?php }?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'popups');?>


    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:adv_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['is_allow_update_languages']->value && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_language",'text'=>$_smarty_tpl->__("new_language"),'title'=>$_smarty_tpl->__("add_language"),'link_text'=>$_smarty_tpl->__("add_language"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_language'),'act'=>"general",'icon'=>"icon-plus",'link_class'=>"btn-primary cm-dialog-auto-size"), 0, false);
?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("on_site_live_editing"),'href'=>fn_url("customization.update_mode?type=live_editor&status=enable"),'target'=>"_blank",'method'=>"POST"), true);?>
</li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_button');?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "important", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:important_text"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:important_text"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <p><?php echo $_smarty_tpl->__('important_language_text',array('[link]'=>fn_url('settings.manage?section_id=Appearance')));?>
</p>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:important_text"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'important'),'title'=>$_smarty_tpl->__('important')), 0, false);
?>
    <div class="sidebar-row marketplace">
        <h6><?php echo $_smarty_tpl->__("more_languages");?>
</h6>
        <p><?php echo $_smarty_tpl->__("languages_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['translate']));?>
</p>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("languages"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function($, _){
        $(document).ready(function(){
            $('.cm-language-name').click(function(){
                var lang_code = prompt(_.tr('enter_new_lang_code'));

                if (lang_code == null || lang_code.length == 0) {
                    // Customer hit Cancel button or did not enter lang_code
                    return false;
                }

                var href = $.attachToUrl($(this).attr('href'), 'lang_code=' + lang_code);
                $(this).attr('href', href);
            });
        });
    }(Tygh.$, Tygh));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
