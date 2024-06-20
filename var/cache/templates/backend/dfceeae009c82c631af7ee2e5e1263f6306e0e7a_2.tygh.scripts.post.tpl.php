<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:29
  from '/var/www/html/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360d622f46_28649767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfceeae009c82c631af7ee2e5e1263f6306e0e7a' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/help_center/hooks/index/scripts.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360d622f46_28649767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center.js"),$_smarty_tpl);?>

<?php }
}
}
