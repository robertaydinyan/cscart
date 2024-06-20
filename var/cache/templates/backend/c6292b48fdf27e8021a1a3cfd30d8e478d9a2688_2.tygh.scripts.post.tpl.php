<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:29
  from '/var/www/html/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360d624a71_51986316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6292b48fdf27e8021a1a3cfd30d8e478d9a2688' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/paypal_checkout/hooks/index/scripts.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360d624a71_51986316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/paypal_checkout/configure.js"),$_smarty_tpl);?>

<?php }
}
