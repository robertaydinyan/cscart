<?php
/* Smarty version 4.3.0, created on 2024-06-19 14:02:22
  from '/var/www/html/design/backend/templates/views/products/components/products_update_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673475e8ee761_12566061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '516327881dbaabc6834425b09822fb00a9ed8c5a' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/products/components/products_update_options.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:views/product_options/manage.tpl' => 1,
  ),
),false)) {
function content_6673475e8ee761_12566061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('link_an_existing_option','forbidden_combinations','allowed_combinations'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra", null, null);?>
    <?php $_smarty_tpl->_assignInScope('enable_search', (($tmp = $_smarty_tpl->tpl_vars['enable_search']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

    <div class="pull-left">
        <?php if (!$_smarty_tpl->tpl_vars['enable_search']->value) {?>
        <div class="object-selector object-selector--options">
            <select id="option_add"
                    class="cm-object-selector"
                    form="form"
                    <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>
                        tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    multiple
                    name="product_data[linked_option_ids][]"
                    data-ca-enable-search="true"
                    data-ca-load-via-ajax="true"
                    data-ca-escape-html="false"
                    data-ca-close-on-select="false"
                    data-ca-page-size="10"
                    data-ca-data-url="<?php echo fn_url("product_options.get_available_options_list?product_id=".((string)$_REQUEST['product_id']));?>
"
                    data-ca-placeholder="<?php echo $_smarty_tpl->__("link_an_existing_option");?>
"
                    data-ca-allow-clear="false"
            >
            </select>
        </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:update_product_options_actions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:update_product_options_actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['product_data']->value['exceptions_type'] === smarty_modifier_enum("ProductOptionsExceptionsTypes::FORBIDDEN")) {?>
                <?php $_smarty_tpl->_assignInScope('except_title', $_smarty_tpl->__("forbidden_combinations"));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('except_title', $_smarty_tpl->__("allowed_combinations"));?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['except_title']->value,'but_href'=>"product_options.exceptions?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'but_meta'=>"btn",'but_role'=>"text"), 0, false);
?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:update_product_options_actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/product_options/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>"product",'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra'),'product_id'=>$_REQUEST['product_id'],'view_mode'=>"embed",'enable_search'=>$_smarty_tpl->tpl_vars['enable_search']->value), 0, false);
}
}
