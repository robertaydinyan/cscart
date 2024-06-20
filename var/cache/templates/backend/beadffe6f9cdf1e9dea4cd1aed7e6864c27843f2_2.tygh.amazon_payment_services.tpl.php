<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:53:48
  from '/var/www/html/design/backend/templates/addons/amazon_payment_services/views/payments/components/cc_processors/amazon_payment_services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673455cd20560_73679016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beadffe6f9cdf1e9dea4cd1aed7e6864c27843f2' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/amazon_payment_services/views/payments/components/cc_processors/amazon_payment_services.tpl',
      1 => 1718830390,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/fileuploader.tpl' => 1,
  ),
),false)) {
function content_6673455cd20560_73679016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('sections', fn_amazon_payment_services_get_configuration_fields());?>
<style type="text/css">
    .select2-selection.select2-selection--multiple{ height: 25px; }
    .select2-container .select2-search--inline{ width:100% !important; }
</style>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'fields', false, 'title');
$_smarty_tpl->tpl_vars['fields']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->do_else = false;
?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'target'=>"#aps_".((string)(md5($_smarty_tpl->tpl_vars['title']->value)))), 0, true);
?>
    <div id="<?php echo htmlspecialchars((string) "aps_".((string)(md5($_smarty_tpl->tpl_vars['title']->value))), ENT_QUOTES, 'UTF-8');?>
" class="collapse in">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'field', false, 'field_name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
        <div class="control-group">

            <label class="control-label cm-trim" for="aps_field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
:</label>
            <div class="controls">
                <?php if (empty($_smarty_tpl->tpl_vars['field']->value['default'])) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['default'] = '';
$_smarty_tpl->_assignInScope('field', $_tmp_array);
}?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['default'] === true) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['default'] = 'Y';
$_smarty_tpl->_assignInScope('field', $_tmp_array);
}?>

                <?php $_smarty_tpl->_assignInScope('value', (($tmp = $_smarty_tpl->tpl_vars['processor_params']->value[$_smarty_tpl->tpl_vars['field_name']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value['default'] ?? null : $tmp));?>
                <?php $_smarty_tpl->_assignInScope('type', strtolower((($tmp = $_smarty_tpl->tpl_vars['field']->value['type'] ?? null)===null||$tmp==='' ? 'text' ?? null : $tmp)));?>

                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'dropdown') {?>

                    <select name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]<?php if ($_smarty_tpl->tpl_vars['field']->value['multiple']) {?>[]" class="cm-object-picker ffcontrol" style="max-width:400px"  multiple="multiple<?php }?>" id="aps_field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['field']->value['values'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'val', false, 'vk');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vk']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['vk']->value == $_smarty_tpl->tpl_vars['value']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'checkboxes') {?>
                    <input type="hidden" name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
                    <?php if (empty($_smarty_tpl->tpl_vars['value']->value)) {
$_smarty_tpl->_assignInScope('value', array());
}?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['field']->value['values'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'val', false, 'vk');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vk']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    <label class="checkbox inline" for="elm_chb_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="checkbox" name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_chb_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (is_array($_smarty_tpl->tpl_vars['value']->value) && (isset($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['vk']->value])) && $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['vk']->value] == "Y") {?> checked="checked"<?php }?> value="Y"/>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>

                    </label>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'checkbox') {?>
                    <input type="hidden" name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
                    <label class="checkbox inline" for="elm_chb_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="checkbox" name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]" id="elm_chb_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value == "Y") {?> checked="checked"<?php }?> value="Y"/>
                    </label>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'file') {?>
                    <input type="hidden" name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" />
                    <?php if (!empty($_smarty_tpl->tpl_vars['value']->value)) {?><b><?php echo htmlspecialchars((string) pathinfo($_smarty_tpl->tpl_vars['value']->value,(defined('PATHINFO_BASENAME') ? constant('PATHINFO_BASENAME') : null)), ENT_QUOTES, 'UTF-8');?>
</b><br><?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"payment_gw_certi_files[".((string)$_smarty_tpl->tpl_vars['field_name']->value)."]",'is_image'=>false), 0, true);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'textarea') {?>
                    <textarea name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]" id="aps_field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
" col="55" rows="3" style="width:99%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
                
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'html') {?>
                    <div style="padding-top: 5px;"><?php echo (($tmp = $_smarty_tpl->tpl_vars['field']->value['html'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</div>
                <?php } else { ?>
                    <input type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_data[processor_params][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
]" id="aps_field_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
"  value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['type']->value == 'number') {?> onchange="if(this.value < 0){ this.value = 0; } if(this.value > 99999){ this.value = 99999; }"<?php }?>/>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['hint'])) {?><p class="muted description"<?php if ($_smarty_tpl->tpl_vars['type']->value == 'checkbox') {?> style="display: inline-block;padding: 6px 0 0 0; vertical-align:top;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['hint'];?>
</p><?php }?>
            </div>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
