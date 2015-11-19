<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 08:46:43
         compiled from "D:\unify\app\views\templates\GM0078\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:79564997f3486e68-02904843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc93a52d52c548936ed636ddad2e9cb71ef96a3' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0078\\_pagenavs_sub3.html',
      1 => 1447636512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79564997f3486e68-02904843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
    'nav_ls' => 0,
    'nav_listsec' => 0,
    '_pagenavs_sub3' => 0,
    'nav_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564997f38dd304_90804070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564997f38dd304_90804070')) {function content_564997f38dd304_90804070($_smarty_tpl) {?>

<!-- 二级栏目列表（展示到三级子栏目） -->
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<div class="aboutName">


	<ul class="list aboutNav">
<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="second">
				<?php  $_smarty_tpl->tpl_vars['nav_ls'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_ls']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_ls']->key => $_smarty_tpl->tpl_vars['nav_ls']->value) {
$_smarty_tpl->tpl_vars['nav_ls']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_ls']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_ls']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_ls']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_ls']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_ls']->value['name'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['nav_ls']->value['childmenu']) {?>
					<dl class="third">
                        <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_ls']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                        <dd class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></dd>
                        <?php } ?>
                    </dl> 
                    <?php }?>      
				</li>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
		<?php } ?> 
        
       
	</ul>
</div>

<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<div class="aboutName">


	<ul class="list aboutNav">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
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
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_ls']->value['name'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
					<dl class="third">
                        <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_ls']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                        <dd class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_ls']->value['name'];?>
</a></dd>
                        <?php } ?>
                    </dl>  
                    <?php }?>     
				</li>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
		<?php } ?>
	</ul>
	</div>

<?php }?>


<?php }} ?>
