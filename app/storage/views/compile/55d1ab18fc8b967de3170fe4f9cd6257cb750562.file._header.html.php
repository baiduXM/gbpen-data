<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 02:21:37
         compiled from "D:\unify\app\views\templates\GM0012\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:17985643f7b1349016-64851013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55d1ab18fc8b967de3170fe4f9cd6257cb750562' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0012\\_header.html',
      1 => 1446793053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17985643f7b1349016-64851013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'site_url' => 0,
    'global' => 0,
    'slidepic' => 0,
    'navs' => 0,
    'nav_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5643f7b147b108_56901247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643f7b147b108_56901247')) {function content_5643f7b147b108_56901247($_smarty_tpl) {?> <header class="header">
   <div class="logo">
     <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
   <img src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/6.png' class='slide-nav' id="quickbar-showcats"/>
 </header>
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
           <a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
">
             <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
"/> 
           </a>
         </li>
         <?php } ?>
       </ul>
     </div>
   </div>
 </div>
<div class="caption">
  <div class="swiper-caption">
    <ul class="swiper-wrapper">
      <li class="swiper-slide">
        <a href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'>网站首页</a>
      </li>
      <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
      
      <li class="swiper-slide ">
        <a class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?> " href='<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</div><?php }} ?>
