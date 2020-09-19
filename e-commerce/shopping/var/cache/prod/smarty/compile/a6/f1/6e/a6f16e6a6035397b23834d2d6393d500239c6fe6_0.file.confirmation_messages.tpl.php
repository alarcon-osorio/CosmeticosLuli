<?php
/* Smarty version 3.1.33, created on 2020-09-07 14:51:47
  from '/home/u644237725/domains/cosmeticosluli.com/public_html/shopping/admin9422nacq5/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f568f53d31771_07875861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6f16e6a6035397b23834d2d6393d500239c6fe6' => 
    array (
      0 => '/home/u644237725/domains/cosmeticosluli.com/public_html/shopping/admin9422nacq5/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1595718483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f568f53d31771_07875861 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
