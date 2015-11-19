<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 06:54:40
         compiled from "D:\unify\app\views\templates\GM0073\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:3264456497db07ce813-79664961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c638c187a085e41c25f7df198494ca983bbb413' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0073\\content-news.html',
      1 => 1447635605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264456497db07ce813-79664961',
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
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56497db0a5d708_88474396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56497db0a5d708_88474396')) {function content_56497db0a5d708_88474396($_smarty_tpl) {?><!DOCTYPE html>
<html>
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
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.5,user-scalable=no,minimal-ui">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />        
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no, email=no" name="format-detection">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" /> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/animate.css" rel="stylesheet" type="text/css" />
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

            <h1 class="fixed-top">
                  <div class="topxz"></div>
                  <div class="title_top">
                  <span class="fixed-btn back"><a href="javascript:window.history.back()">&lt;返回</a></span> 
                   <div class="menu3"  id="quickbar" ><a href="#" id="quickbar-navs-btn"><span></span></a></div>              
                  <span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</span>
                 </div>
                </h1>
        <div class="index-wrap">
          <div class="wrap-bg" style="position:relative; margin-top:80px;">                     
          <section>
          <div class="topxze"></div>
          <div class="ny_detalbg">
<div class="d_titles">
<h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
<hl class="title2">更新时间：2014/4/12  字体 : <span class="smalld">小</span> | <span class="middled">中</span> | <span class="bigd">大</span></hl>
</div>

          <div class="box-m">
<div class="boxmain-m"> 

                <div class="edite" >
          <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
   
                </div>   
            <ul class="inner_pages">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
 ">上一篇:<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
 </a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
 ">上一篇:<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
 </a></li>
            </ul>                        
            </div>
          </div>
          </div>
     </section>	
              
               <div class="dfoot">
               	 <div class="top">∧</div>
               	 <div class="midfot">
                   <div class="topxzc"></div>
                   <div class="dibu">
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
              
                   </div>
                 </div>
               </div>         
        </div>
   </div>
 <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
   

</body>
</html>
<?php }} ?>
