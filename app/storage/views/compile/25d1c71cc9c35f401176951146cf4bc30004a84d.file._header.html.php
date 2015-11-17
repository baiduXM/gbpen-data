<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 01:19:02
         compiled from "D:\Unify\app\views\templates\GM0017\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:36156453a860e6ef2-89074409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d1c71cc9c35f401176951146cf4bc30004a84d' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0017\\_header.html',
      1 => 1446624228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36156453a860e6ef2-89074409',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56453a86288288_23653072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56453a86288288_23653072')) {function content_56453a86288288_23653072($_smarty_tpl) {?><header>    
    	<div class="headerd">
        	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
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
<div class="baner_d">
	<div id="slideBox" class="slideBox">
    <div class="hd">
            <ul></ul>
              </div>
	<div class="bd">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['navs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navs']->key => $_smarty_tpl->tpl_vars['navs']->value) {
$_smarty_tpl->tpl_vars['navs']->_loop = true;
?>
			<li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['navs']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['navs']->value['image'];?>
" title="638*484" /></a></li>
			<?php } ?>
		</ul>
	</div>
	
			</div>
			
   </div>          
    </header><?php }} ?>
