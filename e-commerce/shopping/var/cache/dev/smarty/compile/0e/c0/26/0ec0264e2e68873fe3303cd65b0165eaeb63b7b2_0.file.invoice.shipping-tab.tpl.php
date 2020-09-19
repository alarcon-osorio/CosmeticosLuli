<?php
/* Smarty version 3.1.33, created on 2020-08-21 13:38:22
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f40149e4dc9f6_38077271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec0264e2e68873fe3303cd65b0165eaeb63b7b2' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/pdf/invoice.shipping-tab.tpl',
      1 => 1595718497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f40149e4dc9f6_38077271 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
