<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:14:34
         compiled from "D:\Unify\app\views\templates\GM0019\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:311405641530a27f425-10130706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1573592b7ef10b337b6668f28b97275b13507461' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0019\\_header.html',
      1 => 1446110988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311405641530a27f425-10130706',
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
  'unifunc' => 'content_5641530a3773d5_41299549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641530a3773d5_41299549')) {function content_5641530a3773d5_41299549($_smarty_tpl) {?><div class="menu">
            	<div class="nav">
            	<a class="arrow-left" href="#">&lt;</a> 
   				    <a class="arrow-right" href="#">&gt;</a>
              <div class="swiper-nav swiper-container">
                     <div class="swiper-wrapper">
                      <div class="swiper-slide"><div class="text"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/11.png"></div><span>网站首页</span></a></div></div>
                      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
					   <div class="swiper-slide"><div class="text"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><div class="pic"><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</div><span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</span></a></div></div>
                      <?php } ?>
                  </div>
				</div>
                </div>
    </div><?php }} ?>
