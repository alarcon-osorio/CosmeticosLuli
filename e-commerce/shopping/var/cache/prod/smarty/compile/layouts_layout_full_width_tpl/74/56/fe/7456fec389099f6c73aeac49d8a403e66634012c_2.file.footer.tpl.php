<?php
/* Smarty version 3.1.33, created on 2020-08-22 17:38:05
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f419e4dd04a86_65181702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7456fec389099f6c73aeac49d8a403e66634012c' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f419e4dd04a86_65181702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9397766685f419e4dc6b2c1_79646447', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_9397766685f419e4dc6b2c1_79646447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9397766685f419e4dc6b2c1_79646447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
