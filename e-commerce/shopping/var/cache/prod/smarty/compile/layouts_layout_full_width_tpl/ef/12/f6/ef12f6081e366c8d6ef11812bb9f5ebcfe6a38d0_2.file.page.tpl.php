<?php
/* Smarty version 3.1.33, created on 2020-09-07 14:51:46
  from '/home/u644237725/domains/cosmeticosluli.com/public_html/shopping/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f568f52abb303_64395093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef12f6081e366c8d6ef11812bb9f5ebcfe6a38d0' => 
    array (
      0 => '/home/u644237725/domains/cosmeticosluli.com/public_html/shopping/themes/classic/templates/page.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f568f52abb303_64395093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12649644885f568f52ab82d9_45514164', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10149980605f568f52ab8b13_03789890 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2037372585f568f52ab8690_39926799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10149980605f568f52ab8b13_03789890', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8577591605f568f52ab9c87_35157039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1956598825f568f52aba103_79191188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15818169355f568f52ab9942_44023661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8577591605f568f52ab9c87_35157039', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1956598825f568f52aba103_79191188', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11805252275f568f52abaad8_47400070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12611953215f568f52aba7d0_82173203 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11805252275f568f52abaad8_47400070', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12649644885f568f52ab82d9_45514164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12649644885f568f52ab82d9_45514164',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2037372585f568f52ab8690_39926799',
  ),
  'page_title' => 
  array (
    0 => 'Block_10149980605f568f52ab8b13_03789890',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15818169355f568f52ab9942_44023661',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8577591605f568f52ab9c87_35157039',
  ),
  'page_content' => 
  array (
    0 => 'Block_1956598825f568f52aba103_79191188',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12611953215f568f52aba7d0_82173203',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11805252275f568f52abaad8_47400070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2037372585f568f52ab8690_39926799', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15818169355f568f52ab9942_44023661', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12611953215f568f52aba7d0_82173203', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
