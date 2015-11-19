<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 03:11:16
         compiled from "D:\unify\app\views\templates\GP0018\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:5948564d3dd47db642-62252758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6354d62ebb3bd15a802f721a58fee546a2733451' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0018\\_header.html',
      1 => 1447826418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5948564d3dd47db642-62252758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    '_header' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d3dd4a143f9_98403015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d3dd4a143f9_98403015')) {function content_564d3dd4a143f9_98403015($_smarty_tpl) {?><header>
<section>
<div class="head_outsild">
      <div class="head">
          <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" title="返回首页" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="139" width="503" /></a>
          <div class="sz"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sz_03.png" height="10" width="11" alt="">&nbsp;返回首页</a>
          <a href="javascript:void(0);" onclick="SetHome(this, window.location)"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sy_05.png" height="10" width="11" alt="">&nbsp;设为首页</a>
          <a href="javascript:void(0);" onclick="shoucang(document.title, window.location)"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sy_05.png" height="10" width="11" alt="">&nbsp;收藏首页</a></div>
          <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" class="ss"> 
              <span>全网搜索</span>
              <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/ssl_05.png" height="35" width="5" alt="">
              <input type="text" placeholder="请输入关键词" class="input_case" name="s">
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
">网站首页<br />HOME</a></h3>
      </li>
      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
      <li class="nLi">
       <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['nav']->value['en_name'];?>
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
<div class="banner">
    <div id="slideBox" class="slideBox">
        
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
" height="458px" width="1600px" /></a></li>
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
