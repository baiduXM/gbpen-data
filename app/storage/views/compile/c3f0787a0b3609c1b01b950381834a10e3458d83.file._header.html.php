<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:10:42
         compiled from "D:\unify\app\views\templates\GM0046\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:59965640631271ccd9-38679240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3f0787a0b3609c1b01b950381834a10e3458d83' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0046\\_header.html',
      1 => 1446794292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59965640631271ccd9-38679240',
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
  'unifunc' => 'content_56406312790252_64270486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406312790252_64270486')) {function content_56406312790252_64270486($_smarty_tpl) {?><div class="menu">
            	<div class="nav">
            	<a class="arrow-left" href="#">&lt;</a> 
   				 <a class="arrow-right" href="#">&gt;</a>
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">Home</a></span></div>
					  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['en_name'];?>
</a></span></div>
                      <?php } ?>

                  </div>
				</div>
                </div>
    </div><?php }} ?>
