<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 01:30:29
         compiled from "D:\Unify\app\views\templates\GM0019\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:23914564a83350d95e8-26283969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e266085df4377b603bb4f4aad882f490ef5e7547' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0019\\list-imagetext.html',
      1 => 1446110988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23914564a83350d95e8-26283969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'list' => 0,
    'pagenavs' => 0,
    'nav_list' => 0,
    'nav_list2' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564a833594bfd1_01720076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a833594bfd1_01720076')) {function content_564a833594bfd1_01720076($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
    // 跳转PC页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
      if (!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
      }
    <?php }?>
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no, email=no" name="format-detection">
<!-- 启用360浏览器的极速模式(webkit) -->
<meta name="renderer" content="webkit">
<!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
<meta name="HandheldFriendly" content="true">
<!-- 微软的老式浏览器 -->
<meta name="MobileOptimized" content="320">
<!-- uc强制竖屏 -->
<meta name="screen-orientation" content="portrait">
<!-- QQ强制竖屏 -->
<meta name="x5-orientation" content="portrait">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript">
  window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
</head>
<body>
<div class="index-wrap">
  <div class="heaer public_bg">
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
    </div>
   
    <div class="menu public_bg ny-menu">
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
    </div>
    
    <div class="main">
      <div class="box-id">
          <h1 class="box-top1 public_bg public_border1"><span class="more-ny" id="first">分类<span id="down"> &darr;</span><span id="up"> &uarr; </span></span><div class="text public_bg"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</div></h1>
            <div class="hide-class">
      <ul>
      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
              <div class="classbox public-bg">
              <dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></dl>
              <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                    <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
                    <dl class="nav3"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
">><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></dl>
                            <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?> 
                                    <?php  $_smarty_tpl->tpl_vars['nav_list2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list2']->key => $_smarty_tpl->tpl_vars['nav_list2']->value) {
$_smarty_tpl->tpl_vars['nav_list2']->_loop = true;
?>
                                    <dl class="nav4"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list2']->value['link'];?>
">>><?php echo $_smarty_tpl->tpl_vars['nav_list2']->value['name'];?>
</a></dl>
                                    <?php } ?>
                            <?php }?>
                    <?php } ?>
              <?php }?>
      </div>
      <?php } ?> 
        </ul>
              
          </div>
            <div class=" about-t">
              <ul class="news-list1 ">
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                  <li onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                    <a href="#" class="clearfix">
                      <div class="news_img public_border"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" title="105*95"/></div>
                      <div class="news_content">
                       <div class="news_title clearfix public_color"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                       <p> <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p>
<div class="bottom"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</div>
                      </div>
                    </a></li>
          <?php } ?>
                </ul>
                <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a><?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
 /<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a></div>
            </div>
        </div>
    </div>
<div class="foot public_bg">
<div class="circle"></div>
<div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>
      <div class="text"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
   </div>
   </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
