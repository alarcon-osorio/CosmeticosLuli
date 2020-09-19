<?php
/* Smarty version 3.1.33, created on 2020-08-16 19:52:15
  from '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f39d4bfe6a7e7_34815230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2fc3ca42bae059147c1a7a7d5786dd2b24c56f' => 
    array (
      0 => '/home/u644237725/domains/lulitojeans.com/public_html/shopping/themes/classic/templates/page.tpl',
      1 => 1595718514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39d4bfe6a7e7_34815230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12242951955f39d4bfdf2549_87639580', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13522804165f39d4bfdf2e90_97152447 extends Smarty_Internal_Block
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
class Block_7586538195f39d4bfdf29b7_59935267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13522804165f39d4bfdf2e90_97152447', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7415015385f39d4bfe687e5_53554133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14708496535f39d4bfe68d77_03587531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13459211285f39d4bfe68372_90404243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7415015385f39d4bfe687e5_53554133', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14708496535f39d4bfe68d77_03587531', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1608410295f39d4bfe69968_99078561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8924871825f39d4bfe694b5_46215138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1608410295f39d4bfe69968_99078561', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12242951955f39d4bfdf2549_87639580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12242951955f39d4bfdf2549_87639580',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7586538195f39d4bfdf29b7_59935267',
  ),
  'page_title' => 
  array (
    0 => 'Block_13522804165f39d4bfdf2e90_97152447',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13459211285f39d4bfe68372_90404243',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7415015385f39d4bfe687e5_53554133',
  ),
  'page_content' => 
  array (
    0 => 'Block_14708496535f39d4bfe68d77_03587531',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8924871825f39d4bfe694b5_46215138',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1608410295f39d4bfe69968_99078561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7586538195f39d4bfdf29b7_59935267', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13459211285f39d4bfe68372_90404243', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8924871825f39d4bfe694b5_46215138', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
