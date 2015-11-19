<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:24:52
         compiled from "D:\unify\app\views\templates\GM0066\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1127656418db426af40-09439530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0080f2bf0dcba0bba6d213eb3e803bc6c9acb205' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0066\\index.html',
      1 => 1447060336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127656418db426af40-09439530',
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
  'unifunc' => 'content_56418db4805512_17520015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56418db4805512_17520015')) {function content_56418db4805512_17520015($_smarty_tpl) {?><!DOCTYPE html>
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
          <div class="header">
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
      <div class="baner">
        <div id="slideBox" class="slideBox">
          <div class="hd">
            <ul>
            </ul>
          </div>
          <div class="bd">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
              <li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" title="500*245" /></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="menulist">
        <ul>
         <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
           <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><div class="nav_ico"><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</div><p><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</p></a></li>
           <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==6) {?> <?php break 1?> <?php }?>
         <?php } ?>
                      

        </ul>
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
      <div id="in_page" class="wrapper">
      <div class="in_cir1 in_cir"></div><div class="in_cir2 in_cir"></div><div class="in_cir3 in_cir"></div><div class="in_cir4 in_cir"></div>
        <h2 class="in_h2"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><div class="in_zh"><-- <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
 --></div></a></h2>
        <div class="inner clearfix">
          <p><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</p>
          <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%">
       </div>
        </div>
      
        
      <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?> 
      <div id="in_imagetext" class="wrapper">
      <div class="in_cir1 in_cir"></div><div class="in_cir2 in_cir"></div><div class="in_cir3 in_cir"></div><div class="in_cir4 in_cir"></div>
        <h2 class="in_h2"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><div class="in_zh"><-- <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
 --></div></a></h2>
        <div class="inner">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <li><a href="#" class="clearfix">
                 <div class="in_imgbox"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="120*88"></div>
                 <div class="in_textbox">
                 <div class="in_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                 <div class="in_des"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
                 </div></a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['article']->index+1==1) {?><?php break 1?><?php }?> <?php } ?>
            </ul>
        </div>
        </div>
        
        
        
        <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?> 
        <div id="in_image" class="wrapper">
      <div class="in_cir1 in_cir"></div><div class="in_cir2 in_cir"></div><div class="in_cir3 in_cir"></div><div class="in_cir4 in_cir"></div>
        <h2 class="in_h2"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><div class="in_zh"><-- <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
 --></div></a></h2>
        <div class="inner yc">
            <ul class="clearfix">
             <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                  <div class="in_proimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="160*150"></div>
                  <div class="in_protitle"><p><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</p></div></a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?> <?php } ?>
            </ul>
        </div>
        </div>
        
        
        <?php }?> 
<?php } ?>
      </section>
    <footer class="foot" ><a class="back-top">∧</a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer></div>
    </div>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

  </div>
</body>
</html>
<?php }} ?>
