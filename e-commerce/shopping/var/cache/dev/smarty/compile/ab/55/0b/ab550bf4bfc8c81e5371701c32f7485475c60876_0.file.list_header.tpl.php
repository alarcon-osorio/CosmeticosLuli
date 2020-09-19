<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:46:04
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/controllers/addresses/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39e15c3fe675_48626446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab550bf4bfc8c81e5371701c32f7485475c60876' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/controllers/addresses/helpers/list/list_header.tpl',
      1 => 1595718488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39e15c3fe675_48626446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5044009365f39e15c33ebb0_74214123', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_5044009365f39e15c33ebb0_74214123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_5044009365f39e15c33ebb0_74214123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
