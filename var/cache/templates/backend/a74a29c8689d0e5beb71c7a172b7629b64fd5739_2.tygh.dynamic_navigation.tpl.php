<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:15
  from '/var/www/html/design/backend/templates/common/dynamic_navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733b9f5ad692_87502533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74a29c8689d0e5beb71c7a172b7629b64fd5739' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/dynamic_navigation.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733b9f5ad692_87502533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
if ($_smarty_tpl->tpl_vars['navigation']->value && $_smarty_tpl->tpl_vars['navigation']->value['dynamic'] && $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections']) {?>
    <div class="sidebar-row">
        <ul class="nav nav-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'], 'm', false, 's_id', 'first_level', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s_id']->value => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['total'];
?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:dynamic_menu_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:dynamic_menu_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['m']->value['type'] == "divider") {?>
                        <li class="divider"></li>
                    <?php } else {
ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? "GET" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable19 = ob_get_clean();
if (fn_check_view_permissions($_smarty_tpl->tpl_vars['m']->value['href'],$_prefixVariable19)) {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['m']->value['js'] == true) {?>cm-js<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last'] : null)) {?> last-item<?php }
if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section'] == $_smarty_tpl->tpl_vars['s_id']->value) {?> active<?php }?>"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                    <?php }}?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:dynamic_menu_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<hr><?php }
}
}
