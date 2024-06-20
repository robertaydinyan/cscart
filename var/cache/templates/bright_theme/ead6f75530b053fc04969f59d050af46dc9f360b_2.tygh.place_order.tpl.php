<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:40
  from '/var/www/html/design/themes/responsive/templates/buttons/place_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673399c39e214_10500562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead6f75530b053fc04969f59d050af46dc9f360b' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/buttons/place_order.tpl',
      1 => 1718826492,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_6673399c39e214_10500562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.place_an_order_for','lite_checkout.place_an_order_for'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><button class="litecheckout__submit-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        type="submit"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled<?php }?>
>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "order_total", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
            <?php $_smarty_tpl->_assignInScope('_total', $_smarty_tpl->tpl_vars['cart']->value['total']+$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge']);?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp)), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("lite_checkout.place_an_order_for",array("[amount]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'order_total'))));?>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>

<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></button>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/place_order.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/place_order.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button class="litecheckout__submit-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        type="submit"
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled<?php }?>
>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "order_total", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['payment_surcharge'] && !$_smarty_tpl->tpl_vars['take_surcharge_from_vendor']->value) {?>
            <?php $_smarty_tpl->_assignInScope('_total', $_smarty_tpl->tpl_vars['cart']->value['total']+$_smarty_tpl->tpl_vars['cart']->value['payment_surcharge']);?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['_total']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] ?? null : $tmp)), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("lite_checkout.place_an_order_for",array("[amount]"=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'order_total'))));?>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>

<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></button>
<?php }
}
}
