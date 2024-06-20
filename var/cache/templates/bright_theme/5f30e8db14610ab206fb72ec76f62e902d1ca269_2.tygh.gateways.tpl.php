<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:54:00
  from '/var/www/html/design/themes/responsive/templates/addons/amazon_payment_services/common/gateways.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_667345687fdd48_89052758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f30e8db14610ab206fb72ec76f62e902d1ca269' => 
    array (
      0 => '/var/www/html/design/themes/responsive/templates/addons/amazon_payment_services/common/gateways.tpl',
      1 => 1718830390,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/amazon_payment_services/common/gateways/".((string)$_smarty_tpl->tpl_vars[\'gw_type\']->value).".tpl' => 2,
  ),
),false)) {
function content_667345687fdd48_89052758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/var/www/html/app/functions/smarty_plugins/modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'/var/www/html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('aps_no_payment_option','aps_no_payment_option'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!empty($_smarty_tpl->tpl_vars['gateways']->value)) {?>
	<div class="aps_gateways_list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway', false, 'gw_type');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gw_type']->value => $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
			<div class="gateway_item gateway_type-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['gw_type']->value == 'apple' && smarty_modifier_count($_smarty_tpl->tpl_vars['gateways']->value) > 1) {?> hidden<?php }?>">
				<label class="gt-label" for="elm_aps_gateway_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
">
		            <input type="radio" name="payment_data[aps][gateway]" id="elm_aps_gateway_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['gateway']->value['first']) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
		            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gateway']->value['title'], ENT_QUOTES, 'UTF-8');?>


		            <?php if (!empty($_smarty_tpl->tpl_vars['gateway']->value['object']->logos)) {?>
		            <span class="aps_logos">
		            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateway']->value['object']->logos, '_logo');
$_smarty_tpl->tpl_vars['_logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_logo']->value) {
$_smarty_tpl->tpl_vars['_logo']->do_else = false;
?>
		            		<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_logo']->value, ENT_QUOTES, 'UTF-8');?>
" height="19" />
		            	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		            </span>
		            <?php }?>
		        </label>
		        <?php if ($_smarty_tpl->tpl_vars['gateway']->value['object']->template) {?>
		        <div class="tpl_gateway"<?php if (!$_smarty_tpl->tpl_vars['gateway']->value['first']) {?> style="display:none;"<?php }?> id="tpl_aps_gateway_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
">
		        	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/amazon_payment_services/common/gateways/".((string)$_smarty_tpl->tpl_vars['gw_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gateway'=>$_smarty_tpl->tpl_vars['gateway']->value['object'],'type'=>$_smarty_tpl->tpl_vars['gw_type']->value,'is_active'=>$_smarty_tpl->tpl_vars['gateway']->value['first']), 0, true);
?>
		        </div>
		        <?php }?>	
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['gateway']->value['object']->integration_type == 'standard_checkout') {?>
				<input id="iframe_standard_checkout_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
" type="hidden" value="Y">
			<?php }?>
			
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

	<div class="hidden" title="" class="aps_payment_iframe_container" id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="iframe_container"></div></div>
	
	<a id="opener_aps_payment_iframe_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size hidden" data-ca-target-id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" title="" rel="nofollow"></a>

<?php } else { ?>
	<p class="ty-error-text"><?php echo $_smarty_tpl->__("aps_no_payment_option");?>
 !</p>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/amazon_payment_services/common/gateways.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/amazon_payment_services/common/gateways.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!empty($_smarty_tpl->tpl_vars['gateways']->value)) {?>
	<div class="aps_gateways_list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway', false, 'gw_type');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gw_type']->value => $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
			<div class="gateway_item gateway_type-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['gw_type']->value == 'apple' && smarty_modifier_count($_smarty_tpl->tpl_vars['gateways']->value) > 1) {?> hidden<?php }?>">
				<label class="gt-label" for="elm_aps_gateway_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
">
		            <input type="radio" name="payment_data[aps][gateway]" id="elm_aps_gateway_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['gateway']->value['first']) {?> checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
		            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gateway']->value['title'], ENT_QUOTES, 'UTF-8');?>


		            <?php if (!empty($_smarty_tpl->tpl_vars['gateway']->value['object']->logos)) {?>
		            <span class="aps_logos">
		            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateway']->value['object']->logos, '_logo');
$_smarty_tpl->tpl_vars['_logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_logo']->value) {
$_smarty_tpl->tpl_vars['_logo']->do_else = false;
?>
		            		<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/design/themes/responsive/templates/addons/amazon_payment_services/images/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_logo']->value, ENT_QUOTES, 'UTF-8');?>
" height="19" />
		            	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		            </span>
		            <?php }?>
		        </label>
		        <?php if ($_smarty_tpl->tpl_vars['gateway']->value['object']->template) {?>
		        <div class="tpl_gateway"<?php if (!$_smarty_tpl->tpl_vars['gateway']->value['first']) {?> style="display:none;"<?php }?> id="tpl_aps_gateway_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
">
		        	<?php $_smarty_tpl->_subTemplateRender("tygh:addons/amazon_payment_services/common/gateways/".((string)$_smarty_tpl->tpl_vars['gw_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gateway'=>$_smarty_tpl->tpl_vars['gateway']->value['object'],'type'=>$_smarty_tpl->tpl_vars['gw_type']->value,'is_active'=>$_smarty_tpl->tpl_vars['gateway']->value['first']), 0, true);
?>
		        </div>
		        <?php }?>	
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['gateway']->value['object']->integration_type == 'standard_checkout') {?>
				<input id="iframe_standard_checkout_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gw_type']->value, ENT_QUOTES, 'UTF-8');?>
" type="hidden" value="Y">
			<?php }?>
			
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

	<div class="hidden" title="" class="aps_payment_iframe_container" id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
"><div class="iframe_container"></div></div>
	
	<a id="opener_aps_payment_iframe_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size hidden" data-ca-target-id="aps_payment_iframe_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['payment']->value['payment_id'], ENT_QUOTES, 'UTF-8');?>
" title="" rel="nofollow"></a>

<?php } else { ?>
	<p class="ty-error-text"><?php echo $_smarty_tpl->__("aps_no_payment_option");?>
 !</p>
<?php }
}
}
}
