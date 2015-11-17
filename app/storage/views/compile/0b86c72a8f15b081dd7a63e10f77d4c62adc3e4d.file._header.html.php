<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:34:57
         compiled from "D:\Unify\app\views\templates\GM0003\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:1111756405ab144ecc4-81601548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b86c72a8f15b081dd7a63e10f77d4c62adc3e4d' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0003\\_header.html',
      1 => 1446631379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111756405ab144ecc4-81601548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405ab1621578_01411427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405ab1621578_01411427')) {function content_56405ab1621578_01411427($_smarty_tpl) {?><div class="menu">
  <div class="nav">
    <a class="arrow-left" href="#">&lt;</a>
    <a class="arrow-right" href="#">&gt;</a>
    <div class="swiper-nav swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a>
          </span>
        </div>
        <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
        
        <div class="swiper-slide <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>">
          <span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
          </span>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<div class="baner">
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
" title="638*484" />
          </a>
        </li>
        <?php } ?>
      </ul>
    </div>

  </div>

</div><?php }} ?>
