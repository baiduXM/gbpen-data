<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:04:44
         compiled from "D:\Unify\app\views\templates\GM0015\index.html" */ ?>
<?php /*%%SmartyHeaderCode:13313564d667cc4d4a5-88183605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2cb0e2229975760aa1710d8f30c2590afa55a00' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0015\\index.html',
      1 => 1447833037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13313564d667cc4d4a5-88183605',
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
    'navs' => 0,
    'nav_list' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d667d52ac52_53156828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d667d52ac52_53156828')) {function content_564d667d52ac52_53156828($_smarty_tpl) {?><!DOCTYPE html>
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
css/lanrenzhijia.css" type="text/css" rel="stylesheet" />
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
js/lanrenzhijia.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
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
<?php echo $_smarty_tpl->getSubTemplate ("./leftnavs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="wrap page-active">
<?php echo $_smarty_tpl->getSubTemplate ("./bottomnavs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="index-wrap">
<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <section>
          <div class="menu">
            <ul class="nav">
            <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['nav_list']->index++;
?>
            
              <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
'">
                <img src="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['image'];?>
" width="100%">
                <dt class="title"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</dt>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['nav_list']->index+1==5) {?><?php break 1?><?php }?>
              <?php } ?>
            </ul>
            
    <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
    
    <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
    
      <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="about">
              <div class="about_box" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
                <h1 class="about_top">
                  <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>

                  <br>
                  <span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span>
                </h1>
                <dd class="nr">
                  <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>

                </dd>
                <dd class="more1 fr">查看更多</dd>
              </div>
            </div>
            <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
            
            <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="about news">
              <div class="about_box">
                <h1 class="about_top" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'" >
                  <span class="more1 fr">查看更多</span>
                  <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>

                  <br>
                  <span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span>
                </h1>
                <div class="news_m">
                  <ul class="news_list">
                  <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                    </li>
                  <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php }?>
            <?php }?>
            <?php } ?>
          </div>
        </section>
        <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
</body>
</html><?php }} ?>
