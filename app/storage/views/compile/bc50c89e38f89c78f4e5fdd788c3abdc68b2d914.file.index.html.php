<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:02:28
         compiled from "D:\unify\app\views\templates\GM0036\index.html" */ ?>
<?php /*%%SmartyHeaderCode:182405640612414c879-64047658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc50c89e38f89c78f4e5fdd788c3abdc68b2d914' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0036\\index.html',
      1 => 1446794142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182405640612414c879-64047658',
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
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56406124662742_53300418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56406124662742_53300418')) {function content_56406124662742_53300418($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>
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
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta content="telephone=no" name="format-detection">
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
  <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
  <script type="text/javascript">
  window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
  <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
  <div class="body">
    <div class="wrap">
      <div class="index-wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="main">
          
          <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
          
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
          
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
          <div class="box-id">
            <h1 class="box-top1 clearfix">
              <div class="tit_zh"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
              <div class="des"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
            </h1>
            <div class="about-m">
              <div class="nr"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['content'];?>
</a></div>
            </div>
          </div>
          <?php }?>
          
          <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
          <div class="box-id">
            <h1 class="box-top2 clearfix">
              <span class="public_bg1"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</a></span>
              <div class="des"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
            </h1>
            <div class="about-m">
              <div class="products">
                <ul class="clearfix">
                  <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%">
                      <span class="public_bg2"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</span>
                    </a>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <?php }?>
          
          <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
          <div class="box-id">
            <h1 class="box-top1 clearfix">
              <div class="tit_zh"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</a></div>
              <div class="des"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
            </h1>
            <div class="news">
              <ul class="news-list2">
                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                  <a href="#" class="public_color clearfix ">
                    <span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span> <b><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</b>
                  </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
                <?php } ?>
              </ul>
            </div>
          </div>
          <?php }?>
          <?php }?>
          <?php } ?>
        </div>
        <div class="foot">
          <div class="text public_color2"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
        </div>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
</body>
</html><?php }} ?>
