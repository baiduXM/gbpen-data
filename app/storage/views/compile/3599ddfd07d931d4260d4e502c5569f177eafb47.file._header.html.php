<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:00:27
         compiled from "D:\unify\app\views\templates\GM0073\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:381456444e27abaae1-89450442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3599ddfd07d931d4260d4e502c5569f177eafb47' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0073\\_header.html',
      1 => 1447635605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381456444e27abaae1-89450442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56444e27b5a0f1_05872828',
  'variables' => 
  array (
    'search_action' => 0,
    'logo' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56444e27b5a0f1_05872828')) {function content_56444e27b5a0f1_05872828($_smarty_tpl) {?>
<div class="class">
  <h1 class="class-top"><span class="class-close">×</span>快速搜索</h1>
  <div class="class-m">
  <div class="swiper-container scroll-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
                        	<div class="search_all">
                    	<form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                 	<div class="suosuo">
                       
                           <div class="ss_input"><input type="text" name="s" value=""  class="txt1"></div>
                             <div class="ss_btn"><input type="submit" class="btn1" value="搜索"> </div>
                          
                                                  
                    </div>  </form>                          
                            </div>
  	
    </div></div></div>
  </div>
</div>    
           <div class="topxz"></div>
           <div class="header">      
              <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>     		
                <div class="menu2"  id="quickbar" ><a href="#" id="quickbar-navs-btn"><span></span></a></div> 
                <div class="search" id="daohang">
                  <a href="#"><span></span></a>
                </div>    
        </div>
           <div class="menu">
                    <div class="nav">
                    <a class="arrow-left" href="#">&lt;</a> 
                     <a class="arrow-right" href="#">&gt;</a>
                   <div class="swiper-nav swiper-container">
<div class="swiper-wrapper">
                   <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.html"><strong></strong><i class="menulist">网站首页<b>Home</b></i></a></span></div>
                        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                    <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><strong></strong><i class="menulist"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['nav']->value['en_name'];?>
</b></i></a></span></div>
                          
                        <?php } ?>                                  
                    </div>
                    </div>
                    </div>
           </div>       <?php }} ?>
