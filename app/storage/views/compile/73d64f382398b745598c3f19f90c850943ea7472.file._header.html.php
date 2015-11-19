<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 09:22:51
         compiled from "D:\unify\app\views\templates\GP0012\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:122785649a06b07ae27-00100390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d64f382398b745598c3f19f90c850943ea7472' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0012\\_header.html',
      1 => 1447665734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122785649a06b07ae27-00100390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'title' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'search_action' => 0,
    'limit' => 0,
    'site_url' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649a06b490ff0_59107832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649a06b490ff0_59107832')) {function content_5649a06b490ff0_59107832($_smarty_tpl) {?>  <div class="top_l">
    <div class="header_inner">
       <div class="top">
        <h1 class="logo"><a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></a></h1>
      </div>    
      
       <div class="nav">
       <ul>
    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
    <li class="nav1 <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
	<span class="hoverview">
		<ul>
		  <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
		  <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
          <?php } ?> <?php }?>
          
		</ul>
	</span>
		  </li>
<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==7) {?><?php break 1?><?php }?>
<?php } ?>
  </ul>
      </div>
      
      <div class="ser_zt">
    <div class="ser clearfix">
       <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                <input type="text" name="s" value="" class="sa" />
                <input type="submit" class="bta" />
            </form>
    </div>
  </div>
   
</div>

<div id="nav">
  <ul class="clearfix wrapper">
    <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(8, null, 0);?>
    <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['limit']->value) {?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
    <li class="nav1" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%"> <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> </li>
    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
    <li class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> nav1" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%"> <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
      <ul class="sub clearfix">
        <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> nav2"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
        <?php } ?> <?php }?>
      </ul>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
    <?php } ?>
  </ul>
</div>

 </div>
 
 
<div id="banner">
<!--100%-->
  <div class="banner_box">
    <div id="kinMaxShow" style="display:none;"> <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
      <div> <a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
"  /></a></div>
      <?php } ?> </div>
  </div>
</div>
<?php }} ?>
