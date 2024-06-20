<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:29:32
  from '/var/www/html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733facc88c21_58047074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e68668fdc0711b91025669e4aea8bce2e60b60e' => 
    array (
      0 => '/var/www/html/design/backend/templates/views/addons/components/detailed_page/tabs/addon_reviews.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/rating/enjoying_addon_notification.tpl' => 1,
    'tygh:common/subheader.tpl' => 1,
    'tygh:views/addons/components/rating/addon_rating_overview.tpl' => 1,
    'tygh:views/addons/components/addons/addon_reviews.tpl' => 1,
  ),
),false)) {
function content_66733facc88c21_58047074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('addon_reviews'));
$_smarty_tpl->_assignInScope('total_reviews', smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value) ,false ,2);?>

<div class="hidden cm-hide-save-button" id="content_reviews">
    <div class="form-horizontal form-edit">

                <?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon'] && $_smarty_tpl->tpl_vars['addon']->value['identified'] && !$_smarty_tpl->tpl_vars['personal_review']->value) {?>
            <div class="alert alert-block alert-info">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title_full'=>true,'id'=>"addons_write_review_notification"), 0, false);
?>
            </div>
        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("addon_reviews"),'target'=>"#addon_reviews"), 0, false);
?>
        <div id="addon_reviews" class="collapse in collapse-visible">

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/rating/addon_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ratings_stats'=>$_smarty_tpl->tpl_vars['addon_reviews_rating_stats']->value,'total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_reviews']->value,'average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviews'=>$_smarty_tpl->tpl_vars['reviews']->value,'total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_reviews']->value), 0, false);
?>

        </div>

    </div>
<!--content_reviews--></div>
<?php }
}
