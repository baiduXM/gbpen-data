<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:16:13
         compiled from "D:\Unify\app\views\templates\GM0012\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:182465642f94d8c7049-03413943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c4016614a4b3ff483d34e83d00133db12a0ebfa' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0012\\content-product.html',
      1 => 1446631334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182465642f94d8c7049-03413943',
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
    'image' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642f94ddb9894_01624532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642f94ddb9894_01624532')) {function content_5642f94ddb9894_01624532($_smarty_tpl) {?><!DOCTYPE html>
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
	<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
	<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/lazyload.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
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
		<div class="wrap transition">
			<div class="main">
				<header class='top'>
					<a href='javascript:void(0)' class='forword'>返回</a>
					<?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['article']->value['category']['en_name'];?>

					<a href='###' class='slide-nav top-nav' id="quickbar-showcats">导航</a>
				</header>

				<div class='det-tit'><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
				<div class='font-list font'>
					<span>更新日期：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span>
					字体：
					<a href='###' class='big'>大</a>
					|
					<a href='###' class='normal'>中</a>
					|
					<a href='###' class='small'>小</a>
				</div>
				<div class='content-bd'>
					<div id='img'>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
					<li>
					<img src='<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
' width='80%' style='display:block;margin:0 auto 10px;' />
				</li>
				<?php } ?>
				</ul>
				</div>
					<p><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</p>
					<div class='other'>
						上一篇:
						<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a><br>
						下一篇:
						<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a>
					</div>
				</div>
			</div>

			<div class='state'>
				<span><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</span>
				<a href='javascript:void(0)' class='backtop'>顶部&uarr;</a>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
</body>
</html><?php }} ?>
