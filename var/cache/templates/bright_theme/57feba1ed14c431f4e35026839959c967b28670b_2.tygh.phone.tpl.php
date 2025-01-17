<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:41:49
  from '/var/www/html/design/themes/responsive/templates/views/orders/components/payments/phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673428da0f953_68922843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57feba1ed14c431f4e35026839959c967b28670b' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/orders/components/payments/phone.tpl',
      1 => 1718826492,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/phone.tpl' => 2,
  ),
),false)) {
function content_6673428da0f953_68922843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="litecheckout__group">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'] && !$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']);?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'] && $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'] && $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'] == "billing_first") {?>
                <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']);?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('phone', '');?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>"customer_phone",'name'=>"payment_info[customer_phone]",'value'=>$_smarty_tpl->tpl_vars['phone']->value,'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'class'=>"cm-autocomplete-off",'width'=>"full"), 0, false);
?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/phone.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/phone.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="litecheckout__group">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {?>
        <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'] && !$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']);?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'] && $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'] && $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position'] == "billing_first") {?>
                <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']);?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('phone', '');?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checkout'=>true,'id'=>"customer_phone",'name'=>"payment_info[customer_phone]",'value'=>$_smarty_tpl->tpl_vars['phone']->value,'label_text'=>$_smarty_tpl->tpl_vars['field']->value['description'],'class'=>"cm-autocomplete-off",'width'=>"full"), 0, true);
?>
</div>
<?php }
}
}
