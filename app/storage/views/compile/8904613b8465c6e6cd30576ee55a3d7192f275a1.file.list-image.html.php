<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 07:53:30
         compiled from "D:\unify\app\views\templates\GM0059\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:20857564050fac349a2-93617961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8904613b8465c6e6cd30576ee55a3d7192f275a1' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0059\\list-image.html',
      1 => 1446794882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20857564050fac349a2-93617961',
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
    'pagenavs' => 0,
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564050fb0ff741_56147554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564050fb0ff741_56147554')) {function content_564050fb0ff741_56147554($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
      <script type="text/javascript">
      // 跳转PC页面
      <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
          if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
              location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
          }
      <?php }?>
      </script>
      <!-- 实时预览调试代码，模板开发完成后删除 -->
      


      <meta name="x5-orientation" content="portrait">
      <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
      <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />

      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" /> 
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 
      <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
      <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
      <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper.3dflow-2.0.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
      <script type="text/javascript">
        window.addEventListener('load', function(){
       setTimeout(function(){ window.scrollTo(0, 1); }, 100);
    });//safari浏览器可以通过此代码来隐藏地址栏
    </script>
</head>
<body>

<div class="index-wrap" style="background:#ffcc00">
    <header class="header "><div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></div></header>
    <div class="menu">
        <div class="nav">
            <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
                    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                    <div class="swiper-slide" style="width:<?php echo 100/count($_smarty_tpl->tpl_vars['navs']->value);?>
%"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
                    <?php } ?>
                  </div>
                </div>
        </div>
        <div class="menubtn"><span class="up block"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/down.png" width="55%"></span><span class="down"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/up.png" width="55%"></span></div>
        <div class="menubtn1" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/homeicon.png" width="55%"></div>
    </div>
    <div class="boxmain">
        <h1 class="boxmain-top"><span class="more2" id="first">分类<span id="down"> &darr;</span><span id="up"> &uarr; </span></span>作品展示</h1>
        
            <div class="hide-class">
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                  <dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></dl>
                <?php } ?>
          </div>
          <div class="boxmain-m">
                <ul class="picture2">
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>    
                
                    <li><div><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><p class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" /></p><p class=" title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</p></a></div></li>               
                    <?php } ?>

                </ul> 
                <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a><?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
 / <?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">尾页</a></div>     
           </div>
    </div>
    <footer style="display:none"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</div>
</body>
</html>




<?php }} ?>
