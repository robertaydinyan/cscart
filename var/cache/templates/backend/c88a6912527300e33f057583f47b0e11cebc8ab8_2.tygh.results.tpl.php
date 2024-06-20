<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:53
  from '/var/www/html/design/backend/templates/views/search/results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733bc5b5d462_09008727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c88a6912527300e33f057583f47b0e11cebc8ab8' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/search/results.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/pagination.tpl' => 2,
    'tygh:views/products/components/one_product.tpl' => 1,
    'tygh:views/pages/components/one_page.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66733bc5b5d462_09008727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_no_matching_results_found','text_no_matching_results_found','search_results_for'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php if ($_smarty_tpl->tpl_vars['params']->value['compact'] == "Y") {?>
    <?php if ($_smarty_tpl->tpl_vars['found_objects']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['found_objects']->value, 'data', false, 'object');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons');?>

                    <div class="cm-tab-tools tab-tools" id="tools_manage_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
_buttons">
                    <!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value, ENT_QUOTES, 'UTF-8');?>
_buttons--></div>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>"manage_".((string)$_smarty_tpl->tpl_vars['search']->value['default']),'track'=>true), 0, false);
?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
    <?php }?>
    
<?php } else { ?>
    <hr width="100%" />

    <?php if ($_smarty_tpl->tpl_vars['search_results']->value) {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <p>&nbsp;</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
    <?php if (!$_smarty_tpl->tpl_vars['result']->value['first']) {?>
    <hr />
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"search:search_results"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"search:search_results"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['result']->value['object'] == "products") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/one_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['result']->value,'key'=>$_smarty_tpl->tpl_vars['result']->value['id']), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['object'] == "pages") {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/pages/components/one_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>$_smarty_tpl->tpl_vars['result']->value), 0, true);
?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"search:search_results"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <p>&nbsp;</p>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("text_no_matching_results_found");?>
</p>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("search_results_for",array("[search]"=>$_REQUEST['q'])));
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'main_buttons_meta'=>"bulkedit-buttons-disabled",'mainbox_content_wrapper_class'=>"bulkedit-disabled"), 0, false);
}
}
