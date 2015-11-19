<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:58:11
         compiled from "D:\unify\app\views\templates\GM0058\index.html" */ ?>
<?php /*%%SmartyHeaderCode:4410564060236f30d1-11425958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d39aedd0b1dfe169e1ff8f8e5221065d3960790' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0058\\index.html',
      1 => 1446794876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4410564060236f30d1-11425958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'site_another_url' => 0,
    'headscript' => 0,
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'navs' => 0,
    'nav' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406023cb9769_59264905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406023cb9769_59264905')) {function content_56406023cb9769_59264905($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
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
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>


<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
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
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
<script type="text/javascript">
	window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
<script type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
        if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
            location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
        }
    <?php }?>
    </script>
    <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
    <header>
    <div class="header">
        <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"> </div>
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
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
            <?php } ?>
        </ul>
    </div>
    
            </div>
   </div>
   <div class="menu">
                <div class="nav">
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
                      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                            <div class="swiper-slide <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
                        <span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span>
                        
                           </div>
                    <?php } ?>
                  </div>
                </div>
                </div>
    </div>
    </header>
    <section>
<?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
     <div class="boxmain">
            <div class="boxmain-line"></div>
            <h1 class="boxmain-top"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more"></a><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</h1>
            <div class="boxmain-about">
                <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="127" height="133">
                <dd class="nr"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['mIndexCat']->value['description'], ENT_QUOTES);?>

</dd>
            </div>
            <div class="boxmain-line1"></div>
        </div>
        <div class="boxline">
            <span class="boxline-list"></span>
            <span class="boxline-list boxline-list1"></span>
        </div>
<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
        <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
        <div class="boxmain">
            <div class="boxmain-line"></div>
            <h1 class="boxmain-top"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more"></a><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</h1>
            <div class="boxmain-lesson">
                <ul class="lessonlist">
                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    <li><div><a href="#"><dd class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="136*136"></dd><dt class=" title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt></a></div></li>
                   
       
               <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                 <?php } ?>
                </ul>
            </div>
            <div class="boxmain-line1"></div>
        </div>  
        <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==2) {?>
        <div class="boxmain">
            <div class="boxmain-line"></div>
            <h1 class="boxmain-top"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more"></a><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</h1>
            <div class="boxmain-lesson">
                <ul class="lessonlist teamlist">
                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    <li><div><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><dd class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="136*136"></dd><dt class=" title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt></a></div></li>
                   
                     <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?> 
                 <?php } ?>
                </ul>
            </div>
            <div class="boxmain-line1"></div>
        </div>
        <?php }?>

        <div class="boxline">
            <span class="boxline-list"></span>
            <span class="boxline-list boxline-list1"></span>
        </div>
        
<?php }?>
<?php } ?>
    </section>
<footer class="foot">
    <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

</footer>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
