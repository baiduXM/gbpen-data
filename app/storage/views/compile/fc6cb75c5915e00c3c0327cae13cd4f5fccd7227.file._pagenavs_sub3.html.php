<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:29:37
         compiled from "D:\unify\app\views\templates\GP0009\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:14093563fef72115fe9-02621226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc6cb75c5915e00c3c0327cae13cd4f5fccd7227' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0009\\_pagenavs_sub3.html',
      1 => 1447126175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14093563fef72115fe9-02621226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fef7250d8a1_81355219',
  'variables' => 
  array (
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listse' => 0,
    '_pagenavs_sub3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fef7250d8a1_81355219')) {function content_563fef7250d8a1_81355219($_smarty_tpl) {?><!-- 二级栏目列表（展示到三级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>
	<h3 class="tit"><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
</span></h3>

	<ul class="clearfix">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if (count($_smarty_tpl->tpl_vars['nav']->value['childmenu'])==0) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="clearfix" style="display: none;">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
				<?php  $_smarty_tpl->tpl_vars['nav_listse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listse']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listse']->key => $_smarty_tpl->tpl_vars['nav_listse']->value) {
$_smarty_tpl->tpl_vars['nav_listse']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listse']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_listse']->value['current']) {?>current<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['link'];?>
">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['name'];?>
</a>
				</li>
				<?php } ?>
				<?php }?>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav>

	<h3 class="tit"><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['name'];?>
&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['en_name'];?>
</span></h3>
	<ul class="clearfix">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if (count($_smarty_tpl->tpl_vars['nav']->value['childmenu'])==0) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="clearfix" style="display: none;">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
				<?php  $_smarty_tpl->tpl_vars['nav_listse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listse']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listse']->key => $_smarty_tpl->tpl_vars['nav_listse']->value) {
$_smarty_tpl->tpl_vars['nav_listse']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listse']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_listse']->value['current']) {?>current<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['link'];?>
">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['name'];?>
</a>
				</li>
				<?php } ?>
				<?php }?>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
</nav>
<?php }?><?php }} ?>
