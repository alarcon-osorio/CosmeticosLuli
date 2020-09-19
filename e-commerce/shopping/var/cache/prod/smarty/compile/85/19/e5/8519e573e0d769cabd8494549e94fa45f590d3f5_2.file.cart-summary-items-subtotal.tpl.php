<?php
/* Smarty version 3.1.33, created on 2020-07-28 11:37:13
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f2054391332b2_79419775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8519e573e0d769cabd8494549e94fa45f590d3f5' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2054391332b2_79419775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18501445085f205439131c58_83173955', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_18501445085f205439131c58_83173955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_18501445085f205439131c58_83173955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
