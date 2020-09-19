<?php
/* Smarty version 3.1.33, created on 2020-07-28 11:23:43
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/autoupgrade/views/templates/hook/dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f20510fa95234_59299155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '291880361a45300bbe3d4a1a7a18bce6d951971f' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/modules/autoupgrade/views/templates/hook/dashboard_zone_one.tpl',
      1 => 1595722274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f20510fa95234_59299155 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="autoupgradePhpWarn" class="panel widget">
  <div class="panel-heading">
    <span class="icon-stack text-danger">
      <span class="icon icon-circle icon-stack-2x"></span>
      <strong class="icon-stack-1x icon-stack-text">1</strong>
    </span>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PHP Version notice','mod'=>'autoupgrade'),$_smarty_tpl ) );?>



    <span class="panel-heading-action">
      <a class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['ignore_link']->value;?>
" title="Ignore">
        <i class="process-icon-close"></i>
      </a>
    </span>
  </div>

  <p class="text-muted text-center">
    <i id="autoupgradePhpWarningMainIcon" class="icon-history icon-flip-horizontal"></i>
  </p>
  <span>
    <p>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The PHP version your shop is running on is insecure.','mod'=>'autoupgrade'),$_smarty_tpl ) );?>
<br>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It reached its end-of-life, which means it won\'t get security updates anymore and projects will stop supporting it.','mod'=>'autoupgrade'),$_smarty_tpl ) );?>
 </span> <p><br>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upgrading will keep your shop secured and performant.','mod'=>'autoupgrade'),$_smarty_tpl ) );?>
 </span> <p><br>
    </p>
    <div align="center">
      <a class="btn btn-primary" style="white-space: unset;" href="<?php echo $_smarty_tpl->tpl_vars['learn_more_link']->value;?>
" target="_blank">
          <i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Learn more about PHP and upgrading','mod'=>'autoupgrade'),$_smarty_tpl ) );?>

      </a>
  </div>
</section><?php }
}
