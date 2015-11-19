<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 08:33:11
         compiled from "D:\unify\app\views\templates\GP0006\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:22693563c65c70a0356-62642590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20957cd9776ed072e4d5cbe543a9dc5d63c5aef1' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_links.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22693563c65c70a0356-62642590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c65c71105b5_46279164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c65c71105b5_46279164')) {function content_563c65c71105b5_46279164($_smarty_tpl) {?>
	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_links']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a> |
	<?php } ?>
<?php }} ?>
