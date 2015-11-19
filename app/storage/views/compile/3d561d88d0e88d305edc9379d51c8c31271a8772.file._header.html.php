<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 05:59:18
         compiled from "D:\unify\app\views\templates\GM0068\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:22505640728c8241b1-59071972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d561d88d0e88d305edc9379d51c8c31271a8772' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0068\\_header.html',
      1 => 1447307149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22505640728c8241b1-59071972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640728c8920b1_04317037',
  'variables' => 
  array (
    'logo' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640728c8920b1_04317037')) {function content_5640728c8920b1_04317037($_smarty_tpl) {?><div class="header">
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
      <div class="menulist">
        <div class="navlist"> 
          <div class="swiper-nav swiper-container">
            <div class="swiper-wrapper">
        <div class="swiper-slide"><span><div class="txt_bg"><div class="txt"><div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/home.png"></div><div class="wz"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></div></div></div></span></div>
               <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
<div class="swiper-slide"><span><div class="txt_bg"><div class="txt"><div class="pic"><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</div><div class="wz"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></div></div></div></span></div>
               <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	
	<?php }} ?>
