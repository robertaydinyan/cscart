<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:29
  from '/var/www/html/design/backend/templates/components/menu/mobile_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360d483659_80427742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f1af58ede098a9bcf3391f6763391d9114c17ac' => 
    array (
      0 => '/var/www/html/design/backend/templates/components/menu/mobile_menu.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360d483659_80427742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>
<div class="btn-bar-left overlay-navbar-open-container">
    <a role="button" class="btn mobile-menu-toggler">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-align-justify overlay-navbar-open"),$_smarty_tpl);?>

    </a>
</div><?php }
}
