<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 09:29:29
         compiled from "D:\unify\app\views\templates\GM0076\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:163456459eee7c3ff4-17843762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d5415e0140dab5d4080608278cca1fc5874a15' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0076\\list-image.html',
      1 => 1447406957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163456459eee7c3ff4-17843762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56459eeea2a614_36507966',
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'logo' => 0,
    'list' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56459eeea2a614_36507966')) {function content_56459eeea2a614_36507966($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
	<head>
		<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		
		<!-- 调试代码 End -->
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
css/swiper.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" />
    <link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
<script>
window.addEventListener('load', function(){
  setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
		
	</head>
	<body>
  <div class="fakeloader"><div class="img_w"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></div></div>
  <div class="wrap page-active">   
  <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <div class="main">
    
        <?php echo $_smarty_tpl->getSubTemplate ("./_top_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <section class="list_img"> 
            <ul class="clearfix img_list">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
              <li>                
                  <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                    <div class="img_wrap">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
" />
                    </div>
                    <h4 class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h4>
                    <div class="disc"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
                  </a>
              </li>
              <?php } ?>
            </ul>

          <?php echo $_smarty_tpl->getSubTemplate ("./_page_normal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </section>
    

  </div>
  
    <div class="to_top" id="to_top"><a href="javascript:;">top</a></div> 
    <!-- 底部 -->
    <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>

    </div> 
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
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html><?php }} ?>
