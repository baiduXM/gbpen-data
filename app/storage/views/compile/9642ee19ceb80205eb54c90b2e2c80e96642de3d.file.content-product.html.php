<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 10:12:40
         compiled from "D:\unify\app\views\templates\GM0061\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:2741564afd98ab3971-10544528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9642ee19ceb80205eb54c90b2e2c80e96642de3d' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0061\\content-product.html',
      1 => 1447752937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2741564afd98ab3971-10544528',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564afd98d2ba94_25870408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564afd98d2ba94_25870408')) {function content_564afd98d2ba94_25870408($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
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
    <header>
        <h1 class="fixed-top"><div class="rightmenu"><a href="javascript:;" id="quickbar-showcats"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/rightmenu.png" width="100%"></a></div><div class="backfanhui"><a href="javascript:window.history.back()">←</a></div><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>        
    </header>

    <section>
    	<div class="nyboxmain fix-boxmain">
             <div class="boxmain-m"> 
                <div class="news_detail">
                	<h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
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
" width="100%"  title="567*414" /></a></li>
			<?php } ?>
		</ul>
	</div>
	
			</div>
                        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                    </div>                                                       	
                </div>               
             </div>     
        </div>    
    </section>
    <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   

</body>
</html>
<?php }} ?>
