<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:44
  from '/var/www/html/design/themes/responsive/templates/views/companies/components/sorting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396417d240_25213524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02d03c7ed8c54fe588354f175ac1bace52a28417' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/companies/components/sorting.tpl',
      1 => 1718826492,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sorting.tpl' => 2,
  ),
),false)) {
function content_6673396417d240_25213524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids"));
$_smarty_tpl->_assignInScope('sorting', fn_get_companies_sorting(''));
$_smarty_tpl->_assignInScope('sorting_orders', fn_get_companies_sorting_orders(''));
$_smarty_tpl->_assignInScope('pagination_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "asc") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_pref'=>"company-"), 0, false);
?>
</div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/companies/components/sorting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/companies/components/sorting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="ty-sort-container">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml']) {?>
    <?php $_smarty_tpl->_assignInScope('ajax_class', "cm-ajax");
}?>

<?php $_smarty_tpl->_assignInScope('curl', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order","result_ids"));
$_smarty_tpl->_assignInScope('sorting', fn_get_companies_sorting(''));
$_smarty_tpl->_assignInScope('sorting_orders', fn_get_companies_sorting_orders(''));
$_smarty_tpl->_assignInScope('pagination_id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "asc") {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else { ?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sorting_text", null, null);?>
        <a><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sorting']->value[$_smarty_tpl->tpl_vars['search']->value['sort_by']]['description'], ENT_QUOTES, 'UTF-8');
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-dir"),$_smarty_tpl);?>
</a>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<div>
<?php $_smarty_tpl->_subTemplateRender("tygh:common/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_pref'=>"company-"), 0, true);
?>
</div>
</div>
<?php }
}
}
