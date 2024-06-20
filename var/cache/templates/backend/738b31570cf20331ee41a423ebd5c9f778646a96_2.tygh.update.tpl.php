<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:55:08
  from '/var/www/html/design/backend/templates/views/languages/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673379c12d4b0_38267185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '738b31570cf20331ee41a423ebd5c9f778646a96' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/languages/update.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_status.tpl' => 1,
    'tygh:pickers/storefronts/picker.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/fileuploader.tpl' => 1,
  ),
),false)) {
function content_6673379c12d4b0_38267185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','storefronts','language_code','tt_views_languages_manage_language_code','name','country','tt_views_languages_update_country','clone_from','add_storefronts','all_storefronts','install'));
if ($_smarty_tpl->tpl_vars['lang_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['lang_data']->value['lang_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', "0");
}?>

<?php $_smarty_tpl->_assignInScope('hide_inputs', !fn_allow_save_object('',"languages"));
$_smarty_tpl->_assignInScope('tabs_count', fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value ? 2 : 1);?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="add_language_form" class="form-horizontal<?php if (!fn_allow_save_object('',"languages")) {?> cm-hide-inputs<?php }?>">
    <input type="hidden" name="selected_section" value="languages" />
    <input type="hidden" name="lang_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
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
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:tabs_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:tabs_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:tabs_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </ul>
    </div>

    <div class="cm-tabs-content">
        <div id="content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <fieldset>
                <div class="control-group">
                    <label for="elm_to_lang_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("language_code");?>
:</label>
                    <div class="controls">
                        <input id="elm_to_lang_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="language_data[lang_code]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_data']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
" size="6" maxlength="2">
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_languages_manage_language_code");?>
</p>
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_lang_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
:</label>
                    <div class="controls">
                        <input id="elm_lang_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="language_data[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['lang_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
" maxlength="64">
                    </div>
                </div>

                <div class="control-group">
                    <label for="elm_lang_country_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("country");?>
:</label>
                    <div class="controls">
                        <select id="elm_lang_country_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="language_data[country_code]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                <option <?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['lang_data']->value['country_code']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_languages_update_country");?>
</p>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj'=>$_smarty_tpl->tpl_vars['lang_data']->value,'display'=>"radio",'input_name'=>"language_data[status]",'hidden'=>true), 0, false);
?>

                <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                <div class="control-group">
                    <label for="elm_from_lang_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("clone_from");?>
:</label>
                    <div class="controls">
                        <select name="language_data[from_lang_code]" id="elm_from_lang_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_translation_languages(''), 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <?php }?>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:update"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:update"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:update"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </fieldset>
        <!--content_tab_general_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if (fn_allowed_for("MULTIVENDOR:ULTIMATE") || $_smarty_tpl->tpl_vars['is_sharing_enabled']->value) {?>
            <div class="hidden" id="content_tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php $_smarty_tpl->_assignInScope('add_storefront_text', $_smarty_tpl->__("add_storefronts"));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/storefronts/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('multiple'=>true,'input_name'=>"language_data[storefront_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['lang_data']->value['storefront_ids'],'data_id'=>"storefront_ids",'but_meta'=>"pull-right",'no_item_text'=>$_smarty_tpl->__("all_storefronts"),'but_text'=>$_smarty_tpl->tpl_vars['add_storefront_text']->value,'view_only'=>($_smarty_tpl->tpl_vars['is_sharing_enabled']->value && $_smarty_tpl->tpl_vars['runtime']->value['company_id'])), 0, false);
?>
                <!--content_tab_storefronts_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"languages:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"languages:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"languages:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[languages.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
        </div>
    <?php }?>

    </form>
<?php } else { ?>
    <div class="install-addon">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_language_form" class="form-horizontal<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>" enctype="multipart/form-data">

            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"language_data[po_file]",'allowed_ext'=>"po, zip"), 0, false);
?>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[languages.install_from_po]",'but_text'=>$_smarty_tpl->__("install"),'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
                </div>
            <?php }?>
        </form>
    </div>
<?php }?>

<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
