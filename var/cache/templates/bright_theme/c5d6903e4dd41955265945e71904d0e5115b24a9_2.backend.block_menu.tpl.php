<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:59:52
  from '/var/www/html/design/backend/templates/views/block_manager/frontend_render/components/block_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667338b8bd8e49_33745061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5d6903e4dd41955265945e71904d0e5115b24a9' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/block_manager/frontend_render/components/block_menu.tpl',
      1 => 1717753007,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667338b8bd8e49_33745061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('is_block_enabled', $_smarty_tpl->tpl_vars['block']->value['status'] === "A" || !$_smarty_tpl->tpl_vars['block']->value['status']);
$_smarty_tpl->_assignInScope('snapping_id', (($tmp = $_smarty_tpl->tpl_vars['snapping_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('location_id', (($tmp = $_smarty_tpl->tpl_vars['location_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['parent_grid']->value['location_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('prefix', (($tmp = $_smarty_tpl->tpl_vars['prefix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_handler', (($tmp = $_smarty_tpl->tpl_vars['show_handler']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_properties', (($tmp = $_smarty_tpl->tpl_vars['show_properties']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_switch', (($tmp = $_smarty_tpl->tpl_vars['show_switch']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_up', (($tmp = $_smarty_tpl->tpl_vars['show_up']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_down', (($tmp = $_smarty_tpl->tpl_vars['show_down']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_delete', (($tmp = $_smarty_tpl->tpl_vars['show_delete']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_popup', (($tmp = $_smarty_tpl->tpl_vars['is_popup']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('block_menu_compact', (($tmp = $_smarty_tpl->tpl_vars['block_menu_compact']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('popup_title', (($tmp = $_smarty_tpl->tpl_vars['popup_title']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('object_type', (($tmp = $_smarty_tpl->tpl_vars['object_type']->value ?? null)===null||$tmp==='' ? "custom_block" ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra_params', (($tmp = $_smarty_tpl->tpl_vars['extra_params']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra_params_query', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_params']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('temp', ((string)$_smarty_tpl->tpl_vars['key']->value)."=".((string)$_smarty_tpl->tpl_vars['value']->value));?>
    <?php $_smarty_tpl->_assignInScope('extra_params_query', ((string)$_smarty_tpl->tpl_vars['extra_params_query']->value)."&".((string)$_smarty_tpl->tpl_vars['temp']->value));
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL")) {?>
    <?php $_smarty_tpl->_assignInScope('block_properties_dispatch', "block_manager.update_custom_block?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&block_id=".((string)$_smarty_tpl->tpl_vars['snapping_id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value).((string)$_smarty_tpl->tpl_vars['extra_params_query']->value));?>
    <?php $_smarty_tpl->_assignInScope('icons', array('handler'=>"icon-ellipsis-vertical",'properties'=>"icon-cog",'activate'=>"icon-eye-open",'deactivate'=>"icon-eye-close",'move_up'=>"icon-arrow-up",'move_down'=>"icon-arrow-down",'delete'=>"icon-trash"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('block_properties_dispatch', "block_manager.manage&selected_location=".((string)$_smarty_tpl->tpl_vars['location_id']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['snapping_id']->value)."&type=snapping");?>
    <?php $_smarty_tpl->_assignInScope('icons', array('handler'=>"ty-icon-handler",'properties'=>"ty-icon-cog",'activate'=>"ty-icon-eye-open",'deactivate'=>"ty-icon-eye-close",'move_up'=>"ty-icon-arrow-up",'move_down'=>"ty-icon-arrow-down",'delete'=>"ty-icon-trashcan"));
}?>

<div class="bm-block-manager__menu-wrapper" data-ca-block-manager-menu-wrapper>
    <div class="bm-block-manager__menu <?php if ($_smarty_tpl->tpl_vars['block_menu_compact']->value) {?>bm-block-manager__menu--compact<?php }?>" data-ca-block-manager-menu>
        <?php if ($_smarty_tpl->tpl_vars['show_handler']->value) {?>
            <div class="bm-block-manager__handler">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['handler'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_properties']->value) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['block_properties_dispatch']->value,"A"), ENT_QUOTES, 'UTF-8');?>
"
                class="bm-block-manager__btn bm-block-manager__properties <?php if ($_smarty_tpl->tpl_vars['is_popup']->value) {?>cm-dialog-opener cm-dialog-destroy-on-close cm-ajax<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['is_popup']->value) {?>
                    id="opener_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['popup_title']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                    target="_blank"
                <?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['properties'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_switch']->value) {?>
            <button type="button"
                    class="bm-block-manager__btn bm-block-manager__switch <?php if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__block--disabled<?php }?>"
                    data-ca-block-manager-action="switch"
                    data-ca-block-manager-switch="<?php if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>false<?php } else { ?>true<?php }?>"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php ob_start();
if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {
echo " bm-block-manager__icon--hidden";
}
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_activate', ((string)$_smarty_tpl->tpl_vars['icons']->value['activate'])." bm-block-manager__icon".$_prefixVariable16);?>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {
echo " bm-block-manager__icon--hidden";
}
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_deactivate', ((string)$_smarty_tpl->tpl_vars['icons']->value['deactivate'])." bm-block-manager__icon".$_prefixVariable17);?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_activate']->value,'data'=>array("data-ca-block-manager-switch-icon"=>"show")),$_smarty_tpl);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_deactivate']->value,'data'=>array("data-ca-block-manager-switch-icon"=>"hide")),$_smarty_tpl);?>

            </button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_up']->value) {?>
            <button type="button" class="bm-block-manager__btn bm-block-manager__up"
                    data-ca-block-manager-action="move"
                    data-ca-block-manager-move="up"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['move_up'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_down']->value) {?>
            <button type="button"
                    class="bm-block-manager__btn bm-block-manager__down"
                    data-ca-block-manager-action="move"
                    data-ca-block-manager-move="down"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['move_down'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
            <button type="button"
                    class="bm-block-manager__btn bm-block-manager__delete"
                    data-ca-block-manager-action="delete"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['delete'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </button>
        <?php }?>
    </div>
    <div class="bm-block-manager__arrow-wrapper">
        <div class="bm-block-manager__arrow"></div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/components/block_menu.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/components/block_menu.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('is_block_enabled', $_smarty_tpl->tpl_vars['block']->value['status'] === "A" || !$_smarty_tpl->tpl_vars['block']->value['status']);
$_smarty_tpl->_assignInScope('snapping_id', (($tmp = $_smarty_tpl->tpl_vars['snapping_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('location_id', (($tmp = $_smarty_tpl->tpl_vars['location_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['parent_grid']->value['location_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('prefix', (($tmp = $_smarty_tpl->tpl_vars['prefix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_handler', (($tmp = $_smarty_tpl->tpl_vars['show_handler']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_properties', (($tmp = $_smarty_tpl->tpl_vars['show_properties']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_switch', (($tmp = $_smarty_tpl->tpl_vars['show_switch']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_up', (($tmp = $_smarty_tpl->tpl_vars['show_up']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_down', (($tmp = $_smarty_tpl->tpl_vars['show_down']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_delete', (($tmp = $_smarty_tpl->tpl_vars['show_delete']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_popup', (($tmp = $_smarty_tpl->tpl_vars['is_popup']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('block_menu_compact', (($tmp = $_smarty_tpl->tpl_vars['block_menu_compact']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('popup_title', (($tmp = $_smarty_tpl->tpl_vars['popup_title']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('object_type', (($tmp = $_smarty_tpl->tpl_vars['object_type']->value ?? null)===null||$tmp==='' ? "custom_block" ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra_params', (($tmp = $_smarty_tpl->tpl_vars['extra_params']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('extra_params_query', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_params']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('temp', ((string)$_smarty_tpl->tpl_vars['key']->value)."=".((string)$_smarty_tpl->tpl_vars['value']->value));?>
    <?php $_smarty_tpl->_assignInScope('extra_params_query', ((string)$_smarty_tpl->tpl_vars['extra_params_query']->value)."&".((string)$_smarty_tpl->tpl_vars['temp']->value));
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL")) {?>
    <?php $_smarty_tpl->_assignInScope('block_properties_dispatch', "block_manager.update_custom_block?object_type=".((string)$_smarty_tpl->tpl_vars['object_type']->value)."&block_id=".((string)$_smarty_tpl->tpl_vars['snapping_id']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value).((string)$_smarty_tpl->tpl_vars['extra_params_query']->value));?>
    <?php $_smarty_tpl->_assignInScope('icons', array('handler'=>"icon-ellipsis-vertical",'properties'=>"icon-cog",'activate'=>"icon-eye-open",'deactivate'=>"icon-eye-close",'move_up'=>"icon-arrow-up",'move_down'=>"icon-arrow-down",'delete'=>"icon-trash"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('block_properties_dispatch', "block_manager.manage&selected_location=".((string)$_smarty_tpl->tpl_vars['location_id']->value)."&object_id=".((string)$_smarty_tpl->tpl_vars['snapping_id']->value)."&type=snapping");?>
    <?php $_smarty_tpl->_assignInScope('icons', array('handler'=>"ty-icon-handler",'properties'=>"ty-icon-cog",'activate'=>"ty-icon-eye-open",'deactivate'=>"ty-icon-eye-close",'move_up'=>"ty-icon-arrow-up",'move_down'=>"ty-icon-arrow-down",'delete'=>"ty-icon-trashcan"));
}?>

<div class="bm-block-manager__menu-wrapper" data-ca-block-manager-menu-wrapper>
    <div class="bm-block-manager__menu <?php if ($_smarty_tpl->tpl_vars['block_menu_compact']->value) {?>bm-block-manager__menu--compact<?php }?>" data-ca-block-manager-menu>
        <?php if ($_smarty_tpl->tpl_vars['show_handler']->value) {?>
            <div class="bm-block-manager__handler">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['handler'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_properties']->value) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['block_properties_dispatch']->value,"A"), ENT_QUOTES, 'UTF-8');?>
"
                class="bm-block-manager__btn bm-block-manager__properties <?php if ($_smarty_tpl->tpl_vars['is_popup']->value) {?>cm-dialog-opener cm-dialog-destroy-on-close cm-ajax<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['is_popup']->value) {?>
                    id="opener_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['popup_title']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                    target="_blank"
                <?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['properties'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_switch']->value) {?>
            <button type="button"
                    class="bm-block-manager__btn bm-block-manager__switch <?php if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>bm-block-manager__block--disabled<?php }?>"
                    data-ca-block-manager-action="switch"
                    data-ca-block-manager-switch="<?php if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {?>false<?php } else { ?>true<?php }?>"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php ob_start();
if (!$_smarty_tpl->tpl_vars['is_block_enabled']->value) {
echo " bm-block-manager__icon--hidden";
}
$_prefixVariable18=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_activate', ((string)$_smarty_tpl->tpl_vars['icons']->value['activate'])." bm-block-manager__icon".$_prefixVariable18);?>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['is_block_enabled']->value) {
echo " bm-block-manager__icon--hidden";
}
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_deactivate', ((string)$_smarty_tpl->tpl_vars['icons']->value['deactivate'])." bm-block-manager__icon".$_prefixVariable19);?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_activate']->value,'data'=>array("data-ca-block-manager-switch-icon"=>"show")),$_smarty_tpl);?>

                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_deactivate']->value,'data'=>array("data-ca-block-manager-switch-icon"=>"hide")),$_smarty_tpl);?>

            </button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_up']->value) {?>
            <button type="button" class="bm-block-manager__btn bm-block-manager__up"
                    data-ca-block-manager-action="move"
                    data-ca-block-manager-move="up"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['move_up'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_down']->value) {?>
            <button type="button"
                    class="bm-block-manager__btn bm-block-manager__down"
                    data-ca-block-manager-action="move"
                    data-ca-block-manager-move="down"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['move_down'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </button>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
            <button type="button"
                    class="bm-block-manager__btn bm-block-manager__delete"
                    data-ca-block-manager-action="delete"
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value === 'menu_item') {?>data-ca-block-manager-dispatch="custom_menu"<?php }?>
            >
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['icons']->value['delete'])." bm-block-manager__icon"),$_smarty_tpl);?>

            </button>
        <?php }?>
    </div>
    <div class="bm-block-manager__arrow-wrapper">
        <div class="bm-block-manager__arrow"></div>
    </div>
</div>
<?php }
}
}
