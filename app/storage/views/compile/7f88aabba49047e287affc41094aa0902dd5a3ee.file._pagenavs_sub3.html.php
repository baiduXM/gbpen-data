<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:51:54
         compiled from "D:\unify\app\views\templates\GP0012\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:31958564c200ad8d475-92614927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f88aabba49047e287affc41094aa0902dd5a3ee' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0012\\_pagenavs_sub3.html',
      1 => 1447829497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31958564c200ad8d475-92614927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    '_pagenavs_sub3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c200b36e3e6_44990862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c200b36e3e6_44990862')) {function content_564c200b36e3e6_44990862($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>
	<div class="alefttitle"><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
 / <span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</span></div>	<!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
    <div class="category">
	<ul class="listbg clearfix">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
			<a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
<?php }?>" class="h_top <?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
			<ul class="second clearfix">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>                
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
<?php }?>" class="h_topa <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                    <ul class="third clearfix">
                        <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
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
	<div class="alefttitle"><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['en_name'];?>
/ <span><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['name'];?>
</span><</div>	
     <div class="category">
	<ul class="listbg clearfix">
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
			<ul class="second clearfix">
				<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                    <ul class="third clearfix">
                        <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
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

<?php }?>
<?php }} ?>
