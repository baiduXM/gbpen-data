<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 08:45:08
         compiled from "D:\Unify\app\views\templates\GM0018\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:15695645a3148816d0-36503515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46cf6ae8e78e6646c833e5eecdf0fffeb59af63c' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0018\\content-product.html',
      1 => 1446631369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15695645a3148816d0-36503515',
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
    'article' => 0,
    'image' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5645a314d80981_61498882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5645a314d80981_61498882')) {function content_5645a314d80981_61498882($_smarty_tpl) {?><!DOCTYPE html>
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
</head>
<body>
  <div class="body">
    <div class="wrap page-active">
      <h1 class="fixed-top">
        <span class="fixed-btn back">
          <a href="javascript:window.history.back()">返回</a>
        </span>
        <div class="menulista" id="quickbar-showcats">
          <a href="#">
            <div class="word">导航</div>
          </a>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>

      </h1>
      <div class="index-wrap">
        <section>
          <div class="index_show" style="margin:50px 15px 8px;">
            <div class="d_titles">
              <hl class="title2">
                更新时间：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
  字体 :
                <span class="smalld">小</span>
                |
                <span class="middled">中</span>
                |
                <span class="bigd">大</span>
              </hl>
            </div>
            <div class="box-m">
              <div class="boxmain-m">
                <div class="baner">
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
                        <li>
                          <a class="pic" href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" title="567*414" style="width: 60%" />
                          </a>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>

                  </div>
                </div>
                <span class="imgword"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</span>
                <div class="edite" ><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div>
                <ul class="inner_pages">
                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a>
                  </li>
                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <footer class="foot">
          <div class="fobdi">
            <div class="fanhui">
              <a class="back-top">回到头部</a>
            </div>
          </div>
          <div class="dibu"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
        </footer>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>

</body>
</html><?php }} ?>
