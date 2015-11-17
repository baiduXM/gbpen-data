<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:14:06
         compiled from "D:\Unify\app\views\templates\GM0018\index.html" */ ?>
<?php /*%%SmartyHeaderCode:18350564152ee7d3dd1-77671904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a763b23dccebf4bc35990179d2a1077d90381e' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0018\\index.html',
      1 => 1446631369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18350564152ee7d3dd1-77671904',
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
    'logo' => 0,
    'navs' => 0,
    'nav_list' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564152ef3600f0_63651400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564152ef3600f0_63651400')) {function content_564152ef3600f0_63651400($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>﻿<!DOCTYPE html>
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
  <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
  <div class="body">
    <div class="wrap page-active">
      <div class="index-wrap">
        <header>
          <div class="header">
            <div class="logo">
              <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="triedls">
              <div class="toppic"></div>
            </div>
          </div>
          <div class="bannmenu">
            <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="menu">
              <div class="swiper-nav swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="menulist" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'">
                      <dl>
                        <a href="#">首页</a>
                      </dl>
                    </div>
                  </div>
                  <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['nav_list']->index++;
?>
                  
                  <div class="swiper-slide">
                    <div class="menulist" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
'">
                      <dl>
                        <a href="#"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
                      </dl>
                    </div>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['nav_list']->index+1==4) {?><?php break 1?><?php }?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </header>
        <section>
          <div class="boxmain">
            
          <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
          
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
            
            <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="gywm_edit">
              <div class="about_titles">
                <a  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
                  <div class="imgast">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%"></div>
                  <div class="gy_title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                  <div class="chankan">点击查看</div>
                </a>
              </div>
              <div class="box-abouts">
                <div class="a_edit"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
              </div>
            </div>
            <?php }?>
          
          <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
          <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="prod_d">
              <div class="pro_titles">
                <div class="p_titles"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</a></div>
              </div>
              <div class="goodfood"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
              <div class="pros_show">
                <div id="picScroll" class="picScroll">
                  <div class="bd">
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                      <?php if (($_smarty_tpl->tpl_vars['article']->index)%3==0) {?>
                    <ul>
                      <?php }?>
                      <li>
                        <a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                          <div class="prsilimg">
                            <div class="imgborder">
                              <img _src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" />
                            </div>
                            <div class="pri_titles"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                          </div>
                        </a>
                      </li>
                      <?php if (($_smarty_tpl->tpl_vars['article']->index+1)%3==0) {?>
                    </ul>
                    <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['article']->index+1==9) {?><?php break 1?><?php }?>
                    <?php } ?>
                  </div>
                  <div class="hd">
                    <span class="next"></span>
                    <ul></ul>
                    <span class="prev"></span>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
              
              <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
              <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="news_zixun">
              <div class="new_tbg">
                <div id="triangle-down"></div>
                <div class="newsimg">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%"></div>
                <div class="newsmid">
                  <div class="news_word"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</a></div>
                </div>

              </div>
              <div class="indexnews_list">
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
                      <div class="xwzs_show">
                        <div class="nst_infor">
                          <div class="ndata"> <b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%d');?>
</b>
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m');?>

                          </div>
                        </div>
                        <div class="news_wprd">
                          <div class="ntitle"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                          <div class="nword"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
                        </div>
                      </div>
                    </a>
                  </li>
				  <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <?php }?>
              <?php }?>
              <?php } ?>
          </div>
        </section>
        <footer class="foot">
          <div class="fobdi">
            <div class="fobdi">
              <div class="fanhui">
                <a class="back-top">回到头部</a>
              </div>
            </div>
          </div>
          <div class="dibu"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
        </footer>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>

</body>
</html><?php }} ?>
