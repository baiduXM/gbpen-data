<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:54:56
         compiled from "D:\unify\app\views\templates\GM0001\_page_normal.html" */ ?>
<?php /*%%SmartyHeaderCode:1165563feee0104495-00016309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ed9cf1b7b78abab800db5494d0424c9bfa005c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0001\\_page_normal.html',
      1 => 1446795163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1165563feee0104495-00016309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563feee02c3d06_26170165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563feee02c3d06_26170165')) {function content_563feee02c3d06_26170165($_smarty_tpl) {?><!-- page[分页] -->
<div class="page_normal">
	 
    <ul class="clearfix">
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
<?php } else { ?>javascript:;<?php }?>">首页</a></li>
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
<?php } else { ?>javascript:;<?php }?>">上一页</a></li>
		<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
			<li class="fl cur"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php } else { ?>
			<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php }?>
		<?php } ?>
		
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
<?php } else { ?>javascript:;<?php }?>">下一页</a></li>
		<li class="fl"><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
<?php } else { ?>javascript:;<?php }?>">末页</a></li>
		
	</ul>
</div><?php }} ?>
