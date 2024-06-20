<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:10:45
  from '/var/www/html/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/plans_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b455cf014_59767276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3615cce8a26b4a2d44bf8f4836453509b0707006' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/plans_search_form.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/search.tpl' => 1,
  ),
),false)) {
function content_66733b455cf014_59767276 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','name','status','active','hidden','disabled','price'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form name="companies_search_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
">

    <div class="sidebar-field">
        <label for="elm_name"><?php echo $_smarty_tpl->__("name");?>
</label>
        <input type="text" name="plan" id="elm_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['plan'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>

    <div class="sidebar-field">
        <label for="status" class="control-label"><?php echo $_smarty_tpl->__("status");?>
</label>
        <select name="status" id="status">
            <option value="">--</option>
            <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("active");?>
</option>
            <option value="H" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "H") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("hidden");?>
</option>
            <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("disabled");?>
</option>
        </select>
    </div>

    <div class="sidebar-field">
        <label for="price_from"><?php echo $_smarty_tpl->__("price");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
        <input type="text" class="input-small" name="price_from" id="price_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['price_from'], ENT_QUOTES, 'UTF-8');?>
" size="3" /> - <input type="text" class="input-small" name="price_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['price_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" />
    </div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[".((string)$_smarty_tpl->tpl_vars['dispatch']->value)."]"), 0, false);
?>
</form>
<?php }
}
