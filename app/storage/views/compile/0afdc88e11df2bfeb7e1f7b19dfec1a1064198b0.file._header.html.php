<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:51:14
         compiled from "D:\unify\app\views\templates\GP0003\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3879564007a1a00226-17155354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0afdc88e11df2bfeb7e1f7b19dfec1a1064198b0' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0003\\_header.html',
      1 => 1447060949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3879564007a1a00226-17155354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564007a1c73254_05978758',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'navs' => 0,
    'limit' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'search_action' => 0,
    '_header' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564007a1c73254_05978758')) {function content_564007a1c73254_05978758($_smarty_tpl) {?><div class="header">
	<h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/></a></h1>
	<div class="nav">		
		<div></div>
		<ul class="clearfix">
		<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(7, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
		<?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['limit']->value) {?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>cur<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
				<?php }?>
			</li>
			<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
		<?php } ?>
		</ul>
	</div>
	<div class="search">
		<form id="form" class="fm" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" name="fm">
			<span class="s_ipt_wr">
				<input type="text" id="kw" name="s" class="s_ipt" placeholder=""/>
			</span>
			<span class="s_btn_wr">
				<input type="submit" class="s_btn" id="submit" value="">
			</span>
		</form>
	</div>
</div>
<div class="slide">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_header']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['slidepic']->value['title']);?>
"></li>
		<?php } ?> 
	</ul>
</div><?php }} ?>
