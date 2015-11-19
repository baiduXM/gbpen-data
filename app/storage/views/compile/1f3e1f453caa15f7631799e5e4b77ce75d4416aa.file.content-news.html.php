<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 05:50:34
         compiled from "D:\unify\app\views\templates\GM0060\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:1196456404d27d1a981-40920150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f3e1f453caa15f7631799e5e4b77ce75d4416aa' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0060\\content-news.html',
      1 => 1447208246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196456404d27d1a981-40920150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56404d280b0fe3_49970683',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56404d280b0fe3_49970683')) {function content_56404d280b0fe3_49970683($_smarty_tpl) {?><!DOCTYPE html>
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
      <h1 class="boxmain-top fixed-top"><span class="more2 fl" id="font">字+</span><a  class="more2 fr" id="back" href="javascript:window.history.back()">返回</a><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>
      <div class="font">
      <dl class="big">大</dl>
      <dl class="normal">中</dl>
      <dl class="small">小</dl>
      </div>
    </header>
    <section>

      <div class="boxmain boxmain1">
        <span class="flow1" style="bottom:-35px;"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/flow1.png" width="100%"></span>
          <div class=" news_detail">
              <h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
                <dl class=" title2"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</dl>
                <div class="edite" style="padding:10px 9px ">
                  <p><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%"></p>
                  <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                  <!-- <p style=" padding-bottom:7px;"> <span style="font-size:1.12em;">课程简介</span><br>
本课程选用知识性和趣味性相结合的教材，让从未学过韩语的人从零基础开始在老师趣味性的轻松教学方式下，学会打招呼，自我介绍，买东西，点菜，问路，约会等，学习日常生活所需的基础韩语。利用最基本的句型互动联系常用情景对话，如自我阐述，介绍家人，周末活动，天气。<br><br>
<span style="color:#00be8e; font-size:1.12em;">适合对象</span><br>
所有对韩语感兴趣的同学<br> 
<span style="color:#00be8e; font-size:1.12em;">教学目标</span><br>
让学生在兴趣中了解韩语，掌握韩语，帮助他们实现到基本韩语“听、说、读”等的能力<br> 
<span style="color:#00be8e; font-size:1.12em;">开设班级</span><br>
长年滚动式开设一对一，全日制，平时晚上班，周末班，寒假班和暑假班<br> 
<span style="color:#00be8e; font-size:1.12em;">优惠措施</span><br>
二人同报，互减100元
   </p> -->
                </div>
                <div class="next2">
                  <dl><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></dl>
                  <dl><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></dl>
                </div>
               </div>
        </div>
    </section>
      <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
    
</div>


</body>
</html>

<?php }} ?>
