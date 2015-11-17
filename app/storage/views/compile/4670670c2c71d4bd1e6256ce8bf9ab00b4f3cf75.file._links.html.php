<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:40:12
         compiled from "D:\Unify\app\views\templates\GP0005\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:1652556405bec479593-96289037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4670670c2c71d4bd1e6256ce8bf9ab00b4f3cf75' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_links.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652556405bec479593-96289037',
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
  'unifunc' => 'content_56405bec522f78_19453189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405bec522f78_19453189')) {function content_56405bec522f78_19453189($_smarty_tpl) {?>
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
