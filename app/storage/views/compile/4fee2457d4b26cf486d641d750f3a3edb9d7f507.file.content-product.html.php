<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 07:04:39
         compiled from "D:\unify\app\views\templates\GM0001\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:208905641970711bf16-41991454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fee2457d4b26cf486d641d750f3a3edb9d7f507' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0001\\content-product.html',
      1 => 1446795163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208905641970711bf16-41991454',
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
    'img' => 0,
    'related' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564197073f9fd1_36173936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564197073f9fd1_36173936')) {function content_564197073f9fd1_36173936($_smarty_tpl) {?><!DOCTYPE html>
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
css/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" />
<script>
window.addEventListener('load', function(){
  setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
</head>
<body>
  <div class="body">
   <?php echo $_smarty_tpl->getSubTemplate ("./_left_navs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="wrap page-active">
      <div class="index-wrap">
         <header class="header page_h">
          <div class="header_menu" id="header_menu"><i class="icon iconfont">&#xe603;</i></div>
          <h1 class="logo"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
          <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="to_home"><i class="icon iconfont">&#xe620;</i></a>
        </header>

        <section> 
            <div class="pro_detail">

              <div class="swiper-container_1">
              <div class="swiper-wrapper">
                 <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                 <div class="swiper-slide">
                   <div class="img_wrap">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['image'];?>
"alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['img']->value['title']);?>
"/>
                  </div>
                 </div>
                 <?php } ?>
              </div> 
              <?php if ($_smarty_tpl->tpl_vars['img']->value['title']!=null) {?>
              <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
</h5>
              <?php }?> 
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
              
            
              <div class="txt">
                <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

              </div>
            </div>

            <div class="hot_pro">
            <h2>延展阅读</h2>

            <div class="swiper-container">
              <div class="swiper-wrapper">
                   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                   <div class="swiper-slide">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                      <div class="img_wrap">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"/>
                        <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h5>
                      </div>
                    </a>
                   </div>
                   <?php } ?>  
              </div>
            </div>

             


            </div>

        </section>
        <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
      </div>
      <div class="opacity2"></div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("./_bottom_navs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
</body>
</html>
<?php }} ?>
