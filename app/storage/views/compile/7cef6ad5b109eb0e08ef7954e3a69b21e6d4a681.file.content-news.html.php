<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:03:23
         compiled from "D:\unify\app\views\templates\GM0063\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:498564188ab9d97e7-09523887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cef6ad5b109eb0e08ef7954e3a69b21e6d4a681' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0063\\content-news.html',
      1 => 1447122771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498564188ab9d97e7-09523887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564188abc3ec99_87995370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564188abc3ec99_87995370')) {function content_564188abc3ec99_87995370($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
	<div class="wrap page-active">
      <div class="index-wrap">
        <div class="top_nav">
          <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h2>
          <a href="javascript:window.history.back()" class="return">返回</a>          
          <a class="font_btn" href="javascript:;">字</a>
          <div class="font">
            <span class="big">大</span>
            <span class="normal">中</span>
            <span class="small">小</span>
          </div>          
          
        </div>

        <section class="con_news">
            <article>
              <header>
                <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
                <div class="detail clearfix">
                  <p>发布时间：<time pubdate="pubdate"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
</time></p>
                </div>                    
              </header>
             <div class="text"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div>             
            </article>
        </section>
        <section>
          <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
" class="pre">上一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
" class="nxt">下一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a>
        </section>
      </div> 
    </div>
    
    <div class="to_top" id="to_top"><a href="javascript:;">top</a></div> 
    <!-- 底部 -->
    <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
	</body>
</html><?php }} ?>
