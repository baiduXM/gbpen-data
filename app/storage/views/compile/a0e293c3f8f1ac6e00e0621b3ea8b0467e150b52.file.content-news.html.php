<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 01:41:21
         compiled from "D:\unify\app\views\templates\GM0055\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:29079564165e47fde48-21211414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e293c3f8f1ac6e00e0621b3ea8b0467e150b52' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0055\\content-news.html',
      1 => 1447206321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29079564165e47fde48-21211414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564165e4a2b635_13216339',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564165e4a2b635_13216339')) {function content_564165e4a2b635_13216339($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		<!-- 调试代码 End -->
		<script type="text/javascript">
		// 跳转PC页面
		<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
			if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
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
            <h1 class="boxmain-top fix-main"><span class="back"><a href="javascript:window.history.back()">返回</a></span><span class="more2" id="font">字+</span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>
             <div class="font fixed-font">
              <dl class="big">大</dl>
              <dl class="normal">中</dl>
              <dl class="small">小</dl>
            </div>
<section>

<div class="boxmain ny-wrap">
        	<div class=" news_detail">
            	<h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
                <dl class=" title2">发布时间：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</dl>
                <div class="edite" style="padding:10px 0px ">
                	<p><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%"></p>
                	<p style=" padding-bottom:7px;">  <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
                                  </p>
                </div>
                
               </div>
        </div>    	
    	
    </section>    
         
        <div><footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 </footer></div>
        
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
    
</body>
</html>
<?php }} ?>
