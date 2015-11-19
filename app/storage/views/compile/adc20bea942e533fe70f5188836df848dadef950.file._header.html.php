<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:02:28
         compiled from "D:\unify\app\views\templates\GM0036\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:165756406124688d19-76304839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc20bea942e533fe70f5188836df848dadef950' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0036\\_header.html',
      1 => 1446794142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165756406124688d19-76304839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'logo' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564061247a6213_06127163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564061247a6213_06127163')) {function content_564061247a6213_06127163($_smarty_tpl) {?><div class="heaer">
  <div class="welcome public_bg2">欢迎来到<?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
</div>
  <div class="logo">
    <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
  <div class="public_bg1 banner_bg">
    <div class="menu">
      <div class="nav">
        <div class="swiper-nav swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a>
            </div>
            <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
            
            <div class="swiper-slide <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>">
              <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div id="slideBox" class="slideBox">
      <div class="hd">
        <ul></ul>
      </div>
      <div class="bd">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
          <li>
            <a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
">
              <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" />
            </a>
          </li>
          <?php } ?>
        </ul>

      </div>
      <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/banner_hr.jpg" width="100%"></div>
  </div>
</div><?php }} ?>
