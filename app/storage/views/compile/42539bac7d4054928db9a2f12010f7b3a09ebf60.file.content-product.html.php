<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 02:09:42
         compiled from "D:\unify\app\views\templates\GM0067\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:2748656406d66bb52b6-93333632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42539bac7d4054928db9a2f12010f7b3a09ebf60' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0067\\content-product.html',
      1 => 1447137695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2748656406d66bb52b6-93333632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406d670936e6_35979598',
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
    'image' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406d670936e6_35979598')) {function content_56406d670936e6_35979598($_smarty_tpl) {?><!DOCTYPE html>
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
    <h1 class="fixed-top">
      <span class="fixed-btn back"><a href="javascript:window.history.back()">返回</a></span>
      <span class="fixed-btn more2" id="font">字+</span>
      <?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>
      <div class="font">
            <dl class="big">大</dl>
            <dl class="normal">中</dl>
            <dl class="small">小</dl>
          </div>
    <div class="index-wrap">
      <section>
        <div class="index_show">
          <div class="d_titles">
            <h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
            <hl class="title2">更新时间：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</hl>
          </div>
          <div class="box-m">
            <div class="boxmain-m">
            <div class="baner">
	<div id="slideBox" class="slideBox">
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
" width="100%" title="500*240" /></a></li>
			<?php } ?>
		</ul>
	</div>
	
			</div>
			
   </div>
              <div class="edite" >  <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div>
              <ul class="inner_pages">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <footer class="foot" ><a class="back-top">∧</a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer></div>
    </div>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</div>
</body>
</html>
<?php }} ?>
