<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 06:17:43
         compiled from "D:\unify\app\views\templates\GM0004\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:16838564580876d9699-33632374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f6575656e481f660035bb25165b9327e5ff607b' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0004\\list-image.html',
      1 => 1446792883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16838564580876d9699-33632374',
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
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56458087ad5540_33580958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56458087ad5540_33580958')) {function content_56458087ad5540_33580958($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <section>
          <div class="ny_top">
            <dl class="ny_menu" id="quickbar-showcats"></dl>
            <div class="ny_title">
              <span class="back">
                <a href="javascript:window.history.back()">返回</a>
              </span>
              <span class="more2" id="first" style="float:right">
                分类
                <span id="down">&darr;</span>
                <span id="up">&uarr;</span>
              </span>
              <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

            </div>
          </div>
          <?php echo $_smarty_tpl->getSubTemplate ("./list_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <div class="boxmain-m">
            <ul class="pro_list">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                <?php if (($_smarty_tpl->tpl_vars['article']->index+1)%2) {?>
                <div class="img">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="118px" title="305*203">
                </div>
                <?php }?>
                <div class="pro_r">
                  <dl class="pro_r_box">
                    <dt class="title">
                      <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                    </dt>
                    <dd class="addicon">+</dd>
                  </dl>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['article']->index%2) {?>
                <div class="img">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="118px" title="305*203">
                </div>
                <?php }?>
              </li>
              <?php } ?>
            </ul>
            <div class="next1">
              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
" class="cu">首页</a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">&lt;&lt;</a>
              <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['near_link']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
 $_smarty_tpl->tpl_vars['near_link']->index++;
?>
              <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
              <a class="cu"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
              <?php } else { ?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['near_link']->index+1==2) {?><?php break 1?><?php }?>
              <?php } ?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">&gt;&gt;</a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
" class="cu">尾页</a>
            </div>
          </div>
        </section>
        <footer class="foot nyfoot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
</body>
</html><?php }} ?>
