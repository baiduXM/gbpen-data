<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 09:29:54
         compiled from "D:\unify\app\views\templates\GP0016\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:175564c14d4e26b31-06052171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7b9f8e711ddcfea28d44bdde9ffd03611303eb2' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_header.html',
      1 => 1447838986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175564c14d4e26b31-06052171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c14d50a5cf4_70193820',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'contact' => 0,
    'search_action' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    '_header' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c14d50a5cf4_70193820')) {function content_564c14d50a5cf4_70193820($_smarty_tpl) {?><header>
<section>
<div class="head_outsild">
      <div class="head">
          <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" title="返回首页" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="116" width="438" /></a>
          <div class="tel">服务热线：<span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></div>
          <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" class="ss"> 
              <span>产品搜索：</span>
              <img src="images/ssl_07.jpg" height="28" width="3" style="float:left;display:block">
              <input type="text" placeholder="请输入关键词" class="input_case" name="" autocomplete="on">
              <input type="submit" value="" class="input_key">
          </form>
      </div>
</div>    
</section>
<section>
    <div class="header_menu">   
       <ul id="nav" class="nav">
	   <li class="nLi">
       <h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="current">网站首页</a></h3></li>
      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
      <li class="nLi">
       <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
        <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
          <ul class="sub">
			
            <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
            <?php } ?>
          </ul>
        <?php }?>
      </li>
      <?php } ?>
    </ul>
    </div>
</section>
 <section>

    <div id="slideBox" class="slideBox">
    <div class="banner">

       <div class="bd">
        <ul>
                     <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_header']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" height="464" width="1500"/></a></li>
                     <?php } ?>
                </ul>
      </div>


      <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>

    </div>
</div>
    </section>
</header>
<?php }} ?>
