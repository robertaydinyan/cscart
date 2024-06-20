<?php
/* Smarty version 4.3.0, created on 2024-06-19 12:48:29
  from '/var/www/html/design/backend/templates/components/notifications_center/opener.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673360d4d8b20_51635910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a60e627dfb2ec6847ae9f00982e7c4b3f85701' => 
    array (
      0 => '/var/www/html/design/backend/templates/components/notifications_center/opener.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673360d4d8b20_51635910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('notifications_center.notifications','notifications_center.notifications','notifications_center.notifications','loading','loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications','notifications_center.mark_all_as_read'));
?>
<div class="top-bar__btn-wrapper btn-group dropdown-top-menu-item notifications-center__opener-wrapper cm-dropdown-skip-processing">
    <button class="dropdown-toggle dropdown-top-menu-item-link top-bar__btn notifications-center__opener-btn"
        data-toggle="dropdown"
        type="button"
        title="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
"
    >
        <span class="top-bar__btn-inner notifications-center__opener-btn-inner">
            <span>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"bell"),$_smarty_tpl);?>

                <span data-ca-notifications-center-counter></span>
            </span>
        </span>
    </button>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->__("notifications_center.notifications");?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->__("loading");?>
</div>
            </div>
        </div>
    </ul>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function (_, $) {
    _.tr({
        loading: '<?php echo strtr((string)$_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        showMore: '<?php echo strtr((string)$_smarty_tpl->__("show_more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        showLess: '<?php echo strtr((string)$_smarty_tpl->__("show_less"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        "notifications_center.noData": '<?php echo strtr((string)$_smarty_tpl->__("notifications_center.no_notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        "notifications_center.notifications": '<?php echo strtr((string)$_smarty_tpl->__("notifications_center.notifications"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        "notifications_center.markAllAsRead": '<?php echo strtr((string)$_smarty_tpl->__("notifications_center.mark_all_as_read"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });

    $.ceEvent('one', 'ce.commoninit', function (context) {
        $(context).find('.notifications-center__opener-wrapper .notifications-center__opener-btn').on('click', function () {
            if (Tygh.ceNotificationsCenterInited) {
                $.ceEvent('trigger', 'ce.notifications_center.enabled');
            }
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
