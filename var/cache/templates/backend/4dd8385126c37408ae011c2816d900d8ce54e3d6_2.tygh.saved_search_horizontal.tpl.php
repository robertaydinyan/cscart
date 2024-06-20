<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:12:58
  from '/var/www/html/design/backend/templates/common/saved_search_horizontal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66733bca827369_65323102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd8385126c37408ae011c2816d900d8ce54e3d6' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/saved_search_horizontal.tpl',
      1 => 1717753007,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66733bca827369_65323102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),4=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('all','saved_search.set_as_non_default_confirm','saved_search.set_as_non_default','saved_search.set_as_default_confirm','saved_search.set_as_default','delete','custom_search','saved_search.more'));
if ($_smarty_tpl->tpl_vars['saved_search']->value && $_smarty_tpl->tpl_vars['saved_search']->value['dispatch'] && $_smarty_tpl->tpl_vars['view_type']->value) {?>
    
    <?php echo smarty_function_script(array('src'=>"js/tygh/saved_search_horizontal.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_assignInScope('saved_search_count_min_threshold', (($tmp = $_smarty_tpl->tpl_vars['config']->value['saved_search']['count_min_threshold'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('saved_search_count_max_threshold', (($tmp = $_smarty_tpl->tpl_vars['config']->value['saved_search']['count_max_threshold'] ?? null)===null||$tmp==='' ? 10 ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('new_search', (($tmp = $_smarty_tpl->tpl_vars['saved_search']->value['allow_new_search'] ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('views', fn_get_views($_smarty_tpl->tpl_vars['view_type']->value));?>
    <?php $_smarty_tpl->_assignInScope('return_current_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"view_id","new_view"));?>
    <?php $_smarty_tpl->_assignInScope('redirect_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <?php $_smarty_tpl->_assignInScope('saved_search_count_threshold', $_smarty_tpl->tpl_vars['is_compact_view']->value ? $_smarty_tpl->tpl_vars['saved_search_count_min_threshold']->value : $_smarty_tpl->tpl_vars['saved_search_count_max_threshold']->value);?>
    <?php $_smarty_tpl->_assignInScope('saved_search_count_threshold', $_smarty_tpl->tpl_vars['saved_search_count_threshold']->value-1);?>     <?php $_smarty_tpl->_assignInScope('views_active_before_threshold', array());?>
    <?php $_smarty_tpl->_assignInScope('temp_views', $_smarty_tpl->tpl_vars['views']->value);?>

        <?php $_smarty_tpl->_assignInScope('enable_fill', (($tmp = $_smarty_tpl->tpl_vars['enable_fill']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

        <?php $_smarty_tpl->_assignInScope('views_count', $_smarty_tpl->tpl_vars['new_search']->value ? smarty_modifier_count($_smarty_tpl->tpl_vars['views']->value)+2 : smarty_modifier_count($_smarty_tpl->tpl_vars['views']->value)+1);?>

    <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "move_active_before_threshold", null, null);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['temp_views']->value, 'view');
$_smarty_tpl->tpl_vars['view']->iteration = 0;
$_smarty_tpl->tpl_vars['view']->index = -1;
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
$_smarty_tpl->tpl_vars['view']->iteration++;
$_smarty_tpl->tpl_vars['view']->index++;
$__foreach_view_4_saved = $_smarty_tpl->tpl_vars['view'];
?>
                <?php if ($_smarty_tpl->tpl_vars['view']->iteration <= $_smarty_tpl->tpl_vars['saved_search_count_threshold']->value || intval($_smarty_tpl->tpl_vars['view']->value['view_id']) !== intval($_smarty_tpl->tpl_vars['search']->value['view_id'])) {?>
                    <?php continue 1;?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('active_view', array_splice($_smarty_tpl->tpl_vars['temp_views']->value,($_smarty_tpl->tpl_vars['view']->index),1));?>
                <?php echo htmlspecialchars((string) array_splice($_smarty_tpl->tpl_vars['temp_views']->value,($_smarty_tpl->tpl_vars['saved_search_count_threshold']->value-1),0,$_smarty_tpl->tpl_vars['active_view']->value), ENT_QUOTES, 'UTF-8');?>

                <?php break 1;?>
            <?php
$_smarty_tpl->tpl_vars['view'] = $__foreach_view_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['temp_views']->value, 'view');
$_smarty_tpl->tpl_vars['view']->iteration = 0;
$_smarty_tpl->tpl_vars['view']->index = -1;
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
$_smarty_tpl->tpl_vars['view']->iteration++;
$_smarty_tpl->tpl_vars['view']->index++;
$__foreach_view_5_saved = $_smarty_tpl->tpl_vars['view'];
?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['views_active_before_threshold']) ? $_smarty_tpl->tpl_vars['views_active_before_threshold']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[intval($_smarty_tpl->tpl_vars['view']->value['view_id'])] = $_smarty_tpl->tpl_vars['view']->value;
$_smarty_tpl->_assignInScope('views_active_before_threshold', $_tmp_array);?>
            <?php
$_smarty_tpl->tpl_vars['view'] = $__foreach_view_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php }?>

    <div class="pills <?php if ($_smarty_tpl->tpl_vars['enable_fill']->value) {?>pills--enable-fill<?php }?> pills--count-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['views_count']->value, ENT_QUOTES, 'UTF-8');?>
">
        <ul class="nav nav-pills saved-search-horizontal">
            <li class="saved-search__item saved-search__item--horizontal
                <?php if (!intval($_smarty_tpl->tpl_vars['search']->value['view_id']) && !$_smarty_tpl->tpl_vars['search']->value['temp_view']) {?>active<?php }?>">
                <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['saved_search']->value['dispatch']).".reset_view?".((string)$_smarty_tpl->tpl_vars['view_suffix']->value)), ENT_QUOTES, 'UTF-8');?>
" class="saved-search__item-name saved-search__item-name--horizontal"><?php echo $_smarty_tpl->__("all");?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views']->value, 'view', false, NULL, 'views', array (
));
$_smarty_tpl->tpl_vars['view']->iteration = 0;
$_smarty_tpl->tpl_vars['view']->index = -1;
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
$_smarty_tpl->tpl_vars['view']->iteration++;
$_smarty_tpl->tpl_vars['view']->index++;
$__foreach_view_6_saved = $_smarty_tpl->tpl_vars['view'];
?>
                    <?php $_smarty_tpl->_assignInScope('saved_search_item_class', '');?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views_active_before_threshold']->value, 'views_active_before_threshold_view');
$_smarty_tpl->tpl_vars['views_active_before_threshold_view']->iteration = 0;
$_smarty_tpl->tpl_vars['views_active_before_threshold_view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['views_active_before_threshold_view']->value) {
$_smarty_tpl->tpl_vars['views_active_before_threshold_view']->do_else = false;
$_smarty_tpl->tpl_vars['views_active_before_threshold_view']->iteration++;
$__foreach_views_active_before_threshold_view_7_saved = $_smarty_tpl->tpl_vars['views_active_before_threshold_view'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['views_active_before_threshold_view']->iteration <= $_smarty_tpl->tpl_vars['saved_search_count_threshold']->value) {?>
                            <?php continue 1;?>
                        <?php }?>
                        <?php if (intval($_smarty_tpl->tpl_vars['view']->value['view_id']) === intval($_smarty_tpl->tpl_vars['views_active_before_threshold_view']->value['view_id'])) {?>
                            <?php $_smarty_tpl->_assignInScope('saved_search_item_class', "saved-search__item--desktop-hidden");?>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['views_active_before_threshold_view'] = $__foreach_views_active_before_threshold_view_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        <?php if (intval($_smarty_tpl->tpl_vars['view']->value['view_id']) === intval($_smarty_tpl->tpl_vars['search']->value['view_id']) && ($_smarty_tpl->tpl_vars['last_view_current_object_schema']->value['allow_default_view'] || $_smarty_tpl->tpl_vars['new_search']->value)) {?>
                    <li class="dropdown active saved-search__item saved-search__item--horizontal <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['saved_search_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a class="cm-view-name dropdown-toggle saved-search__item-name saved-search__item-name--horizontal"
                            href="#"
                            data-toggle="dropdown"
                            data-ca-saved-search-horizontal-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if ($_smarty_tpl->tpl_vars['last_view_current_object_schema']->value['allow_default_view']) {?>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['view']->value['is_default'] === smarty_modifier_enum("YesNo::YES")) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['saved_search']->value['dispatch']).".unset_default_view?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                            class="cm-confirm"
                                            <?php echo smarty_modifier_render_tag_attrs((array("data-ca-confirm-text"=>$_smarty_tpl->__("saved_search.set_as_non_default_confirm",array("[name]"=>$_smarty_tpl->tpl_vars['view']->value['name'])))));?>

                                        >
                                            <span class="flex-inline top">
                                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-pushpin"),$_smarty_tpl);?>

                                            </span>
                                            <?php echo $_smarty_tpl->__("saved_search.set_as_non_default");?>

                                        </a>
                                    <?php } else { ?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['saved_search']->value['dispatch']).".set_default_view?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                            class="cm-confirm"
                                            <?php echo smarty_modifier_render_tag_attrs((array("data-ca-confirm-text"=>$_smarty_tpl->__("saved_search.set_as_default_confirm",array("[name]"=>$_smarty_tpl->tpl_vars['view']->value['name'])))));?>

                                        >
                                            <span class="flex-inline top">
                                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-pushpin"),$_smarty_tpl);?>

                                            </span>
                                            <?php echo $_smarty_tpl->__("saved_search.set_as_default");?>

                                        </a>
                                    <?php }?>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['new_search']->value) {?>
                                <li>
                                    <a href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['saved_search']->value['dispatch']).".delete_view?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['redirect_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
"
                                        class="cm-confirm text-error"
                                    >
                                        <span class="flex-inline top">
                                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>

                                        </span>
                                        <?php echo $_smarty_tpl->__("delete");?>

                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    </li>
                                        <?php } elseif (intval($_smarty_tpl->tpl_vars['view']->value['view_id']) === intval($_smarty_tpl->tpl_vars['search']->value['view_id'])) {?>
                    <li class="active saved-search__item saved-search__item--horizontal <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['saved_search_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a class="cm-view-name saved-search__item-name"
                            href="#"
                            data-ca-saved-search-horizontal-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                    <?php } else { ?>
                                        <li class="saved-search__item saved-search__item--horizontal <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['saved_search_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <a class="cm-view-name saved-search__item-name saved-search__item-name--horizontal
                        <?php if ($_smarty_tpl->tpl_vars['last_view_current_object_schema']->value['allow_default_view']) {?>
                            saved-search__item-name--default-view
                        <?php }?>
                        "
                            href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['saved_search']->value['dispatch'])."?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id']).((string)$_smarty_tpl->tpl_vars['view_additional_parameters']->value)."&".((string)$_smarty_tpl->tpl_vars['view_suffix']->value)), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-saved-search-horizontal-view-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['name'], ENT_QUOTES, 'UTF-8');?>

                        </a>
                    </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['view'] = $__foreach_view_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['search']->value['temp_view']) {?>
                <li class="saved-search__item saved-search__item--horizontal active <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['saved_search_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <a href="#"><?php echo $_smarty_tpl->__("custom_search");?>
</a>
                </li>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['views']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['views_active_before_threshold']->value) > $_smarty_tpl->tpl_vars['saved_search_count_threshold']->value) {?>
                <li class="btn-group saved-search__item-more mobile-hidden">
                    <a class="saved-search__item-name--horizontal saved-search__item-name--more dropdown-toggle" data-toggle="dropdown">
                        <?php echo $_smarty_tpl->__("saved_search.more");?>

                        <span class="caret"></span>
                    </a>
                    <ul id="tools_list_saved_search_horizontal" class="dropdown-menu cm-smart-position">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['views_active_before_threshold']->value, 'view');
$_smarty_tpl->tpl_vars['view']->iteration = 0;
$_smarty_tpl->tpl_vars['view']->index = -1;
$_smarty_tpl->tpl_vars['view']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['view']->value) {
$_smarty_tpl->tpl_vars['view']->do_else = false;
$_smarty_tpl->tpl_vars['view']->iteration++;
$_smarty_tpl->tpl_vars['view']->index++;
$__foreach_view_8_saved = $_smarty_tpl->tpl_vars['view'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['view']->iteration <= $_smarty_tpl->tpl_vars['saved_search_count_threshold']->value) {?>
                                <?php continue 1;?>
                            <?php }?>
                            <li class="saved-search__dropdown-item <?php if (intval($_smarty_tpl->tpl_vars['view']->value['view_id']) === intval($_smarty_tpl->tpl_vars['search']->value['view_id'])) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['view']->value['wrapper_class']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['view']->value['wrapper_class'], ENT_QUOTES, 'UTF-8');
}?>">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>(($tmp = $_smarty_tpl->tpl_vars['view']->value['type'] ?? null)===null||$tmp==='' ? "list" ?? null : $tmp),'href'=>((string)$_smarty_tpl->tpl_vars['saved_search']->value['dispatch'])."?view_id=".((string)$_smarty_tpl->tpl_vars['view']->value['view_id']).((string)$_smarty_tpl->tpl_vars['view_additional_parameters']->value)."&".((string)$_smarty_tpl->tpl_vars['view_suffix']->value),'text'=>$_smarty_tpl->tpl_vars['view']->value['name'],'title'=>$_smarty_tpl->tpl_vars['view']->value['description'],'id'=>$_smarty_tpl->tpl_vars['view']->value['id'],'method'=>$_smarty_tpl->tpl_vars['view']->value['method'],'target'=>$_smarty_tpl->tpl_vars['view']->value['target'],'process'=>$_smarty_tpl->tpl_vars['view']->value['process'],'class'=>$_smarty_tpl->tpl_vars['view']->value['meta'] ? "saved-search__dropdown-item-name ".((string)$_smarty_tpl->tpl_vars['view']->value['meta']) : "saved-search__dropdown-item-name",'form'=>$_smarty_tpl->tpl_vars['view']->value['form'],'dispatch'=>$_smarty_tpl->tpl_vars['view']->value['dispatch'],'data'=>array("data-ca-saved-search-horizontal-view-id"=>$_smarty_tpl->tpl_vars['view']->value['view_id'],"data-ca-saved-search-horizontal-view-name"=>$_smarty_tpl->tpl_vars['view']->value['name']),'onclick'=>$_smarty_tpl->tpl_vars['view']->value['onclick'],'raw'=>$_smarty_tpl->tpl_vars['view']->value['raw'],'icon'=>$_smarty_tpl->tpl_vars['view']->value['icon']), true);?>

                            </li>
                        <?php
$_smarty_tpl->tpl_vars['view'] = $__foreach_view_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['new_search']->value) {?>
                <li class="saved-search__item saved-search__item--horizontal saved-search__item--new">
                    <button type="button"
                        class="saved-search__item-name saved-search__item-name--horizontal saved-search__item-name--new"
                        data-ca-saved-search-horizontal="searchSave"
                    >
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>

                    </button>
                </li>
            <?php }?>
        </ul>
    </div>
<?php }
}
}
