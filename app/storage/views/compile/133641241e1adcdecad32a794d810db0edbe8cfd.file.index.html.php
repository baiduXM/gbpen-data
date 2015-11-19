<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 07:35:29
         compiled from "D:\unify\app\views\templates\GM0060\index.html" */ ?>
<?php /*%%SmartyHeaderCode:569856404795c391e0-22035192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '133641241e1adcdecad32a794d810db0edbe8cfd' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0060\\index.html',
      1 => 1447745705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '569856404795c391e0-22035192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56404796003be5_50911637',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56404796003be5_50911637')) {function content_56404796003be5_50911637($_smarty_tpl) {?><!DOCTYPE html>
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
      <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>

<div class="body">

<div class="wrap page-active">


<div class="index-wrap">
	<header>
    	<div class="header">
        	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="headerhome"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/menuicon.png" width="100%"></div>
            <div class="headersearch"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/search.png" width="100%"></div>
        </div>
        <div class="searchbox">
        	<div class="searchmain">	
            	<div class="searchinput"><input name="" type="text">
                </div>
            	<input name="" type="button" class="searchbtn">
            </div>
        </div>
    </header>
    <div class="indexmain">
    	<span class="fangzi"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/icon1.png" width="100%"></span>
    	<span class="yun"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/icon2.png" width="100%"></span>
    	<span class="cat"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/cat.png" width="100%"></span>
    	<span class="flow1"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/flow1.png" width="100%"></span>
        <span class="flow2"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/flow2.png" width="100%"></span>
        <span class="Balloon"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/Balloon.png" width="100%"></span>
    	<div class="indexmain-menu">
        	<dl class="indexmain-menu-dl"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'"><dd class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/menuicon.png" width="60%"></dd><dt class="title">网站首页</dt></dl>
			<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>		
            <dl class="indexmain-menu-dl"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
'"><dd class="icon"><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</dd><dt class="title"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</dt></dl>
			<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==5) {?><?php break 1?><?php }?>
           <?php } ?>
        	
        </div>
        
    </div>
	
</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</div>
</body>
</html>
<?php }} ?>
