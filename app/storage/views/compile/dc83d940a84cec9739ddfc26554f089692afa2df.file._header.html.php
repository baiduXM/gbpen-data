<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 03:28:48
         compiled from "D:\Unify\app\views\templates\GM0020\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2947156494d700d66d1-82559788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc83d940a84cec9739ddfc26554f089692afa2df' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0020\\_header.html',
      1 => 1446624240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2947156494d700d66d1-82559788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56494d701acc47_87030431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56494d701acc47_87030431')) {function content_56494d701acc47_87030431($_smarty_tpl) {?>
	
	<header>
    	<div class="header">
        	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="menu2" id="quickbar-showcats"><a href="#"><span></span></a></div>
        </div> 
<div class="menu">
            	<div class="nav">
            	<a class="arrow-left" href="#">&lt;</a> 
   				 <a class="arrow-right" href="#">&gt;</a>
				
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper"> 
				  <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></span></div>
				   <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
                      <?php } ?>     
                  </div>
				</div>
                </div>
    </div>          
       
    </header><?php }} ?>
