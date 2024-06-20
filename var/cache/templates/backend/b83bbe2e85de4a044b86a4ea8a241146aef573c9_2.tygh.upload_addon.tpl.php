<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:58
  from '/var/www/html/design/backend/templates/views/addons/components/upload_addon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733bca7f28c1_21836906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b83bbe2e85de4a044b86a4ea8a241146aef573c9' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/upload_addon.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_66733bca7f28c1_21836906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('install_addon_text','marketplace_find_more','upload_install'));
$_smarty_tpl->_assignInScope('c_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);?>
<div id="addon_upload_container" class="install-addon">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="addon_upload_container" />
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');?>
" />
        <div class="install-addon-wrapper">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-puzzle-piece install-addon-banner",'data'=>array("width"=>"151px","height"=>"141px")),$_smarty_tpl);?>


            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_addon_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"addon_pack[0]"), 0, false);
?>

            <div class="marketplace">
                <p class="marketplace-link"> <?php echo $_smarty_tpl->__("marketplace_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url']));?>
 </p>
            </div>

        </div>

        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[addons.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload_install")), 0, false);
?>

        </div>
    </form>
<!--addon_upload_container--></div>
<?php }
}
