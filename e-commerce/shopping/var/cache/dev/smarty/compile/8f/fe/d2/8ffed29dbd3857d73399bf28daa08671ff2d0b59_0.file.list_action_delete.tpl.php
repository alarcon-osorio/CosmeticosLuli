<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:31:51
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/helpers/list/list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39de0724fd69_64835952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ffed29dbd3857d73399bf28daa08671ff2d0b59' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1595718493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39de0724fd69_64835952 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="#"
  title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
"
  class="delete"
  onclick="<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>confirm_link('', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['confirm']->value,'html','UTF-8' ));?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
', '#')<?php } else { ?>event.stopPropagation();event.preventDefault()<?php }?>">
	<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
