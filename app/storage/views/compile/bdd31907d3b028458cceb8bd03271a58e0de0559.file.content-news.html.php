<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 10:04:40
         compiled from "D:\Unify\app\views\templates\GM0006\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:1109856406fb8e3f673-27569333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd31907d3b028458cceb8bd03271a58e0de0559' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0006\\content-news.html',
      1 => 1446624216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109856406fb8e3f673-27569333',
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
    'stylecolor' => 0,
    'article' => 0,
    'related' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406fb946bc72_94085976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406fb946bc72_94085976')) {function content_56406fb946bc72_94085976($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		<!-- 调试代码 End -->
		<script type="text/javascript">
		// 跳转PC页面
		<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
			if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
				location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
			}
		<?php }?>
		</script>
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
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
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
<div class="body">

<div class="wrap page-active public_bg">

<h1 class="fixed-top public_bg public_color"><span class="back"><a href="javascript:window.history.back()" class="public_color1">返回</a></span><span class="back" id="font" style="float:right">字+</span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>
<div class="font fix-font public_bg">
            	<dl class="big public_color1">大</dl>
                <dl class="normal public_color1">中</dl>
                <dl class="small public_color1">小</dl>
</div>
     
<div class="index-wrap">
      <section>  
      <div class="mainbox ny-wrap">
      	  <div class="aboutbox">
          		<div class=" news_detail public_color">
            	<h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
                <dl class=" title2 public_bor"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</dl>
                
                <div class="edite">
					<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                </div>
                
            </div>
            <div class="next2">
              <dl><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></dl>
			  <dl><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></dl>
            </div>
            <div class="boxmain relate">
        	<h1 class="boxmain-top relate-top">相关阅读：</h1>
            <div class="relate-m">
            	<ul class="newstlist2">
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                	<li class="public_bg"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="public_color1"><span class="date1"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
					<?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
					<?php } ?>
					

					
                </ul>
            </div>
        </div>
          </div>
      </div>
      </section>
      <footer class="foot public_bg">
        <div class="back-top "><A href="#" class="public_color1 public_bg">↑</A></div>
        <div class="text"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
      </footer>
</div>
</div>
</div>

</body>

</html>
<?php }} ?>
