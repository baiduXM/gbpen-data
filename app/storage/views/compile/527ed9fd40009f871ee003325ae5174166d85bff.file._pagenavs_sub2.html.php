<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 09:29:54
         compiled from "D:\unify\app\views\templates\GP0016\_pagenavs_sub2.html" */ ?>
<?php /*%%SmartyHeaderCode:19644564c14d50bae07-85387509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527ed9fd40009f871ee003325ae5174166d85bff' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_pagenavs_sub2.html',
      1 => 1447838987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19644564c14d50bae07-85387509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c14d525b464_32542842',
  'variables' => 
  array (
    'pagenavs' => 0,
    '_pagenavs_sub2' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c14d525b464_32542842')) {function content_564c14d525b464_32542842($_smarty_tpl) {?><!-- 二级栏目列表（仅展示到二级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>
	<h3 class="tit"><p><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub2']->value['pagenavs']['name'];?>
&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub2']->value['pagenavs']['en_name'];?>
</span></p></h3>
      <div class="listbg">
	<ul class="">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class="choose"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
		</li>
		<?php } ?>
	</ul>
    </div>
</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav>
	<h3 class="tit"><p><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub2']->value['pagenavs']['name'];?>
&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub2']->value['pagenavs']['en_name'];?>
</span></p></h3>
	<div class="listbg">
	<ul class="clearfix">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub2']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
		</li>
		<?php } ?>
	</ul>
	</div>
</nav>
<?php }?><?php }} ?>
