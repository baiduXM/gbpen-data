<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 10:13:35
         compiled from "D:\Unify\app\views\templates\GM0009\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:22421564071cf56ce38-98563812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c213952fa31a476a5e3413d7e3ec1f5436a47da' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0009\\_header.html',
      1 => 1446707206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22421564071cf56ce38-98563812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564071cf708931_03351586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564071cf708931_03351586')) {function content_564071cf708931_03351586($_smarty_tpl) {?><header>
    <div class="baner-ny">
          	<div class="logo logo-ny"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%" heght="100%"></div>
	<div id="slideBox" class="slideBox1">
    <div class="hd">
            <ul></ul>
      </div>
      <span class="next public_color">&gt;</span>
      <span class="prev public_color">&lt;</span>
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
   <div class="menu public_bg">
            	<div class="nav">
            	<a class="arrow-left" href="#">&lt;</a> 
   				 <a class="arrow-right" href="#">&gt;</a>
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="public_color1">首页</a></span></div>
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
      </header><?php }} ?>
