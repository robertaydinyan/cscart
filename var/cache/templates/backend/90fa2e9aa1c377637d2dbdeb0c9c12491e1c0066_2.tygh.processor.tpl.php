<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:41:19
  from '/var/www/html/design/backend/templates/views/payments/processor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673426fc3f134_57196158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90fa2e9aa1c377637d2dbdeb0c9c12491e1c0066' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/payments/processor.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673426fc3f134_57196158 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="content_tab_conf_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
">

<?php echo $_smarty_tpl->tpl_vars['curl_info']->value;?>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['processor_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<!--content_tab_conf_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
