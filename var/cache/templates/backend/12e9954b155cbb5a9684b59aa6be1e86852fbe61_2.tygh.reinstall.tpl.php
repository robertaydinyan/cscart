<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:52:35
  from '/var/www/html/design/backend/templates/views/addons/components/reinstall.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66734513d504a5_52643550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e9954b155cbb5a9684b59aa6be1e86852fbe61' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/reinstall.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66734513d504a5_52643550 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('addon_reinstall.intro','addon_reinstall.safe_way','addon_reinstall.dangerous_way','addon_reinstall.dangerous_way.confirm','addon_reinstall.dangerous_way.action','addon_reinstall.safe_way.action'));
?>
<div id="addon_upload_container">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
          method="post"
          name="addon_upload_form"
          class="form-horizontal cm-ajax"
          enctype="multipart/form-data"
    >
        <input type="hidden" name="result_ids" value="addon_upload_container"/>
        <input type="hidden" name="addon_extract_path" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_extract_path']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="addon_name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_name']->value, ENT_QUOTES, 'UTF-8');?>
"/>
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['return_url']->value), ENT_QUOTES, 'UTF-8');?>
"/>

        <p><?php echo $_smarty_tpl->__("addon_reinstall.intro");?>
</p>
        <p><?php echo $_smarty_tpl->__("addon_reinstall.safe_way");?>
</p>
        <p><?php echo $_smarty_tpl->__("addon_reinstall.dangerous_way");?>
</p>
        <p>
            <label class="checkbox muted">
                <input type="checkbox"
                       class="cm-combination"
                       id="sw_continue_without_addon_removal"
                />
                <?php echo $_smarty_tpl->__("addon_reinstall.dangerous_way.confirm");?>

            </label>
        </p>
        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"continue_without_addon_removal",'but_text'=>$_smarty_tpl->__("addon_reinstall.dangerous_way.action"),'but_role'=>"submit",'but_meta'=>"hidden",'but_name'=>"dispatch[addons.recheck]"), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"remove_addon_and_continue",'but_text'=>$_smarty_tpl->__("addon_reinstall.safe_way.action"),'but_role'=>"button_main",'but_name'=>"dispatch[addons.recheck..uninstall]"), 0, true);
?>
        </div>
    </form>
    <!--addon_upload_container--></div>
<?php }
}
