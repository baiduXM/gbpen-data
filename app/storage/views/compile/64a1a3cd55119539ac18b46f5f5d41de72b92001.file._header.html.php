<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 07:38:25
         compiled from "D:\unify\app\views\templates\GP0011\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:18107564c2af1ec8683-25815088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a1a3cd55119539ac18b46f5f5d41de72b92001' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0011\\_header.html',
      1 => 1447401406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18107564c2af1ec8683-25815088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'contact' => 0,
    'navs' => 0,
    'litmit' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c2af22b1b58_91224370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c2af22b1b58_91224370')) {function content_564c2af22b1b58_91224370($_smarty_tpl) {?>
<header>
	<section class="headtop">
         	<div class="topshow"> 
        <div class="header">
                <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></a></div>
<div class="homes"><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
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

<div class="public banners">
<div class="focusBox" style="margin:0 auto">
			<ul class="pic">
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
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
			<ul class="hd">
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
			</ul>
	</div>           

            
            </div>                                        	</div>
 </section>
 </header><?php }} ?>
