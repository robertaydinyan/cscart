<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:00:30
  from '/var/www/html/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338de2b2ca6_11877130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b57030d9ad62cc6242462b2172bfea8957890e66' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/append_language.tpl' => 1,
  ),
),false)) {
function content_667338de2b2ca6_11877130 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.terms_and_conditions','vendor_terms.terms_and_conditions_tooltip'));
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_terms_and_conditions" class="hidden">
    <div class="control-group">
        <label class="control-label" for="elm_company_terms"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions");?>
:</label>
        <div class="controls">
            <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg']->value, ENT_QUOTES, 'UTF-8');?>
">
                <textarea id="elm_company_terms"
                    name="company_data[terms]"
                    cols="55"
                    rows="8"
                    class="cm-wysiwyg input-large"
                ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_data']->value['terms'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs']->value,'simple_tooltip'=>true), 0, false);
?>
            </div>
            <p class="muted description"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions_tooltip");?>
</p>
        </div>
    </div>
</div>
<?php }
}
}
