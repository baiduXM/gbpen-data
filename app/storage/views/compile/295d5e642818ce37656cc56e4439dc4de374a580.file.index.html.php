<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:00:33
         compiled from "D:\Unify\app\views\templates\GM0008\index.html" */ ?>
<?php /*%%SmartyHeaderCode:10976564060b1d96291-70068531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '295d5e642818ce37656cc56e4439dc4de374a580' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0008\\index.html',
      1 => 1446707404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10976564060b1d96291-70068531',
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
    'headscript' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'navs' => 0,
    'nav_list' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564060b2519696_39804459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564060b2519696_39804459')) {function content_564060b2519696_39804459($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
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
  <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
  <div class="body">
    <div class="wrap page-active">
      <div class="index-wrap">
        <header><?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</header>
        <section>
          <div class="boxmain">
            <div class="bimgs">
              <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['image_first']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" width="100%"><?php } ?></div>
            <div class="imgbg"></div>
            <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
            
            <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
            
            <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="abouts">
              <div class="lieanst">
                <div class="toplinea"></div>
                <div class="toplinear"></div>
              </div>
              <div class="abiut_edit"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</a></div>
              <div class="lieanst">
                <div class="toplinea"></div>
                <div class="toplinear"></div>
              </div>
            </div>
            <?php }?>
            <?php }?>
            <?php } ?>
            <div class="menulist">
              <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['nav_list']->index++;
?>
              
              <div class="lilist">
                <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
">
                  <div class="pings">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['image'];?>
" width="100%"></div>
                  <div class="pword"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</div>
                </a>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['nav_list']->index+1==4) {?><?php break 1?><?php }?>
              <?php } ?>
            </div>
          </div>
        </section>
        <footer class="foot" >
          <a class="back-top">TOP</a>
          <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

        </footer>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
</body>
</html><?php }} ?>
