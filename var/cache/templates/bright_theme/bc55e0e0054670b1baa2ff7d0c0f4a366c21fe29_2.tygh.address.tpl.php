<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:40
  from '/var/www/html/design/themes/responsive/templates/views/checkout/components/customer/address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673399c0e6e09_77808051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc55e0e0054670b1baa2ff7d0c0f4a366c21fe29' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/checkout/components/customer/address.tpl',
      1 => 1718826492,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/checkout/components/user_profiles.tpl' => 2,
    'tygh:views/checkout/components/profile_fields.tpl' => 2,
  ),
),false)) {
function content_6673399c0e6e09_77808051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('element_identifier', "address-group");
$_smarty_tpl->_assignInScope('group_meta', "hidden");?>

<?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->_assignInScope('element_identifier', "user-profiles");?>
    <?php $_smarty_tpl->_assignInScope('group_meta', '');
}?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), 0, false);
?>
    <?php }?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/address.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/address.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('element_identifier', "address-group");
$_smarty_tpl->_assignInScope('group_meta', "hidden");?>

<?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
    <?php $_smarty_tpl->_assignInScope('element_identifier', "user-profiles");?>
    <?php $_smarty_tpl->_assignInScope('group_meta', '');
}?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_meta']->value, ENT_QUOTES, 'UTF-8');?>
 litecheckout__group" data-ca-lite-checkout-element="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element_identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-address-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_profiles_on_checkout']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/user_profiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/checkout/components/profile_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profile_fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value,'section'=>smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS"),'exclude'=>array("s_city","s_country","s_state","customer_notes")), 0, true);
?>
    <?php }?>
</div>
<?php }
}
}
