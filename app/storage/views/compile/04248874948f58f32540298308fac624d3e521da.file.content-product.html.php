<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 02:38:18
         compiled from "D:\unify\app\views\templates\GM0074\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:2745056454d1a0a0fc7-20085851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04248874948f58f32540298308fac624d3e521da' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0074\\content-product.html',
      1 => 1447317495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2745056454d1a0a0fc7-20085851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'article' => 0,
    'global' => 0,
    'slidepic' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56454d1a35be01_01838166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56454d1a35be01_01838166')) {function content_56454d1a35be01_01838166($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
	
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
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />      
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- 强制让文档的宽度与设备的宽度保持1:1，并且文档最大的宽度比例是1.0，且不允许用户点击屏幕放大浏览； -->
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<!-- iphone设备中的safari私有meta标签，它表示：允许全屏模式浏览 -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- iphone的私有标签，它指定的iphone中safari顶端的状态条的样式 -->
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<!-- 告诉设备忽略将页面中的数字识别为电话号码\去除Android平台中对邮箱地址的识别 -->
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
css/swiper.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swiper.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/iconfont.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css">
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/swiper.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
	<script type="text/javascript">
	window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
</head>
<body>

<section class="wrapper">
	<div class="contant">
	<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
		 <div class="about">
		 	<h3 class="title">
			 	<span class="font_s fl">字∧</span>
			 	<i><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</i>
			 	<span class="title_a go fr">返回</span>
		 	</h3>
		 	<div class="f_size">
		 		<p class="big">大</p>
		 		<p class="mormal">中</p>
		 		<p class="smail">小</p>
			</div>
		 	<div class="article">
				 <div class="banner swiper-container">
	        <ul class="swiper-wrapper">
	            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
	            <li class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"></a><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
"></li>

	            <?php } ?>
	        </ul>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    	</div>
                            
                <div class="products_nr1">    	<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
  </div>
                      
            <ul class="next_pre">
              <li>上一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
              <li>下一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
 "><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
            </ul>		 		
		 	</div>	
		 </div>
	     <footer>
	      <div class="footer">
	    	<div class="home "><a href="javascript:0;">TOP</a></div>
	    	<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 
	    </div>
	    </footer>  
	</div>
	
	<div class="show_bg"></div> 
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
 
</section>
</body>
</html>
<?php }} ?>
