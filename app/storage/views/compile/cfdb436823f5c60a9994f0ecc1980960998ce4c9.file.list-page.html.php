<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:25:37
         compiled from "D:\Unify\app\views\templates\GM0010\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:5554564163b1a506c5-75411768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfdb436823f5c60a9994f0ecc1980960998ce4c9' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0010\\list-page.html',
      1 => 1447064226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5554564163b1a506c5-75411768',
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
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564163b21c43e7_95123280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564163b21c43e7_95123280')) {function content_564163b21c43e7_95123280($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
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
<div class="wrap page-active">
 <div class="index-wrap">
	<header class="header"><div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></div></header>
    <div class="menu">
    	<div class="nav">
        	<div class="swiper-nav">
                  <div class="swiper-wrapper">
                      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
					  <?php } ?>
                  </div>
				</div>
        </div>
        <div class="menubtn"><span class="up block"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/down.png" width="55%"></span><span class="down"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/up.png" width="55%"></span></div>
        <div class="menubtn1"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/homeicon.png" width="55%"></div>
    </div>
    <div class="boxmain">
    	<h1 class="boxmain-top"><span class="more2" id="font">字+</span><span class="more2" id="first">分类<span id="down"> &darr;</span><span id="up"> &uarr; </span></span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h1>
        <div class="font">
            	<dl class="big">大</dl>
                <dl class="normal">中</dl>
                <dl class="small">小</dl>
            	</div>
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
          <div class="boxmain-m">
           		<div class="edite">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['image'];?>
">
                          <p style="padding-top:7px;">    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>
</p>
 
            </div>    	
           </div>
    </div>
    </div>
    </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
