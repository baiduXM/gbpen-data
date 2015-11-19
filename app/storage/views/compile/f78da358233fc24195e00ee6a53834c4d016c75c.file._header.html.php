<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:10:21
         compiled from "D:\unify\app\views\templates\GM0048\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:28129564062fda680c3-38812704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f78da358233fc24195e00ee6a53834c4d016c75c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0048\\_header.html',
      1 => 1446794319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28129564062fda680c3-38812704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564062fdb44a64_51449040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564062fdb44a64_51449040')) {function content_564062fdb44a64_51449040($_smarty_tpl) {?><header class="public-bg1">
      	<div class="logo1"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
        <div class="menu public-bg2">
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
                </div></div>
            <div class="baner">
	<div id="slideBox" class="slideBox1">
    <div class="hd">
            <ul></ul>
      </div>
      <span class="next">&gt;</span>
      <span class="prev">&lt;</span>
	<div class="bd">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
			<li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" /></a></li>
			<?php } ?>
		</ul>
	</div>
			</div>
			
   </div>    
    </header><?php }} ?>
