<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:17:46
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39dabaebc0f0_20686369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '317d0e2170218942c4c0eb8c5527528e2d2d4aaa' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39dabaebc0f0_20686369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19045482205f39dabaeb78c6_30301405', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_19022493795f39dabaebb405_34406233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_19045482205f39dabaeb78c6_30301405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_19045482205f39dabaeb78c6_30301405',
  ),
  'step_content' => 
  array (
    0 => 'Block_19022493795f39dabaebb405_34406233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </h1>

    <div class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19022493795f39dabaebb405_34406233', 'step_content', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
