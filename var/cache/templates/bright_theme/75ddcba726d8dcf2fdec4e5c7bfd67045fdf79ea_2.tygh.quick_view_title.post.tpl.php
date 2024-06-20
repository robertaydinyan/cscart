<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:42:08
  from '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/products/quick_view_title.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667342a0ea1480_57007787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ddcba726d8dcf2fdec4e5c7bfd67045fdf79ea' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/discussion/hooks/products/quick_view_title.post.tpl',
      1 => 1718826500,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 2,
  ),
),false)) {
function content_667342a0ea1480_57007787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('reviews','write_review','reviews','write_review'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <div class="ty-discussion__rating-wrapper clearfix" id="average_rating_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
        <a  href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=discussion#discussion"), ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"quick_view_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT")), 0, false);
?>
    <!--average_rating_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/products/quick_view_title.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/products/quick_view_title.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['discussion_type'] && $_smarty_tpl->tpl_vars['product']->value['discussion_type'] != 'D' && $_smarty_tpl->tpl_vars['addons']->value['product_reviews']['status'] !== smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    <div class="ty-discussion__rating-wrapper clearfix" id="average_rating_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>


        <?php if ($_smarty_tpl->tpl_vars['product']->value['discussion']['posts']) {?>
        <a  href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=discussion#discussion"), ENT_QUOTES, 'UTF-8');?>
" class="ty-discussion__review-a"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items'], ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("reviews",array($_smarty_tpl->tpl_vars['product']->value['discussion']['search']['total_items']));?>
</a>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->__("write_review"),'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'obj_prefix'=>"quick_view_",'style'=>"text",'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT")), 0, true);
?>
    <!--average_rating_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
