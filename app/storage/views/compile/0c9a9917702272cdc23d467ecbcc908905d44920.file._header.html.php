<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 03:06:21
         compiled from "D:\Unify\app\views\templates\GP0015\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:293895642b0ad3cac38-12712311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c9a9917702272cdc23d467ecbcc908905d44920' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0015\\_header.html',
      1 => 1445591912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293895642b0ad3cac38-12712311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'search_action' => 0,
    'navs' => 0,
    'litmit' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642b0ad962312_63973409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642b0ad962312_63973409')) {function content_5642b0ad962312_63973409($_smarty_tpl) {?>
<header>
	<section class="headtop">
<div class="header">
            		<div class="hd_con">
                    		<h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img  src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"   /></a></h1>
                            <div class="lg_right" style="padding-top:15px;">
                                <span class="sreach">
    <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
    	<input type="submit" class="submit_01" />
    	<input type="text" name="s" value="" class="text_01" />
    </form>

                                
                                </span>
                            </div>
                    </div>
            </div>
        		
<div class="menu main_nav-percent">       
<ul id="nav" class="nav clearfix">
        <?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(8, null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['litmit']->value) {?><?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
			<li class="nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1)-1;?>
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
			<li  class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1);?>
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
			<?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['litmit']->value) {?><?php break 1?><?php }?>
          <?php } ?>
                                          
		</ul>
             
       </div>
             
             <div class="banner">
             		<div id="slideBox" class="slideBox">
			<div class="hd">
				<ul>
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                 <li><?php echo $_smarty_tpl->tpl_vars['slidepic']->index+1;?>
</li>
                   <?php } ?>
                 </ul>
			</div>
			<div class="bd">
				<ul>
                  <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
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
