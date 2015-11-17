<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:37:21
         compiled from "D:\Unify\app\views\templates\GM0002\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:10676564069519ba047-86754760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '796e21fba68b1819b416a037afe4dc99d380a95c' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0002\\list-page.html',
      1 => 1446624331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10676564069519ba047-86754760',
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
    'list' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406951dc7217_84301150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406951dc7217_84301150')) {function content_56406951dc7217_84301150($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
	<head>
		<!-- 实时预览调试代码，模板开发完成后删除 -->
		<script type="text/javascript" src="http://chanpin.xm12t.com.cn/js/preview.js">
		</script>
		<!-- 调试代码 End -->
		<script type="text/javascript">
			// 跳转PC页面
			<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
			if ( !! navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
				location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
			} <?php }?>
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
		<script type="text/javascript">
			window.addEventListener('load',
			function() {
				setTimeout(function() {
					window.scrollTo(0, 1);
				},
				100);
			}); //safari浏览器可以通过此代码来隐藏地址栏
			
		</script>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
		<title>
			<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

		</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css"
		type="text/css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/lanrenzhijia.css" type="text/css" rel="stylesheet"
		/>
		<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css"
		/>
		<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js">
		</script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js">
		</script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js">
		</script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/lanrenzhijia.js">
		</script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js">
		</script>
		<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js">
		</script>
	</head>
	<body>
		<div class="body">
			<?php echo $_smarty_tpl->getSubTemplate ('./_dh.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<div class="wrap page-active">
				<?php echo $_smarty_tpl->getSubTemplate ('./_zdcustom.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<h1 class="fixed-top">
					<span class="fixed-btn backa">
						<a href="javascript:window.history.back()">
							〈返回
						</a>
					</span>
					<div class="menu2" id="header_menu">
						<span>
						</span>
					</div>
					<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

				</h1>
				<div class="index-wrap">
					<section>
						<div class="index_show" style="margin:45px 0px 0px;">
							<div class="boxmain_d">
								<div class="d_contbgs">
									<div class="d_bgtop">
									</div>
									<div class="box-bg">
										<div class="box-title">
											<span class="more3" id="font">
												字+
											</span>
											<span class="more3" id="first">
												分类
												<span id="down">
													&or;
												</span>
												<span id="up">
													&and;
												</span>
											</span>
											<div class="titleb">
												<?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

											</div>
										</div>
										<div class="font">
											<dl class="big">
												大
											</dl>
											<dl class="normal">
												中
											</dl>
											<dl class="small">
												小
											</dl>
										</div>
										<?php echo $_smarty_tpl->getSubTemplate ('./_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

										<div class="box-m">
											<div class="boxmain-m">
												<div class="edite">
													<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

					</section>
					
				</div>
				<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

			</div>
		</div>
	</body>

</html><?php }} ?>
