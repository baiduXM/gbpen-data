<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:04:47
         compiled from "D:\Unify\app\views\templates\GP0016\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:19256442bff36a023-40188876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a156c3c9238280249ffa4048a1eb6b3fd46f9f26' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0016\\_links.html',
      1 => 1445593836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19256442bff36a023-40188876',
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
  'unifunc' => 'content_56442bff413470_51847067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442bff413470_51847067')) {function content_56442bff413470_51847067($_smarty_tpl) {?>
	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_links']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a> |
	<?php } ?>
<?php }} ?>
