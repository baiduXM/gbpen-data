<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:07:48
         compiled from "D:\Unify\app\views\templates\GP0019\_links.html" */ ?>
<?php /*%%SmartyHeaderCode:15704564980c49ca6c6-85939641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae9f68302e218719269597693f086f2cb9b4bd4' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0019\\_links.html',
      1 => 1445592011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15704564980c49ca6c6-85939641',
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
  'unifunc' => 'content_564980c4a7df45_37077189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564980c4a7df45_37077189')) {function content_564980c4a7df45_37077189($_smarty_tpl) {?><select name="pageselect" onchange="self.location.href=options[selectedIndex].value" >
 
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
