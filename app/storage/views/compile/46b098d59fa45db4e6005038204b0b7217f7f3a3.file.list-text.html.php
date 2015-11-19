<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 07:36:23
         compiled from "D:\unify\app\views\templates\GM0060\list-text.html" */ ?>
<?php /*%%SmartyHeaderCode:15356404fc278f3a8-49917713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b098d59fa45db4e6005038204b0b7217f7f3a3' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0060\\list-text.html',
      1 => 1447745705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15356404fc278f3a8-49917713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56404fc2b41d56_62021203',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'list' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56404fc2b41d56_62021203')) {function content_56404fc2b41d56_62021203($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
      <div class="header">
          <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="headerhome" id="quickbar-showcats"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/menuicon.png" width="100%"></div>
            <div class="headersearch"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/search.png" width="100%"></div>
        </div>

        <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">

          <div class="searchbox">
            <div class="searchmain">  
                <div class="searchinput"><input name="s" type="text">
                  </div>
                <input name="" type="submit" class="searchbtn" value="">
              </div>
          </div>

        </form>


    </header>
    <section>
      <div class="boxmain">
        <span class="flow1" style="left:7px"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/flow1.png" width="100%"></span>
        <span class="flow2"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/flow2.png" width="100%"></span>
        <span class="Balloon"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/Balloon.png" width="100%"></span>
          <h1 class="boxmain-top text"><span class="more2 fr" id="first">分类<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/classicon.png" style="vertical-align:middle; width:12px; padding-left:3px; padding-bottom:3px;"></span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h1>
          <?php echo $_smarty_tpl->getSubTemplate ('./_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <div class="boxmain-m">
              <div class="newsimg"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['image'];?>
" width="100%"></div>
                <ul class="newslist">
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>    
                               
                    <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                        <dl class="date"><dd class="year"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%m/%d');?>
</dd><dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y');?>
</dd></dl>
                          <dl class="newsbox">
                            <dt class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
                              <dd class="nr"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['description'], ENT_QUOTES);?>
...</dd>
                          </dl>
                      </li>               
                    <?php } ?>
                    <dl class="morebtn" id="newsmore">查看更多 ></dl>
                </ul>
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
