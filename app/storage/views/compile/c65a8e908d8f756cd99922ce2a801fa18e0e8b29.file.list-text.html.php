<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 09:32:51
         compiled from "D:\unify\app\views\templates\GM0061\list-text.html" */ ?>
<?php /*%%SmartyHeaderCode:268556400d8bd9e618-56424768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65a8e908d8f756cd99922ce2a801fa18e0e8b29' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0061\\list-text.html',
      1 => 1447752764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268556400d8bd9e618-56424768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56400d8c1c2cd2_90100474',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'logo' => 0,
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56400d8c1c2cd2_90100474')) {function content_56400d8c1c2cd2_90100474($_smarty_tpl) {?><!DOCTYPE html>
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
      <header>
         <div class="top2"><div class="menubg"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="header2"><div class="rightmenu"><a href="#" id="classa"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/rightmenu.png" width="100%"></a></div><div class="backfanhui"><a href="javascript:window.history.back()">←</a></div>出境游          	
              
            
            </div>
            <div class="search">
            	<div class="enters">
            		<input type="text" class="txt1">
                </div>
            </div>
         </div>
      </header>
      <section>
      	  <div class="detalindex">
          	 <div class="box_titles">
             	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a>
             </div>
             <div class="box-contsa">
             <div class="box-show">
             	 <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
             </div>
             <div class="boxmain-m">
                 <div class="detal_news">
                 	<ul>
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                    	<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                            <div class="news_show">
                            	
                                <div class="news_titles">
                                  <div class="c_edits" style="color:#429FD9;"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>             
                                  <div class="ndate"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>                   
                                </div>
                            </div>
                            </a>
                        </li>
                    	<?php } ?>
                    </ul>
 <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a><?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
　<a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">尾页</a></div>
                    
                 </div>
             </div>
             </div>
          </div>
           
      </section>
<footer class="foot"><div class="back-top"><A href="#">顶部&uarr;</A></div><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>    
    
    </div>
    </div>
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

    </div>
</body>
</html>
<?php }} ?>
