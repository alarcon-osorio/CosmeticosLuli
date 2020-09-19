<?php
/* Smarty version 3.1.33, created on 2020-08-20 18:41:15
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/customer/_partials/my-account-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f3f0a1bde9919_41049464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '829a7c9d65e7a80b75036eab7e51864382ca3e34' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/customer/_partials/my-account-links.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f0a1bde9919_41049464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_934009305f3f0a1bde7c03_06494491', 'my_account_links');
?>

<?php }
/* {block 'my_account_links'} */
class Block_934009305f3f0a1bde7c03_06494491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'my_account_links' => 
  array (
    0 => 'Block_934009305f3f0a1bde7c03_06494491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
  </a>
<?php
}
}
/* {/block 'my_account_links'} */
}
