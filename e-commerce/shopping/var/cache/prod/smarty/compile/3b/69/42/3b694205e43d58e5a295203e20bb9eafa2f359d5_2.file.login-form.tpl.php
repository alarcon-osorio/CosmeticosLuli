<?php
/* Smarty version 3.1.33, created on 2020-08-22 17:38:04
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f419e4c878fc3_92538800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b694205e43d58e5a295203e20bb9eafa2f359d5' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/login-form.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f419e4c878fc3_92538800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5690913755f419e4c8774f0_28106273', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'form_buttons'} */
class Block_5690913755f419e4c8774f0_28106273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_5690913755f419e4c8774f0_28106273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary float-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
}
