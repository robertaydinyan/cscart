<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:03:08
  from '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_mainbox_params.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673397c95c976_75601139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543766997a23c1253155b815f54e309ace0b6660' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_variations/hooks/products/update_mainbox_params.post.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_6673397c95c976_75601139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
if ($_smarty_tpl->tpl_vars['product_data']->value['variation_features']) {?>
    
        <?php $_smarty_tpl->_assignInScope('heading_length', 40);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "variation_features_title", null, null);
$_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product_data']->value['variation_features'],'features_tags'=>false), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('product_name_length', $_smarty_tpl->tpl_vars['heading_length']->value-mb_strlen($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_title'), 'UTF-8'));?>
    <?php $_smarty_tpl->_assignInScope('product_name', smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_data']->value['product'] ?: ''),$_smarty_tpl->tpl_vars['product_name_length']->value,"...",true));?>
    <?php $_smarty_tpl->_assignInScope('title_end', ((string)$_smarty_tpl->tpl_vars['product_name']->value)." — ".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_title')) ,false ,2);?>

    <?php $_smarty_tpl->_assignInScope('title_alt', ((string)(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_data']->value['product'] ?: '')))." — ".((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'variation_features_title')) ,false ,2);
}?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_variations/tygh/backend/func.js"),$_smarty_tpl);?>

<?php }
}
