<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:00:30
  from '/var/www/html/design/backend/templates/views/companies/components/logos_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338de264f93_48964995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e677e93c5392b436401a85775b3ef24fe6dc35f6' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/companies/components/logos_list.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
  ),
),false)) {
function content_667338de264f93_48964995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_image','alt_text','tt_views_site_layout_logos_alt_text'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logo_types']->value, 'type_data', false, 'type');
$_smarty_tpl->tpl_vars['type_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['type_data']->value) {
$_smarty_tpl->tpl_vars['type_data']->do_else = false;
?>

<?php if ($_smarty_tpl->tpl_vars['logos']->value && $_smarty_tpl->tpl_vars['logos']->value[$_smarty_tpl->tpl_vars['type']->value]) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['logos']->value[$_smarty_tpl->tpl_vars['type']->value]['logo_id']);?>
    <?php $_smarty_tpl->_assignInScope('image', $_smarty_tpl->tpl_vars['logos']->value[$_smarty_tpl->tpl_vars['type']->value]['image']);?>
    <?php $_smarty_tpl->_assignInScope('company_name', fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);?>
    <?php $_smarty_tpl->_assignInScope('image', array());
}?>
<input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
<input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<div class="attach-images">
    <div class="upload-box clearfix">
        <h5><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['type_data']->value['text']);?>
</h5>
        <div class="image-wrap pull-left">
            <div class="image">
                <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                <img class="solid-border" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="152">
                <?php } else { ?>
                <div class="no-image"><?php echo smarty_function_include_ext(array('file'=>"common/icon_deprecated.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div>
                <?php }?>
            </div>
            <div class="image-alt">
                <div class="input-prepend">
                    <span class="add-on cm-tooltip" title="<?php echo $_smarty_tpl->__("alt_text");?>
. <?php echo $_smarty_tpl->__("tt_views_site_layout_logos_alt_text");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment"),$_smarty_tpl);?>
</span>
                    <input type="text" class="input-text cm-image-field" id="alt_text_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image']->value['alt'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_name']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="">
                </div>
            </div>
        </div>

        <div class="image-upload">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['type']->value)."]",'is_image'=>true), 0, true);
?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"logos:upload_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"logos:upload_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"logos:upload_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>


    </div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
