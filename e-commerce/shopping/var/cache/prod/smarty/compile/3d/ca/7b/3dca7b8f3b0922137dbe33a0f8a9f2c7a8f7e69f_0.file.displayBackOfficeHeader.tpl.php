<?php
/* Smarty version 3.1.33, created on 2020-07-28 11:23:42
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f20510eeb4a56_84103187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dca7b8f3b0922137dbe33a0f8a9f2c7a8f7e69f' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl',
      1 => 1595718509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f20510eeb4a56_84103187 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconBgColor']->value,'javascript' ));?>
',
      textColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconTxtColor']->value,'javascript' ));?>
',
      notificationGetUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconUrl']->value,'javascript' ));?>
',
      CHECKBOX_ORDER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconOrder']->value);?>
,
      CHECKBOX_CUSTOMER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconCustomer']->value);?>
,
      CHECKBOX_MESSAGE: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconMsg']->value);?>
,
      timer: 120000, // Refresh every 2 minutes
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
