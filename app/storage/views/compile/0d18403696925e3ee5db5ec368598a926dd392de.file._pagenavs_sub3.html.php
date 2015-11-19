<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 03:16:47
         compiled from "D:\unify\app\views\templates\GP0017\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:3058564c1c8e1dd0b3-18905404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d18403696925e3ee5db5ec368598a926dd392de' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0017\\_pagenavs_sub3.html',
      1 => 1447829782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3058564c1c8e1dd0b3-18905404',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1c8e54c5e7_34721248',
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
<?php if ($_valid && !is_callable('content_564c1c8e54c5e7_34721248')) {function content_564c1c8e54c5e7_34721248($_smarty_tpl) {?><!-- 二级栏目列表（展示到三级子栏目） -->


<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>
	 <div class="title"><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</div>
     <div class="list">
	 	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
		<ul>
			<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
				<ul class="left_list">
					<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
" style="padding:0;"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
						<ul class="left_list">
							<?php  $_smarty_tpl->tpl_vars['nav_listse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listse']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listse']->key => $_smarty_tpl->tpl_vars['nav_listse']->value) {
$_smarty_tpl->tpl_vars['nav_listse']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listse']->key;
?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['nav_listse']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['link'];?>
" style="padding:0;"><?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['name'];?>
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

     </div>

</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav>
	 <div class="title"><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['name'];?>
</div>
     <div class="list">
	 	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
		<ul>
			<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
				<ul class="left_list">
					<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
" style="padding:0;"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
						<ul class="left_list">
							<?php  $_smarty_tpl->tpl_vars['nav_listse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listse']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listse']->key => $_smarty_tpl->tpl_vars['nav_listse']->value) {
$_smarty_tpl->tpl_vars['nav_listse']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listse']->key;
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['link'];?>
" style="padding:0;"><?php echo $_smarty_tpl->tpl_vars['nav_listse']->value['name'];?>
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
     </div>
</nav>
<?php }?><?php }} ?>
