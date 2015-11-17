<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 09:19:45
         compiled from "D:\Unify\app\views\templates\GM0013\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:3097356430831b751a0-75920901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b51d7153a4841444ca56adb2cdb49652a8d4063' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0013\\list-imagetext.html',
      1 => 1446110974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3097356430831b751a0-75920901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'list' => 0,
    'pagenavs' => 0,
    'nav_list' => 0,
    'nav_list2' => 0,
    'page_links' => 0,
    'article' => 0,
    'loop_num' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56430832463d35_05134939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56430832463d35_05134939')) {function content_56430832463d35_05134939($_smarty_tpl) {?><!DOCTYPE html>
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
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection">

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
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

</head>
<body>
<div class="index-wrap">

        <div class="heaer  public_bg1">
        <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
      </div>
      <div class="menu public_bg1">
        <div class="nav"> <a class="arrow-left" href="#">&lt;</a> <a class="arrow-right" href="#">&gt;</a>
          <div class="swiper-nav swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class=" public_color">网站首页<br>
                <span class="en">home</span></a></span></div>
        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
              <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class=" public_color"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
<br>
                <span class="en"><?php echo $_smarty_tpl->tpl_vars['nav']->value['en_name'];?>
</span></a></span></div>
        <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    <div class="main">
      <div class="box-id">
          <h1 class="box-top clearfix public_bor"><span class="more-ny public_bg" id="first">分类<span id="down"> &darr;</span><span id="up"> &uarr; </span></span>
              <div class="text public_color2"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

                <div class="en public_color"><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</div>
              </div>
            </h1>
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
            <div class=" about-m">
              <ul class="news-list1">
              <?php $_smarty_tpl->tpl_vars['loop_num'] = new Smarty_variable(($_smarty_tpl->tpl_vars['page_links']->value['current_page']-1)*$_smarty_tpl->tpl_vars['page_links']->value['per_page']+1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                  <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'" class="public_bg1">
                    <a href="#">
                     <div class="news_title clearfix public_bg"><span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><div class="No">No<?php echo $_smarty_tpl->tpl_vars['loop_num']->value++;?>
:</div><b> <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</b></div>
                      <div class="news_bottom clearfix"><div class="news_img public_bor"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" title="112*81"/></div>
                      <div class="news_content">
                        <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
 
            </div></div>
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
        <div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>
        <div class="text"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
      </div>
      </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
