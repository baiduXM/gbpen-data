<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 03:33:22
         compiled from "D:\unify\app\views\templates\GM0068\list-text.html" */ ?>
<?php /*%%SmartyHeaderCode:165515640729cc8ca23-54791250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918793dbcb30b2d0eaefb197f20d6224c7287fac' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0068\\list-text.html',
      1 => 1447211472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165515640729cc8ca23-54791250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640729d29ef31_24289542',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640729d29ef31_24289542')) {function content_5640729d29ef31_24289542($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="index-wrap"> 
   <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <section>
    <div class="boxmaind">
      <div class="boxmain_d">
      
        <h1 class="boxmain-top">
        <span class="more3" id="first">分类<span id="down"> ∧</span><span id="up"> ∨ </span></span>
         <div class="sub_zh public_color"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</div><div class="sub_en public_color"><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</div></h1>
      
         <?php echo $_smarty_tpl->getSubTemplate ('./_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="main">
          <div class="list_text">
            <ul class="clearfix">
            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <li>
                <div class="text_box1"><a onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                 <div class="text_title1 public_color"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                 <div class="text_data1 public_color"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</div>
                 <div class="text_des1 public_color"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div></a>
                </div>
                 </li>
                  <?php if ($_smarty_tpl->tpl_vars['article']->index+1==10) {?> <?php break 1?> <?php }?>
			<?php } ?>
            </ul>
                <div class="next1 public_color"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
" class="public_color">首页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
" class="public_color">上一页</a><?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
　<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
" class="public_color">下一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
" class="public_color">尾页</a></div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
      <footer class="foot" ><a class="back-top">∧</a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
</div>
</div><?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
</div>
</body>
</html>
<?php }} ?>
