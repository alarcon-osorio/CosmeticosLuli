<?php
/* Smarty version 3.1.33, created on 2020-09-07 14:51:46
  from '/home/u644237725/domains/cosmeticosluli.com/public_html/shopping/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f568f52ab5087_24310765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a9b1055c4937bc12371d5b9bef5ef6f4ea2bc35' => 
    array (
      0 => '/home/u644237725/domains/cosmeticosluli.com/public_html/shopping/themes/classic/templates/index.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f568f52ab5087_24310765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20404124145f568f52ab3560_07253007', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_209723245f568f52ab3a05_26257192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18216639245f568f52ab42f4_71808413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4426939005f568f52ab3fe4_70485772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18216639245f568f52ab42f4_71808413', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20404124145f568f52ab3560_07253007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20404124145f568f52ab3560_07253007',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_209723245f568f52ab3a05_26257192',
  ),
  'page_content' => 
  array (
    0 => 'Block_4426939005f568f52ab3fe4_70485772',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18216639245f568f52ab42f4_71808413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209723245f568f52ab3a05_26257192', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4426939005f568f52ab3fe4_70485772', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
