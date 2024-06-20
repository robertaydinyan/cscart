<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:53:32
  from '/var/www/html/design/themes/responsive/templates/addons/amazon_payment_services/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673454c7da6a1_58139950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8180751dcfadf5715e0ed599c85207ef8f12549d' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/amazon_payment_services/hooks/index/styles.post.tpl',
      1 => 1718830390,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673454c7da6a1_58139950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'checkout') {?>
	<?php echo smarty_function_style(array('src'=>"addons/amazon_payment_services/slick.css"),$_smarty_tpl);?>

<?php }
echo smarty_function_style(array('src'=>"addons/amazon_payment_services/styles.less"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/amazon_payment_services/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/amazon_payment_services/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == 'checkout') {?>
	<?php echo smarty_function_style(array('src'=>"addons/amazon_payment_services/slick.css"),$_smarty_tpl);?>

<?php }
echo smarty_function_style(array('src'=>"addons/amazon_payment_services/styles.less"),$_smarty_tpl);
}
}
}
