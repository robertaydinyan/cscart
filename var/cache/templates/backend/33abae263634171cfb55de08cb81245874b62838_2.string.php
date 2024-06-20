<?php
/* Smarty version 4.3.0, created on 2024-06-19 13:02:55
  from '33abae263634171cfb55de08cb81245874b62838' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6673396f184bd0_49472268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6673396f184bd0_49472268 (Smarty_Internal_Template $_smarty_tpl) {
?><p><img src="design/backend/media/images/custom_blocks/custom_blocks_4.svg" width="150" height="150" style="width: 150px; height: 150px; float: right; margin: 0px 0px 10px 10px;"></p><h4>4. Set up payments</h4><p>This section is hidden, because it depends on how your marketplace works.</p><p>&#8226; Keep it hidden if you accept payments on behalf of all vendors.</p><p>&#8226; Edit the texts and show this section if you use multiparty payments (Stripe Connect or PayPal Commerce Platform) or direct customer-to-vendor payments. Add a link to the page in the vendor panel where your sellers can connect their PayPal / Stripe accounts or create their own payment methods.</p><p><a href="<?php echo htmlspecialchars((string) fn_url('payments.manage'), ENT_QUOTES, 'UTF-8');?>
" class="btn">Go to payment methods</a></p><?php }
}
