<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 00:52:06
         compiled from "D:\unify\app\views\templates\GM0072\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:37735643f0bf8702d8-54881153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b313806a912cb2e7389488dfc89294eb2fbc14ef' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0072\\_header.html',
      1 => 1447635119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37735643f0bf8702d8-54881153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5643f0bf896ad7_87215998',
  'variables' => 
  array (
    'search_action' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643f0bf896ad7_87215998')) {function content_5643f0bf896ad7_87215998($_smarty_tpl) {?>
  <div class="class page-prev">
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
	<header>
    	<div class="header">
        	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
           <div class="menu2" id="quickbar" ><a href="#" id="quickbar-navs-btn"><span></span></a></div>  
           <div class="search" id="daohang">
           	<a href="#"><span></span></a>
           </div>    
        </div>                   
    </header>  <?php }} ?>
