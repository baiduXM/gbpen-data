<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:09:58
         compiled from "D:\unify\app\views\templates\GM0037\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:18107564062e60e3908-73001431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3037dbc912705dbe96de67e6296bae3477c1e17' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0037\\_header.html',
      1 => 1446794157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18107564062e60e3908-73001431',
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
  'unifunc' => 'content_564062e6158631_93073524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564062e6158631_93073524')) {function content_564062e6158631_93073524($_smarty_tpl) {?>   <div class="menu public-bg1">
            	<div class="nav">
            	<a class="arrow-left" href="#">&lt;</a> 
   				 <a class="arrow-right" href="#">&gt;</a>
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="public-color2">网站首页</a></span></div>
					  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class="public-color2"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
					  <?php } ?>
                  
                  </div>
				</div>
                </div></div>  <?php }} ?>
