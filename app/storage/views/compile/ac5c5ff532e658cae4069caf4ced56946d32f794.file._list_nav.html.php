<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:54:56
         compiled from "D:\unify\app\views\templates\GM0001\_list_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:6636563c53795888f7-66063154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac5c5ff532e658cae4069caf4ced56946d32f794' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0001\\_list_nav.html',
      1 => 1446795163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6636563c53795888f7-66063154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c5379603c21_27431971',
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c5379603c21_27431971')) {function content_563c5379603c21_27431971($_smarty_tpl) {?><nav class="pag_nav">
<ul class="clearfix">
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>cur<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
  </li>
  <?php } ?>
</ul>
</nav><?php }} ?>
