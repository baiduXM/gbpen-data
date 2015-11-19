<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 02:34:20
         compiled from "D:\Unify\app\views\templates\GP0020\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:31777564d352cee0738-10277539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '160959d707404486c5d45feea3ccb2f716449b82' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0020\\_header.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31777564d352cee0738-10277539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'limit' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'contact' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d352d4b1583_91443206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d352d4b1583_91443206')) {function content_564d352d4b1583_91443206($_smarty_tpl) {?>
<header>
	<section class="headtop">
		<div class='header'>

			<div class='container'>
		        <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></a></div>
				<span class="home"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">返回首页</a> </span>
			</div>
		</div>
        		
		<div class="nav-box"> 
			<div class="menu">      
				<ul id="nav" class="nav clearfix">
					<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(5, null, 0);?>
					<li class="nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
						<h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></h3>
					</li>
					
		            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
					<li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current on<?php }?> nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
							<h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
						<ul class="sub clearfix">
		                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
							<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
							<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
							<?php } ?>
		                    <?php }?>
						</ul>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
		          <?php } ?>
		                                          
				</ul>
				<div class='tel'>
					<span>全国免费热线:</span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>

				</div>        
	        </div>     
        </div>
          
        <div class="banner">
            <div id="slideBox" class="slideBox">
				<div class="hd">
					<ul><!-- <li>1</li><li>2</li><li>3</li></ -->
						<?php  $_smarty_tpl->tpl_vars['countimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['countimg']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['countimg']->key => $_smarty_tpl->tpl_vars['countimg']->value) {
$_smarty_tpl->tpl_vars['countimg']->_loop = true;
 $_smarty_tpl->tpl_vars['countimg']->index++;
?>
						  <li><?php echo $_smarty_tpl->tpl_vars['countimg']->index+1;?>
</li>
						<?php } ?>
					<ul>
				</div>
				<div class="bd">
					<ul>
	                  <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
	                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
	                    
	                    <?php } ?>                     
						
					</ul>
				</div>	


			</div>


        </div> 
 	</section>
</header>
 
 




<?php }} ?>
