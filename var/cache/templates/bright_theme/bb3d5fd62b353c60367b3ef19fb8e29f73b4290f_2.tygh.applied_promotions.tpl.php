<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:28:37
  from '/var/www/html/design/themes/responsive/templates/views/checkout/components/applied_promotions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733f756f16b5_96594029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3d5fd62b353c60367b3ef19fb8e29f73b4290f' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/views/checkout/components/applied_promotions.tpl',
      1 => 1718826492,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733f756f16b5_96594029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_applied_promotions','text_applied_promotions'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="applied_promotions">
    <span class="ty-strong"><?php echo $_smarty_tpl->__("text_applied_promotions");?>
</span>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['applied_promotions'], 'promotion');
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
        <li>
            <?php if (smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description'] ?: ''))) {?>
                <a id="sw_promo_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
"class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a>
                <div id="promo_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content hidden"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>

            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<!--applied_promotions--></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/applied_promotions.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/applied_promotions.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="applied_promotions">
    <span class="ty-strong"><?php echo $_smarty_tpl->__("text_applied_promotions");?>
</span>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['applied_promotions'], 'promotion');
$_smarty_tpl->tpl_vars['promotion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promotion']->value) {
$_smarty_tpl->tpl_vars['promotion']->do_else = false;
?>
        <li>
            <?php if (smarty_modifier_trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['promotion']->value['short_description'] ?: ''))) {?>
                <a id="sw_promo_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
"class="cm-combination ty-dashed-link"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a>
                <div id="promo_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['promotion']->value['promotion_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-wysiwyg-content hidden"><?php echo $_smarty_tpl->tpl_vars['promotion']->value['short_description'];?>
</div>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>

            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<!--applied_promotions--></div><?php }
}
}
