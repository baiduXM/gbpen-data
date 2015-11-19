<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 00:48:38
         compiled from "D:\unify\app\views\templates\GP0013\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:14292564bcae6578757-38445442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01d545c0b3771c9a99739d35791e1866ffbb8129' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0013\\_header.html',
      1 => 1447724397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14292564bcae6578757-38445442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_action' => 0,
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bcae6767997_64294442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bcae6767997_64294442')) {function content_564bcae6767997_64294442($_smarty_tpl) {?>



<div id="header_bar" >
<div class="wrapper">
<div class="search">


  <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
  <input type="text" name="s" value="" class="search_area" />
  <input type="submit" class="search_btn"  value="搜索"/>
</form>
</div>
</div>
</div>
<div id="banner">
<h1><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></a></h1>
 <div id="nav">
   <ul class="wrapper menu1">
    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
    <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> nav1"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
	<span class="hoverview">
		<ul class="sub clearfix">
		  <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
		  <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> nav2"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
">

<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                  <?php } ?> <?php }?>
		</ul>
	</span>
		  </li>
<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==6) {?><?php break 1?><?php }?>
<?php } ?>
   </ul>
 </div>
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
