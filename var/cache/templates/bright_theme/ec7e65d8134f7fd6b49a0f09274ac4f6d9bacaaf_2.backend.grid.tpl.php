<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:59:52
  from '/var/www/html/design/backend/templates/views/block_manager/frontend_render/grid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338b8cae8c1_36593777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec7e65d8134f7fd6b49a0f09274ac4f6d9bacaaf' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/block_manager/frontend_render/grid.tpl',
      1 => 1717753007,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667338b8cae8c1_36593777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('grid','grid'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width'] > 0) {?>
        <?php $_smarty_tpl->_assignInScope('fluid_width', fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('fluid_width', $_smarty_tpl->tpl_vars['grid']->value['width']);?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['status'] == "A") {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div data-ca-block-manager-row-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['fluid_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] ?? null : $tmp));?>
        <div class="span<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                bm-block-manager__blocks-place
            <?php }?>"
            data-ca-block-manager-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-block-manager-grid-name="<?php echo $_smarty_tpl->__("grid");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper'] !== "blocks/grid_wrappers/lite_checkout.tpl") {?>
                data-ca-block-manager-blocks-place="true"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] === constant("\Tygh\BlockManager\Grid::ALIGN_LEFT")) {?>data-ca-block-manager-is-left-alignment="true"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] === constant("\Tygh\BlockManager\Grid::ALIGN_RIGHT")) {?>data-ca-block-manager-is-right-alignment="true"<?php }?>
            ><?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['grid']->value['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0, true);
} else {
echo $_smarty_tpl->tpl_vars['content']->value;
}?></div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/grid.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/grid.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>
    <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width'] > 0) {?>
        <?php $_smarty_tpl->_assignInScope('fluid_width', fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('fluid_width', $_smarty_tpl->tpl_vars['grid']->value['width']);?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['grid']->value['status'] == "A") {?>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div data-ca-block-manager-row-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width'] != "fixed") {?>row-fluid <?php } else { ?>row<?php }?>"><?php }?>
        <?php $_smarty_tpl->_assignInScope('width', (($tmp = $_smarty_tpl->tpl_vars['fluid_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] ?? null : $tmp));?>
        <div class="span<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?> offset<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                bm-block-manager__blocks-place
            <?php }?>"
            data-ca-block-manager-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['grid_id'], ENT_QUOTES, 'UTF-8');?>
"
            data-ca-block-manager-grid-name="<?php echo $_smarty_tpl->__("grid");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grid']->value['width'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper'] !== "blocks/grid_wrappers/lite_checkout.tpl") {?>
                data-ca-block-manager-blocks-place="true"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] === constant("\Tygh\BlockManager\Grid::ALIGN_LEFT")) {?>data-ca-block-manager-is-left-alignment="true"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grid']->value['content_align'] === constant("\Tygh\BlockManager\Grid::ALIGN_RIGHT")) {?>data-ca-block-manager-is-right-alignment="true"<?php }?>
            ><?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['grid']->value['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0, true);
} else {
echo $_smarty_tpl->tpl_vars['content']->value;
}?></div>
    <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }
}
}
}
}
