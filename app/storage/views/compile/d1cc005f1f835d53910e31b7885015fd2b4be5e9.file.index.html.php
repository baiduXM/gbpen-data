<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 08:11:34
         compiled from "D:\unify\app\views\templates\GM0075\index.html" */ ?>
<?php /*%%SmartyHeaderCode:7832564449b6a6ad99-99432342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1cc005f1f835d53910e31b7885015fd2b4be5e9' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0075\\index.html',
      1 => 1447315747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7832564449b6a6ad99-99432342',
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
    'search_action' => 0,
    'navs' => 0,
    'lnav' => 0,
    'logo' => 0,
    'nav' => 0,
    'limit' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564449b6ea6fa0_39223194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564449b6ea6fa0_39223194')) {function content_564449b6ea6fa0_39223194($_smarty_tpl) {?><!DOCTYPE html>
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
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>

    <!-- index-search -->
    <div class="search-wrap">
      <div class="search-head">
        
       <h2>搜索</h2>
       <span id="search-back">返回</span>
       <i class="hicon2 iconfont" id="quickbar-showcats">&#xe603;</i>
                  
      </div>
      <div class="search-box">

        <div class="searchbox">
          <span class="sword">搜索:</span>
          <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" class="search">
            <input type="text" class="search-inp" value="请输入搜索关键字" />
            <button type="submit" class="search-btn"><i class="iconfont">&#xe741;</i></button>
          </form>
        </div>
        <div class="search-class">

              <span class="search-class-word">分类:</span>
              <ul class="search-result">
<!--                 <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li>
                <li><a href="">遗留下的残缺</a></li> -->
                     <!--        <?php  $_smarty_tpl->tpl_vars['lnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value[0]['childmenu'][]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lnav']->key => $_smarty_tpl->tpl_vars['lnav']->value) {
$_smarty_tpl->tpl_vars['lnav']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['lnav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['lnav']->value['name'];?>
</a></li>
                            <?php } ?> -->


              </ul>

 
        </div>
      </div>
    </div>
  





      <div class="index-wrap">
          <header>
               <div class="header">
                   <div class="headimg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/headerbg.jpg" alt=""></div>
            	     <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
                   <i class="hicon1 iconfont" id="search">&#xe741;</i>
                   <i class="hicon2 iconfont">&#xe603;</i>
               </div>
          </header>
          <div class="menu">
            <ul class="nav"><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(5, null, 0);?>
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
                          <div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['nav']->value['image'];?>
" alt="">
                            <span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</span>                    
                          </div>
                        </a>

                      </li>   
                      <?php if ($_smarty_tpl->tpl_vars['nav']->index>=$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>     
                    <?php } ?>             
              <li>
                <a href="">
                  <div> 
                    敬请期待···                 
                  </div>
                 
                </a>
              </li> 
            

            </ul>
            <div class="banner">
               <div id="slideBox" class="slideBox">
      <!--            <a href="javascript:void(0);" class="slide_left"></a>
                  <a href="javascript:void(0);" class="slide_right"></a>-->
                  <div class="hd">
                   <span class="next"></span>
                   <ul style="display:none"></ul>
                   <span class="prev"></span>
                  </div>
                  <div class="bd">
                      <ul>
                          <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                                  
                               <li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
"/></a></li> 
                          <?php } ?> 
          
                      </ul>
                  </div>
              
               </div>
               <script>

        
               </script>

              
            </div>
          </div>




          <section>

      <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
      <!-- 如果栏目类型是内容单页，输出此HTML代码块 -->
            <div class="index-edit">
              <div class="index-edit-tit">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/index-edit-tit.jpg" alt="">
                <h2><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</h2>
              </div>
              <div class="index-edit-nr">
               <?php echo $_smarty_tpl->tpl_vars['mIndexCats']->value[0]['description'];?>

                                                                         
              </div>
            </div>
      <?php }?>
      <?php } ?>


          </section>
           <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
        
        </div>

</body>
</html>
<?php }} ?>
