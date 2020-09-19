<?php
/* Smarty version 3.1.33, created on 2020-07-25 18:47:17
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/new-theme/template/components/layout/error_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1cc485a25745_38088491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5be3e9d98bb2224cdf48d8fe333c52edf26fbf2' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/new-theme/template/components/layout/error_messages.tpl',
      1 => 1595718483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1cc485a25745_38088491 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['errors']->value) && current($_smarty_tpl->tpl_vars['errors']->value) != '' && (!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value) || $_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value == false)) {?>
  <div class="bootstrap">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
        <?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['errors']->value))),$_smarty_tpl ) );?>

        <br/>
        <ol>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
      <?php }?>
    </div>
  </div>
<?php }
}
}
