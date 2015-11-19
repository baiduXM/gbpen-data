<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:43:37
         compiled from "D:\unify\app\views\templates\GP0008\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:22409563fec39de3f18-62221993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77a647e016cafb63726017a274592cbf76d4955' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0008\\_pagenavs_sub3.html',
      1 => 1447029715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22409563fec39de3f18-62221993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_next_list' => 0,
    '_pagenavs_sub3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fec3a2ce1d8_36159911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fec3a2ce1d8_36159911')) {function content_563fec3a2ce1d8_36159911($_smarty_tpl) {?><!-- 二级栏目列表（展示到三级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav class="sideBar">
 
	 	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
		<ul class="first">
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
				<ul class="second">
					<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
						<ul class="three">
							<?php  $_smarty_tpl->tpl_vars['nav_next_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_next_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_next_list']->key => $_smarty_tpl->tpl_vars['nav_next_list']->value) {
$_smarty_tpl->tpl_vars['nav_next_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_next_list']->key;
?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['nav_next_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_next_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_next_list']->value['name'];?>
</a></li>
							<?php } ?>
						</ul>
						<?php }?>


					</li>
					<?php } ?>
				</ul>
				<?php }?>
			</li>
			<?php } ?>
		</ul>
</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav class="sideBar">

	 	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
		<ul class="first">
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
				<ul class="second">
					<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
						<ul class="three">
							<?php  $_smarty_tpl->tpl_vars['nav_next_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_next_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_next_list']->key => $_smarty_tpl->tpl_vars['nav_next_list']->value) {
$_smarty_tpl->tpl_vars['nav_next_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_next_list']->key;
?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['nav_next_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_next_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_next_list']->value['name'];?>
</a>
							</li>
							<?php } ?>
						</ul>
						<?php }?>
					</li>
					<?php } ?>
				</ul>
				<?php }?>
			</li>
			<?php } ?>
		</ul>
</nav>
<?php }?><?php }} ?>
