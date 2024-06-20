<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:29:32
  from '/var/www/html/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733facc5a5c1_59076680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3fe1b667bd5d63da3615770e73bcc3306d19bf3' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733facc5a5c1_59076680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['_addon']->value === "reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }
}
}
