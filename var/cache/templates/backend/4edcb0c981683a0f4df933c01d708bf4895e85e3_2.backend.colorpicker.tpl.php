<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:00
  from '/var/www/html/design/backend/templates/views/theme_editor/components/colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397404b771_86467826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4edcb0c981683a0f4df933c01d708bf4895e85e3' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/theme_editor/components/colorpicker.tpl',
      1 => 1717753007,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673397404b771_86467826 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="input-prepend">
    <?php $_smarty_tpl->_assignInScope('cp_id', (($tmp = $_smarty_tpl->tpl_vars['cp_id']->value ?? null)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) ?? null : $tmp));?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php }
}
