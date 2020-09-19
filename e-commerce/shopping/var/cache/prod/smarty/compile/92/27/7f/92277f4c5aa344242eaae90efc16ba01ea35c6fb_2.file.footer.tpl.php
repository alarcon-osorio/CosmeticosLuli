<?php
/* Smarty version 3.1.33, created on 2020-07-28 11:24:02
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/whatsapp/views/templates/front/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f2051226cdcd4_22073176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92277f4c5aa344242eaae90efc16ba01ea35c6fb' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/whatsapp/views/templates/front/footer.tpl',
      1 => 1595813238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2051226cdcd4_22073176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('controllerName', $_GET['controller']);?>
<div class="whatsappDiv <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pst']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<a onclick="window.open('http://wppredirect.tk/go/?p=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatasppno']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['controllerName']->value == 'product' && $_smarty_tpl->tpl_vars['shareThis']->value == 1) {?>&m=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shareMessage']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>&m=<?php }?>')" class="tiklaAc"></a>
</div><?php }
}
