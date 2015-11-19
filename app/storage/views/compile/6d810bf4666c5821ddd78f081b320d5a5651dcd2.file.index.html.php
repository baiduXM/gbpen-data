<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 09:19:42
         compiled from "D:\unify\app\views\templates\GM0077\index.html" */ ?>
<?php /*%%SmartyHeaderCode:12480564b0291bf7cf0-23522592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d810bf4666c5821ddd78f081b320d5a5651dcd2' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0077\\index.html',
      1 => 1447838379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12480564b0291bf7cf0-23522592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564b0292469393_24696939',
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
    'navs' => 0,
    'nav_list' => 0,
    'limit' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'imglist' => 0,
    'article' => 0,
    'contact' => 0,
    'global' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564b0292469393_24696939')) {function content_564b0292469393_24696939($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
css/swiper.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" />

<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
/js/swiper.jquery.min.js"></script>
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
  <div class="loader_div"></div>

  <div class="wrap page-active wrap_home">    
    <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    

    <!-- 输出导航式栏目（不包括内容式栏目） -->
    <nav class="menu_nav">
      <ul class="clearfix">

        <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(5, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['nav_list']->index++;
?>            
        <!-- 仅输出类型为 5内容单页 和 外链的栏目（包括5留言板、7微信、8直达号功能） -->
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['nav_list']->value['icon'];?>

            <span><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</span>
          </a>
        </li>            
        <?php if ($_smarty_tpl->tpl_vars['nav_list']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
        <?php } ?>
      </ul>
    </nav>    
    
    <!-- 输出内容式栏目 -->
    <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>

    <!-- 仅输出类型为 2图片列表 的栏目 -->
    <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
      <!-- 后台选中“样式1”的展现模式： -->
      <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
      <section class="product_w">
        <header class="clearfix">
          <h2><div><span class="zh"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span><span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span></div></h2>
        </header>
        <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more">more</a>
        <div class="product">            
          <ul class="clearfix"> 
            <div class="swiper_container_1">
                <div class="swiper-wrapper">            
                  <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(6, null, 0);?> 
                  <?php  $_smarty_tpl->tpl_vars['imglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['imglist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['imglist']->key => $_smarty_tpl->tpl_vars['imglist']->value) {
$_smarty_tpl->tpl_vars['imglist']->_loop = true;
 $_smarty_tpl->tpl_vars['imglist']->index++;
?>
                    <li class="swiper-slide">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['imglist']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['imglist']->value['title']);?>
"/>
                      <h4><?php echo $_smarty_tpl->tpl_vars['imglist']->value['title'];?>
</h4>
                    </li>
                  <?php if ($_smarty_tpl->tpl_vars['imglist']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
                  <?php } ?> 
                </div>
                <!-- 如果需要分页器 -->
                <!-- <div class="swiper-pagination"></div> -->
            </div> 
          </ul>
        </div>
      </section>
      <?php }?>

    <!-- 仅输出类型为 3图文列表 的栏目 -->
    <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
      <!-- 后台选中“样式1”的展现模式： -->
      <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
      <section class="news_w"> 
          <header>
            <h2><div><span class="zh"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span><span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span></div></h2>   
          </header>   
          <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more">more</a>
          <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
          <article class="clearfix">
              <div class="img_w"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"/></div>
              <div class="news">
                <header><h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3></header>
                <div class="txt"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
                <time datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
" pubdate="pubdate"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
</time>
              </div>            
          </article>
          <?php if ($_smarty_tpl->tpl_vars['article']->index+1==2) {?><?php break 1?><?php }?>
        <?php } ?>        
      </section>
      <?php }?>

    <!-- 仅输出类型为 4单页内容 的栏目（关于我们、联系我们） -->
    <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
    <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
      <section class="about_w">
        <div class="about clearfix">
          <div class="img_w"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['mIndexCat']->value['name']);?>
"/></div>
          <div class="txt"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
          <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more">more</a>
        </div>
      </section>
    <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==2) {?>
    <section class="contact_w">
       <header>
        <h2><div><span class="zh"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span><span class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span></div></h2>   
      </header> 
      <div class="contact">
        <div class="mss">
          <p class="addres">地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
</p>
          <p>电话：<?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</p>
          <p>传真：<?php echo $_smarty_tpl->tpl_vars['contact']->value['fax'];?>
 </p>
          <p>投诉：<?php echo $_smarty_tpl->tpl_vars['contact']->value['mail'];?>
</p>          
        </div>
        <div class="img_w"><img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us']['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['global']->value['contact_us']['title']);?>
"></div>
      </div>
    </section>
    <?php }?>
    <?php }?>
    <?php } ?> 
    
    <div class="to_top" id="to_top"><a href="javascript:;"></a></div>
    <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>

</div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html><?php }} ?>
