<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 10:04:19
         compiled from "D:\Unify\app\views\templates\GM0006\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2260656406fa3469e08-92402155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd95de57972feb276e92e2aeb2f29f9d32e019ca' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0006\\_header.html',
      1 => 1446624216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2260656406fa3469e08-92402155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406fa352ff35_39989008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406fa352ff35_39989008')) {function content_56406fa352ff35_39989008($_smarty_tpl) {?>	
	<header>
    
   <div class="menu public_bg">
            	<div class="nav">
            	<a class="arrow-left" href="#">&lt;</a> 
   				 <a class="arrow-right" href="#">&gt;</a>
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
				  <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="public_color1">网站首页</a></span></div>
					<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class="public_color1"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
					  <?php } ?>
                  </div>
				</div>
                </div>
    </div>
      </header>  <?php }} ?>
