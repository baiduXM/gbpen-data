<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 03:22:42
         compiled from "D:\unify\app\views\templates\GM0001\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21639564bef02a95707-22088129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d74e2f4d7808adc4ee39ff04c0f5d3724611f27' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0001\\index.html',
      1 => 1446795163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21639564bef02a95707-22088129',
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
    'headscript' => 0,
    'logo' => 0,
    'search_action' => 0,
    'navs' => 0,
    'nav' => 0,
    'limit' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bef02de5853_12990363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bef02de5853_12990363')) {function content_564bef02de5853_12990363($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">
<head>
  <!-- 实时预览调试代码，模板开发完成后删除 -->
  
  <!-- 调试代码 End -->
  <script type="text/javascript">
// 识别为电脑客户端，自动跳转PC页面
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
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" />
 
  <script type="text/javascript">
    window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
  <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>

   <?php echo $_smarty_tpl->getSubTemplate ("./_left_navs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="wrap page-active wrap_home">
      <div class="index-wrap">
        <header class="header">
          <div class="header_menu" id="header_menu"><i class="icon iconfont">&#xe603;</i></div>
          <h1 class="logo"><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a></h1>
          <div href="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" class="search_btn" id="search_btn"><i class="icon iconfont">&#xe636;</i></div>
        </header>

        <section> 
            <nav class="menu_nav">
              <ul class="clearfix">
                <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(6, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
">
                    <span class="icon"><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</span>
                    <span class="link"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</span> 
                  </a>  
                </li>
                <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
                <?php } ?>
              </ul>
            </nav>
        </section>
        <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
      </div>
      <div class="opacity2"></div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("./_bottom_navs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page_right page_search">
      <div class="search_top clearfix">
        <h3>搜索/分类</h3>
        <div class="to_page"></div>
        <div class="header_menu" id="page_menu"><i class="icon iconfont">&#xe603;</i></div>
      </div>

      <div class="search">
        <span>搜索：</span>
        <form id="form" class="fm clearfix" name="f" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" >
          <span class="s_ipt_w">
            <input type="text" placeholder="请输入关键字" name="s" id="">
          </span>
          <span class="s_btn_w">
            <input type="submit" name="" id="smt" class="gb_btn" value="">
          </span>
        </form>
      </div>

      <div class="classify">
        <span>分类：</span>
        <nav>
          <ul class="mtree">
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
            <?php } ?>          
          </ul>
        </nav>
      </div>
    </div>
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
