<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 01:44:54
         compiled from "D:\unify\app\views\templates\GP0013\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:218905649a0b5e15934-01238982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f4b054fc92ad5785b662bf5536d1f3f7755564' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0013\\_footer.html',
      1 => 1447724397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218905649a0b5e15934-01238982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649a0b6023af6_58669139',
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649a0b6023af6_58669139')) {function content_5649a0b6023af6_58669139($_smarty_tpl) {?><div id="footer">
<div class="wrapper">
<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" >首页</a> | <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> | <?php } ?>
<br />
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>




<!--#*
<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> |<?php } ?>

<a href="index.html" target="_blank">首页</a> | <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> | <?php } ?>

<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

*#-->

<?php }} ?>
