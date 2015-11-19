<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:22:00
         compiled from "D:\unify\app\views\templates\GM0057\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:3222256405d52126257-06578259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1741e4bb2eda9b64651d2abd6ed44855d7245a9' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0057\\list-imagetext.html',
      1 => 1447658518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222256405d52126257-06578259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405d52576948_34934572',
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'site_another_url' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405d52576948_34934572')) {function content_56405d52576948_34934572($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
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
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>


<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />

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
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
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
<script type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
        if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
            location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
        }
    <?php }?>
    </script>
</head>
<body>
<div class="body">

<div class="wrap page-active">

<div class="index-wrap">
	<header>
    <div class="header">
    	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"> </div>
    </div>
    <div class="menu">
        <div class="nav">
       <div class="swiper-nav swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></span></div>
             <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
              <div class="swiper-slide <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>" ><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
              <?php } ?>
          </div>
        </div>
        </div>
    </div>
    </header>
    <section>
    	<div class="main">
        	<div class="boxmain">
            	<h1 class="lujin"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>> <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h1>
                <div class="indexclass"><?php echo $_smarty_tpl->getSubTemplate ('./_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
                <div class="boxmain-ny-m">
                	<ul class="newslist">
					
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                	<li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%">
                    <dt><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
                    <dt><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</dt>
                   	</li>
					<?php } ?>
                </ul>
                <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a><?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">尾页</a></div> 
                </div>
            </div>
            
            
        </div>
    </section>
		<footer class="foot" /><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
</div>
</div>
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</div>

</body>
</html>
<?php }} ?>
