<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 03:15:38
         compiled from "D:\unify\app\views\templates\GM0077\_page_normal.html" */ ?>
<?php /*%%SmartyHeaderCode:326985649981f588259-23254960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b77fba8afcff3d5fb07ce55ac7ec6a25e47003f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0077\\_page_normal.html',
      1 => 1447728847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326985649981f588259-23254960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649981f75c225_48726584',
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649981f75c225_48726584')) {function content_5649981f75c225_48726584($_smarty_tpl) {?><!-- page[分页] -->
<div class="page_normal">
	 
    <ul class="clearfix">
		<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
<?php } else { ?>javascript:;<?php }?>">首页</a></li>
		<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
<?php } else { ?>javascript:;<?php }?>">上一页</a></li>
		<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
			<li class="cur"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php } else { ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
		<?php }?>
		<?php } ?>
		
		<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
<?php } else { ?>javascript:;<?php }?>">下一页</a></li>
		<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
<?php } else { ?>javascript:;<?php }?>">末页</a></li>
		
	</ul>
</div><?php }} ?>
