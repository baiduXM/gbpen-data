<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:11:32
         compiled from "D:\Unify\app\views\templates\GP0001\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:1749156405a24f2feb5-21088531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '190d245e195daf823bdf422a0f5ebfaf18ff0ad1' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0001\\_header.html',
      1 => 1447061030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1749156405a24f2feb5-21088531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405a252b8290_19002287',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'navs' => 0,
    'limit' => 0,
    'nav' => 0,
    '_header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405a252b8290_19002287')) {function content_56405a252b8290_19002287($_smarty_tpl) {?><div class="header">
	<h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/></a></h1>
	<div class="nav">
		<ul>
		<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(6, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['limit']->value) {?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
			<li style="width:<?php echo 100/$_smarty_tpl->tpl_vars['limit']->value-1;?>
%"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
		<?php } ?>
		</ul>
		<span><a href="javascript:void(0);" onclick="shoucang(document.title, window.location)" id="addfavorite">加入收藏</a></span>
		<span class="ang_l"></span>
		<span class="ang_r"></span>
		<span class="ang_wl"></span>
		<span class="ang_wr"></span>

	</div>
	<div class="clear"></div>
	<div class="img-wrap edge"><img src="<?php echo $_smarty_tpl->tpl_vars['_header']->value['lager_pic']['image'];?>
" width="1200" alt="<?php echo $_smarty_tpl->tpl_vars['_header']->value['lager_pic']['title'];?>
"/><div class="shadow"></div></div>
</div><?php }} ?>
