<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 10:06:33
         compiled from "D:\unify\app\views\templates\GM0061\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28052564afc299d5541-82698871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264524d8352743fa21c2d4eaf7237c77dce12b8b' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0061\\index.html',
      1 => 1447752937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28052564afc299d5541-82698871',
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
    'navs' => 0,
    'nav' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564afc2a4b4a09_66097900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564afc2a4b4a09_66097900')) {function content_564afc2a4b4a09_66097900($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
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

<!-- <div class="index-wrap"> -->
    <header>
      <div class="top"><div class="menubg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/menubg.jpg" width="100%"></div>
        <div class="header">
          <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
        </div>
        <div class="daohlist">
           <div class="menu">
              <div class="nav">
                 <div class="swiper-nav swiper-container">
                    <div class="swiper-wrapper">
                    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>

                      <div class="swiper-slide">
                          <div class="menubox allcolor">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
">
                              <dd class="icon"><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</dd>
                              <dt class="title"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</dt>
                            </a>
                          </div>
                      </div>
                        <?php if ($_smarty_tpl->tpl_vars['nav']->index+1>4) {?><?php break 1?><?php }?>
                    <?php } ?>
                                        
                  </div>
          </div>
            </div>
          </div>           
        </div>
      </div>
    </header>
      <section>
      <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
      <!-- 如果栏目类型是文字列表，输出此HTML代码块 -->
        <div class="turist">
          <div class="coust_titlesb">
            <a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
              <span class="mores">更多</span><div class="keftitleb"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>     
            </a>   

          </div>
          <div class="news-list">
            <ul>
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                <dl><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                           
                            	
                                <div class="news_titles">
                                  <div class="c_edits" style="color:#429FD9;"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>             
                                  <div class="ndate"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>                   
                                </div>
                           
                            </a>
                        </dl>
				<?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>		
              <?php } ?>
                                                                
            </ul>
          </div>        
        </div>   


      <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
      <!-- 如果栏目类型是图片列表，输出此HTML代码块 -->
        <div class="prod">
          <div class="coust_titles">
            <a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
              <span class="mores">更多</span><div class="keftitle"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>     
            </a>   
          </div>

          <div class="pros_show">
            <div id="picScroll" class="picScroll">        
              <div class="bd">
                  <ul>

                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                      <li>
                        <a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                          <div class="showi">
                            <div class="prsilimg">
                              <img _src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" />
                              <div class="pings"> <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                            </div>
                            <div class="pri_titles"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
                          </div>
                        </a>
                      </li>      
					<?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>					  
                    <?php } ?>

                                                                           
                                  
                  <ul>                                                                                          


              </div>
              <div class="hd">
                  <span class="next"></span>
                  <ul></ul>
                  <span class="prev"></span>
              </div>                
            </div>
                   
          </div> 
        </div>   


      <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
      <!-- 如果栏目类型是图文列表，输出此HTML代码块 -->
      <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
      <!-- 如果栏目类型是内容单页，输出此HTML代码块 -->
      <?php }?>
      <?php } ?>









      </section>
  <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
<!-- </div> -->
</body>
</html>
<?php }} ?>
