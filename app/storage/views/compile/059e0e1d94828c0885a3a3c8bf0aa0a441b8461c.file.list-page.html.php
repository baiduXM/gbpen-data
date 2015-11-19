<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 08:39:17
         compiled from "D:\unify\app\views\templates\GM0061\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:1021156403f73e2f4c6-30539367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059e0e1d94828c0885a3a3c8bf0aa0a441b8461c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0061\\list-page.html',
      1 => 1447663145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1021156403f73e2f4c6-30539367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56403f741a9a15_83076899',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'list' => 0,
    'search_action' => 0,
    'pagenavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403f741a9a15_83076899')) {function content_56403f741a9a15_83076899($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
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

<!-- <div class="index-wrap"> -->
      <header>
        <div class="top2">
          <div class="menubg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/menubg.jpg" width="100%"></div>
          <div class="header2">
            <div class="rightmenu"><a href="javascript:;" id="quickbar-showcats"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/rightmenu.png" width="100%"></a>
            </div>
            <div class="backfanhui"><a href="javascript:window.history.back()">←</a></div>
            <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
          	
          </div>
          <div class="search">
            <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
            	<div class="enters">
                <input type="text" class="txt1">
            	  <input type="submit" class="btn1" value="">
              </div>
            </form>
          </div>


        </div>
      </header>
      <section>
      	  <div class="detalindex">
          	 <div class="box_titles">
             	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?> &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a><?php } ?>
             </div>
             <div class="box-contsa">
             <div class="box-show">
              <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


             </div>
             <div class="boxmain-m">
             		<div class="edite"><div class="box-img"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['image'];?>
" width="100%"></div>
                     <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>
                   
                </div>
             </div>
             </div>
          </div>
           
      </section>
      <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
    
<!--     </div> -->

</body>
</html>
<?php }} ?>
