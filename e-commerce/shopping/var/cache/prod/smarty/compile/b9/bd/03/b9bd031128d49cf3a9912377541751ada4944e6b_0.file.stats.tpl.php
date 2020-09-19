<?php
/* Smarty version 3.1.33, created on 2020-08-22 15:24:06
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/controllers/stats/stats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f417ee609a127_10247372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9bd031128d49cf3a9912377541751ada4944e6b' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/admin9422nacq5/themes/default/template/controllers/stats/stats.tpl',
      1 => 1595718492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f417ee609a127_10247372 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value && $_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl ) );?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}
