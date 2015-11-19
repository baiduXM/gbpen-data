<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 07:09:20
         compiled from "D:\unify\app\views\templates\GM0075\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:2570656458baa054d83-07069197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfbb69481d85439823adc822d5d1853c80c8a071' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0075\\content-product.html',
      1 => 1447398480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2570656458baa054d83-07069197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56458baa30b104_54340278',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'posnavs' => 0,
    'article' => 0,
    'proimg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56458baa30b104_54340278')) {function content_56458baa30b104_54340278($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
      <script type="text/javascript">
      // 跳转PC页面
      <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
          if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
              location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
          }
      <?php }?>
      </script>
      <!-- 实时预览调试代码，模板开发完成后删除 -->
      
      <meta name="x5-orientation" content="portrait">
      <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
      <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
      <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />

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
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/iconfont.css" rel="stylesheet" type="text/css" />
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

<div class="index-wrap">
    <header>
       <div class="nyheader">
           <div class="nyheadbg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/nybg.jpg" width="100%" alt=""></div>       
           <h2><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</h2>
           <i class="hicon2 iconfont" id="quickbar-showcats">&#xe603;</i>
           <span class="hicon1"><a href="javascript:window.history.back()">返回</a></span>
       </div>

    </header>
    <section>

        <div class="boxmain-m"> 
            <div class="font">
              字体：
              <dl class="big">大</dl>
              <dl class="normal">中</dl>
              <dl class="small">小</dl>
            </div>
            <div class="news_detail">
                <div class="edit" >
                   <div class="proimg">
                      
                        <div id="slideBox" class="slideBox">
                            <div class="hd">
                                    <ul></ul>
                                      </div>
                            <div class="bd">
                                <ul>
                                  <?php  $_smarty_tpl->tpl_vars['proimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['proimg']->key => $_smarty_tpl->tpl_vars['proimg']->value) {
$_smarty_tpl->tpl_vars['proimg']->_loop = true;
?>
                                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['proimg']->value['image'];?>
" alt="" width="100%"></li>
                                  <?php } ?>  
                                </ul>
                            </div>
    
                        </div>
<!--             <script type="text/javascript">
                TouchSlide({ 
                    slideCell:"#slideBox",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    mainCell:".bd ul", 
                    effect:"leftLoop", 
                    autoPage:true,//自动分页
                    autoPlay:true,
                    interTime:6000 //自动播放
                });
            </script>  -->


                      <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['images'][0]['title'];?>
</h2>
                   </div>
      
                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                </div>
                <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一篇</a><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一篇</a></div>                                                                        	
            </div>               
                 
        </div>    
    </section>
           <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
    
    </div>
    </div>
    </div>
</body>
</html>
<?php }} ?>
