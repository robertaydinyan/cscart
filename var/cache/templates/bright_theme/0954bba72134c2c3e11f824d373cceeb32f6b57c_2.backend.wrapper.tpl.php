<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:59:52
  from '/var/www/html/design/backend/templates/views/block_manager/frontend_render/wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338b8c84d00_14337386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0954bba72134c2c3e11f824d373cceeb32f6b57c' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/block_manager/frontend_render/wrapper.tpl',
      1 => 1717753007,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/components/block_menu.tpl' => 2,
  ),
),false)) {
function content_667338b8c84d00_14337386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['status'] === "D") {?>bm-block-manager__block--disabled<?php }?>
    bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location_data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right
    <?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>"
    data-ca-block-manager-snapping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="bm-block-manager__block-content clearfix">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['wrapper']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/wrapper.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/wrapper.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['status'] === "D") {?>bm-block-manager__block--disabled<?php }?>
    bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location_data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right
    <?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>"
    data-ca-block-manager-snapping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="bm-block-manager__block-content clearfix">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['wrapper']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div><?php }
}
}