<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:14:33
         compiled from "D:\Unify\app\views\templates\GM0019\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1234356415309943ec8-54388453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f7e9c5ee82e5b25f1b68e3e728e1cea1398270' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0019\\index.html',
      1 => 1446110988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234356415309943ec8-54388453',
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
    'headscript' => 0,
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mIndexCat_list' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5641530a255912_29695560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641530a255912_29695560')) {function content_5641530a255912_29695560($_smarty_tpl) {?><!DOCTYPE html>
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
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript">
	window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
<div class="index-wrap">
    <div class="baner">
	<div class="heaer">
    	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
    </div>
	<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<div id="slideBox" class="slideBox">
    <div class="hd">
            <ul></ul>
              </div>
	<div class="bd">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
			<li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" /></a></li>
			<?php } ?>
			
		</ul>
	</div>
			</div>     
   </div>
   
    <div class="main">
           <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
             <div class="news">
			<div class="title">
			<div class="english"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
			<div class="chinese clearfix">
			
			<div class="word"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
			</div>
			<div class="line"></div>
			</div>
            <ul class="news-list1 ">
			<?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
                	<li onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
                    <a href="#" class="clearfix">
                      <div class="news_img public_border"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
" title="105*95"/></div>
                      <div class="news_content">
                       <div class="news_title clearfix public_color"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</div>
                       <p> <?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['description'];?>
</p>
						<div class="bottom"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubdate'];?>
</div>
                      </div>
                    </a></li>
					<?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==3) {?><?php break 1?><?php }?>
					<?php } ?>
                </ul>
				
			<div class="button"><A href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">更多资讯</A></div>
            </div> 
             
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
			
			<div class="about">
            <div class="about_bg">
			<div class="title"><div class="a"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
 </div><div class="b"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div></div>
			<div class="inner">
			    <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>

				</div>
             <div class="button"><A href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">了解更多</A></div>
			<div class="circle"></div>
			<div class="circle_small"></div>
				</div>
			</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
			<div class="proshow">
			<div class="title">
			<div class="english"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
			<div class="chinese clearfix">
			
			<div class="word"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</a></div>
			</div>
			<div class="line"></div>
			</div>
            <ul class="clearfix">
			<?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
            <li onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
"><a href="#"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==6) {?><?php break 1?><?php }?>
			<?php } ?>
			</ul>
			
            </div>
		 <?php }?>
       <?php } ?>
		
		
            
    <div class="foot public_bg">
	<div class="circle"></div>
	<div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>
   		<div class="text public_bg"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
   </div>

</div>	    
</div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
