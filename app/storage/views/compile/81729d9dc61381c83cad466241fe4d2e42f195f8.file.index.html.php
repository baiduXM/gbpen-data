<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 07:40:59
         compiled from "D:\unify\app\views\templates\GM0004\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3212563c598bcff422-51200535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81729d9dc61381c83cad466241fe4d2e42f195f8' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0004\\index.html',
      1 => 1446792883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3212563c598bcff422-51200535',
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
    'logo' => 0,
    'navs' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c598c37f761_77774660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c598c37f761_77774660')) {function content_563c598c37f761_77774660($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="index_top">
          <header class="header">
            <div class="logo">
              <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="header_menu" id="quickbar-showcats"></div>
          </header>
          <div class="menu">
            <div class="nav">

              <div class="swiper-nav swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a>
                  </div>
                  <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
              
                  <div class="swiper-slide">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="baner">
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
                  <li>
                    <a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
"/>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <section>
          
          <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
          
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
          
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
          <div class="boxmain">
            <h1 class="boxmain_top">
              <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more"></a>
              <dl class="title">
                <dd class="icon">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/icon.png" width="100%"></dd>
                <dd class="nr">
                  <span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span>
                  <br>
                  <span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span>
                </dd>
              </dl>
            </h1>
            <div class="boxmain_m">
            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <dl class="img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" height="115px" title="239*275"></dl>
              <dt class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
              <dd class="nr"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</dd>
              <dd class="more">
                <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">查看更多 ></a>
              </dd>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['article']->index+1==1) {?><?php break 1?><?php }?>
            <?php } ?>
          </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==2) {?>
          <div class="boxmain">
            <h1 class="boxmain_top">
              <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more"></a>
              <dl class="title">
                <dd class="icon">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/icon1.png" width="100%"></dd>
                <dd class="nr">
                  <span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span>
                  <br>
                  <span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span>
                </dd>
              </dl>
            </h1>
            <div class="trave_add">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <div class="trave_list"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                <dl class="trave_ed">
                  <dt class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
                  <dd class="nr"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</dd>
                </dl>
                <a href="#">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="70%" title="640*149" height="83px" style="<?php if (($_smarty_tpl->tpl_vars['article']->index+1)%2) {?>float:right;<?php }?>"></a>
              </div>
              <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
              <?php } ?>
            </div>
          </div>
          <?php }?>
          <?php }?>
          <?php } ?>
        </section>
        <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
</body>
</html><?php }} ?>
