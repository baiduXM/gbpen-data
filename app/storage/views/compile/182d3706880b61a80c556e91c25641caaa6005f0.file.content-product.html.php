<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:10:25
         compiled from "D:\unify\app\views\templates\GM0048\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:2868456406301bfe9a4-27942720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '182d3706880b61a80c556e91c25641caaa6005f0' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0048\\content-product.html',
      1 => 1446794319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2868456406301bfe9a4-27942720',
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
    'article' => 0,
    'image' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406301e9afc4_17670825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406301e9afc4_17670825')) {function content_56406301e9afc4_17670825($_smarty_tpl) {?><!DOCTYPE html>
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" /> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 

<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper.3dflow-2.0.js"></script>
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

<h1 class="fixed-top public-bg1 public-color1"><span class="back"><a href="javascript:window.history.back()">返回</a></span><span class="back" id="font" style="float:right">字+</span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>
<div class="font fix-font public-bg1 public-color1">
    <dl class="big">大</dl>
    <dl class="normal">中</dl>
    <dl class="small">小</dl>
</div>
     

      <section>  
      <div class="mainbox ny-wrap">
      	  <div class="aboutbox">
          		<div class="bigimgbox">
                <style type="text/css">
					.slideBox1 .hd ul{ display:inline-block;}
				</style>
            	<div class=" bigimg">	
                	<div id="slideBox" class="slideBox1">
    <div class="hd">
            <ul></ul>
              </div>
	<div class="bd">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			<li><a class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" /></a></li>
			<?php } ?>
			
		</ul>
	</div>
	
			</div>
			
                </div>
                <h1 class="bigimgtitle public-bg1 public-color1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
            </div>
            <div class="prodetail">
                <p class="title2">产品详情：</p>
                <div class="edite">
                  <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                </div>
                <div class="next1" style="border-top:1px solid rgba(0,85,128,1); padding-top:12px; margin-bottom:0px; padding-bottom:0px;"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一个</a><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一个</a></div>
            </div>
            
          </div>
      </div>
      </section>
      <footer class="foot public-bg1 public-color1"><div class="back-top public-bg1" id="quickbar-backtotop"><A href="#">TOP</A></div>版权所有：<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


</body>

</html>
<?php }} ?>
