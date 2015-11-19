<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 03:25:53
         compiled from "D:\unify\app\views\templates\GM0074\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:2829556455841087059-81180865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1437dc9f12348a490e84fb42a1e9fbc037c13ea' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0074\\list-imagetext.html',
      1 => 1447317495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2829556455841087059-81180865',
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
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564558415c2c73_47681304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564558415c2c73_47681304')) {function content_564558415c2c73_47681304($_smarty_tpl) {?><!DOCTYPE html>
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
			 	<span class="title_a go fl">返回</span>
			 	<i><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</i>
			 	<span class="class fr">分类∧</span>
		 	</h3>
			<ul class="class_list">
			<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
<?php }?>"  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
				 <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
					<ul class="second">
					 <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
<?php }?>"  class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
							<ul class="third">
							 <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></li>
								<?php } ?>
							</ul>
							 <?php }?>	
						</li>
						
						 <?php } ?>
					</ul>
					<?php }?> 
				</li>
				
				 <?php } ?>
			</ul>	

		 	<div class="article">
				<ul class="news_list">
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
            		<li>
	            		<div class='img'><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"/><em  datetime="<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
" pubdate="pubdate"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</em></a></div><div class="news_right"><h1><a href="news_detail.html"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 </a></h1><p class="article_01"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p></div>
					</li>
						 <?php if ($_smarty_tpl->tpl_vars['article']->index+1==8) {?><?php break 1?><?php }?>			
                    <?php } ?>                 
                </ul>
					<div class="munber">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
" class="cu">首页</a></li>	
	                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页 </a></li>
	                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a></li>
	                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
"  >尾页</a></li>
                    </div>
		 		
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
