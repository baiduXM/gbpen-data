<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:42:37
         compiled from "D:\Unify\app\views\templates\GP0019\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:31628564d6f5dafa0c8-70013562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abf052a8e3cc4ecb6c8e6e3ab91e63a43eeb582' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0019\\_header.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31628564d6f5dafa0c8-70013562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'naver' => 0,
    'search_action' => 0,
    'navs' => 0,
    'litmit' => 0,
    'site_url' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d6f5e1420a5_30263030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6f5e1420a5_30263030')) {function content_564d6f5e1420a5_30263030($_smarty_tpl) {?>			
<div class="header">
	<div class="public01">
	<span class="logo fl h_o"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="160"/></span>
	<div class='h_right fr'>
		<ul class='navs h_o'>
			<?php  $_smarty_tpl->tpl_vars['naver'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['naver']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['global']->value['second_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['naver']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['naver']->key => $_smarty_tpl->tpl_vars['naver']->value) {
$_smarty_tpl->tpl_vars['naver']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['naver']->key;
 $_smarty_tpl->tpl_vars['naver']->index++;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['naver']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['naver']->value['name'];?>
</a>|
				<?php if ($_smarty_tpl->tpl_vars['naver']->index+1==3) {?><?php break 1?><?php }?>
			<?php } ?>
		</ul>
		 <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
			<span class="search"><input type="text" class="text" name="s" /><input name="" type="submit" class="submit" />
			</span>
		 </form>
	    <ul id="nav" class="nav" >
	       <?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(8, null, 0);?>
	        <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['litmit']->value) {?><?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
	            <li class="nLi line" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1)-1;?>
%" ><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
	        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>	
	            <li class="nLi <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> line" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1)-1;?>
%"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
						<ul class="sub clearfix">
							<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
							<?php } ?>
						</ul>
					<?php }?>
				</li>            
	       		<?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['litmit']->value) {?><?php break 1?><?php }?>
			<?php } ?>			            
	 	</ul>
    </div>
    </div>
</div>      
<div class="banners h_o">
		<div id="slideBox" class="slideBox h_o">
			<div class="bd">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
"/></a></li>
					<?php } ?>   
                    
				</ul>
			</div>
		</div>
</div>   
<?php }} ?>
