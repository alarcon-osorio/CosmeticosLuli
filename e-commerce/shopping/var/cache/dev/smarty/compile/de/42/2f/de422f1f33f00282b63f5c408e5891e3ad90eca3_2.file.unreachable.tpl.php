<?php
/* Smarty version 3.1.33, created on 2020-08-16 20:17:47
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39dabb198ed3_86049326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de422f1f33f00282b63f5c408e5891e3ad90eca3' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39dabb198ed3_86049326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1582072075f39dabb198178_21313226', 'step');
?>

<?php }
/* {block 'step'} */
class Block_1582072075f39dabb198178_21313226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_1582072075f39dabb198178_21313226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
