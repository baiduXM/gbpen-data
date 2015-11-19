<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 07:35:07
         compiled from "D:\unify\app\views\templates\GM0060\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:747656404c001325e1-09247413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a3e30a0d03544f96cc621bd9614a81919eee6d' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0060\\list-page.html',
      1 => 1447745705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747656404c001325e1-09247413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56404c003ed108_22918550',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'list' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56404c003ed108_22918550')) {function content_56404c003ed108_22918550($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
      <script type="text/javascript">
      // 跳转PC页面
      <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
          if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
              location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
          }
      <?php }?>
      </script>
      <!-- 实时预览调试代码，模板开发完成后删除 -->
      


      <meta name="x5-orientation" content="portrait">
      <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
      <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />

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
<div class="index-wrap">
  <header>
      <div class="header">
          <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="headerhome" id="quickbar-showcats"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/menuicon.png" width="100%"></div>
            <div class="headersearch"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/search.png" width="100%"></div>
        </div>

        <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">

          <div class="searchbox">
            <div class="searchmain">  
                <div class="searchinput"><input name="s" type="text">
                  </div>
                <input name="" type="submit" class="searchbtn" value="">
              </div>
          </div>

        </form>


    </header>
    <section>
      <div class="boxmain">
          <h1 class="boxmain-top"><span class="more2" id="font">字+</span><span class="more2 fr" id="first">分类<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/classicon.png" style="vertical-align:middle; width:12px; padding-left:3px; padding-bottom:3px;"></span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h1>
            <div class="font">
              <dl class="big">大</dl>
                <dl class="normal">中</dl>
                <dl class="small">小</dl>
              </div>
                <?php echo $_smarty_tpl->getSubTemplate ('./_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <div class="boxmain-m">
            <div class="edite">
              <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['image'];?>
" width="100%">
                  <p style="padding-top:5px;"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>
</p>
 
            </div>
          </div>
        </div>
    </section>
   <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</div>




</body>
</html>
<?php }} ?>
