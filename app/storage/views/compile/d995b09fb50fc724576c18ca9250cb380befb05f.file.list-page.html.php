<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 05:58:46
         compiled from "D:\unify\app\views\templates\GM0069\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:119265642dc07dce6a8-71604595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd995b09fb50fc724576c18ca9250cb380befb05f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0069\\list-page.html',
      1 => 1447307160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119265642dc07dce6a8-71604595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642dc0808ae37_81738805',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'list' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642dc0808ae37_81738805')) {function content_5642dc0808ae37_81738805($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		<!-- 调试代码 End -->
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
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
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
<div class="wrap page-active">
    <div class="index-wrap"> 
  <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <section>
    <div class="boxmaind">
      <div class="boxmain_d">
        <h1 class="boxmain-top2">
         <span class="more3" id="font">字+</span> <span class="more3" id="first">分类<span id="down"> ∧</span><span id="up"> ∨ </span></span>
         <div class="sub_zh public_color"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</div><div class="sub_en public_color"><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</div></h1>
      
          <div class="font">
            	<dl class="big">大</dl>
                <dl class="normal">中</dl>
                <dl class="small">小</dl>
           	</div>
        <div class="hide-class">
          <div class="classbox">
            <dl class="sub1"><a href="#"><span class="icon">&bull;</span>一级分类</a></dl>
            <dl class="sub2"><a href="#"><span class="icon">&bull;</span>->二级分类</a></dl>
            <dl class="sub3"><a href="#"><span class="icon">&bull;</span>--三级分类</a> </dl>
            </div>
        </div>
        <div class="main">
          <div class="list_page public_color">
           外景照片更加自然更加美丽，是婚纱照不可或缺的，涉及外景车，燃油，工餐，饮水等费用都是由蒙娜丽莎来担负的。一些高端套系比如万元以上是没有任何场地费用的，但是一些低端套系，如果您想去特殊景点如非常勿扰2、蜈支洲岛等，要有相应的场地费。
完全不用携带多余的东西，下列物品需携带：防晒霜、太阳伞、防蚊液、隐形文胸，如果有条件自己带几件便装，可以让挑选的余地更大，太多的东西反而累赘。
您选择的游艇套系所需要的一些小道具我们蒙娜丽莎工作室都有相应的安排，请不必担心。再有特殊细节注意事项，客服会在拍摄日期之前一一通知到位。
您选择的游艇套系所需要的一些小道具我们蒙娜丽莎工作室都有相应的安排，请不必担心。再有特殊细节注意事项，客服会在拍摄日期之前一一通知到位。
在拍婚纱照前几天一定要休息好，保证皮肤状况良好，因为蒙娜丽莎倡导淡妆的真实美，如果恰好皮肤问题集中爆发，只能让化妆师的妙手来帮你啦，呵呵。蒙娜丽莎的化妆师造型师会把你打扮的美美的。
选片方面蒙娜丽莎也有人性化的服务，首先确定是否加选照片，明确挑片所需时间，我们会有专人陪同选片的，以严苛的角度来挑选，注意表情、光线、美感搭
            
          </div>
        </div>
      </div>
      <!--第三种样式结束-->
      
      
    </div>
  </section>
   <footer class="foot" ><a class="back-top">∧</a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
</div>
</div><?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
</div>
</body>
</html>
<?php }} ?>
