<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:42:38
         compiled from "D:\Unify\app\views\templates\GP0019\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:31466564d6f5e1fbbf8-27966289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dfff9fa03ec6cbb8be5d32497735762b60bd321' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0019\\_links.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31466564d6f5e1fbbf8-27966289',
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
  'unifunc' => 'content_564d6f5e2a53e3_27367428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6f5e2a53e3_27367428')) {function content_564d6f5e2a53e3_27367428($_smarty_tpl) {?><select name="pageselect" onchange="self.location.href=options[selectedIndex].value" >
 
 <option>友情链接</option>	

	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_links']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
	 <option value="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</option>	
	<?php } ?>

 </select>
<?php }} ?>
