<?php
/* Smarty version 3.1.33, created on 2020-08-23 16:22:22
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/controllers/orders/_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f42de0ed34319_22401079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd390cbe8d0408481d436db7caa61104ef83f4d71' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1595718492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f42de0ed34319_22401079 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE') && $_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateInvoicePDF','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id)),'html','UTF-8' ));?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateDeliverySlipPDF','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id)),'html','UTF-8' ));?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }
}
