<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 02:10:48
         compiled from "D:\unify\app\views\templates\GM0005\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11396564000a8be4938-74904542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2253b2bcffdc5aeed15408bfdc9f5aca2d7a1a' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0005\\index.html',
      1 => 1446792900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11396564000a8be4938-74904542',
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
    'global' => 0,
    'slidepic' => 0,
    'navs' => 0,
    'nav' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564000a93a6324_52957778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564000a93a6324_52957778')) {function content_564000a93a6324_52957778($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
        	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="375px" height="70px"></div>
           <div class="menu2" id="quickbar-showcats"><a href="#"><span></span></a></div>      
        </div>                 
        <div class="baner">
	<div id="slideBox" class="slideBox">
    <div class="hd">
            <ul></ul>
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
" title="640*414" /></a></li>
			<?php } ?>
			
		</ul>
	</div>
	
			</div>
			
   </div>
<div class="menu">
            	<div class="nav">
               <div class="swiper-nav swiper-container">
                  <div class="swiper-wrapper">
				  <div class="swiper-slide">
                      		<div class="menubox allcolor">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><dd class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/home-icon.png" width="35px" /></dd>
                      		<dt class="title">本站首页</dt></a>
                            </div>
                       </div>      
				  
					 <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <div class="swiper-slide">
                      		<div class="menubox allcolor">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><dd class="icon"><p align="center";><?php echo $_smarty_tpl->tpl_vars['nav']->value['icon'];?>
</p></dd>
                      		<dt class="title"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</dt></a>
                            </div>
                       </div>                    
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
		<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
		<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
        	<div class="trainees">
            	<div class="xy-titles">
                	<div class="titlea"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</b></div>
                    <div class="morejiao"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+</a></div><div id="triangle-topleft"></div>
                </div>
                <div class="cplib">
                  <div class="left_contsent">
                  	<ul>
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    	<li>
                        	<div class="fencai"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><div class="fimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="149px" height="95px"></div><p class="titlefc"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</p>
                            </a>
                            </div>
                        </li>
						       <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
								<?php } ?>                                                 
                    </ul>
                </div>
                <div class="right_contsent">
                	<div class="fangkuai">
                    	<ul>
                        	<li><div class="bordert"></div></li>
                            <li><div class="bordert"></div></li>
                            <li><div class="bordert"></div></li>
                            <li><div class="bordert"></div></li>
                        </ul>
                    </div>
                </div>
                </div>
				
            </div>
			<?php }?>
			
			
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="project"><div class="zfx"><div class="bordert"></div></div>
            	<div class="pro_titles">
                	<div class="cent_pro"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                </div>
                <div class="birders"></div>
                <div class="tixing">
				
                    <div class="zfxa"><div class="bordert"></div></div>
                  <div class="zfxb"><div class="bordert"></div></div>
                <div class="dmbx"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
                <div class="titled"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                <div class="wpordls"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
				</a>
                </div>
					  <ul>
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    	 	<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                	<div class="parallelograma"><div class="nav<?php echo $_smarty_tpl->tpl_vars['article']->index+1;?>
"></div>
                       <div class="pr_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                       <div class="pr_word">
                       <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                       </div>
                    </div></a>
                    </li>
					<?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
					<?php } ?>
                    </ul>
                                                                                                
                </div>
                <div class="moress"><div class="gengduo"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">更多>></a></div></div>
                
            </div>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==2) {?>
            <div class="lecture">
            	<div class="xy-titles">
                	<div class="titlea"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</b></div>
                    <div class="morejiao"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+</a></div><div class="fangxing"></div>
                </div>  
                <div class="jiangzuo_dls">
                	<ul>
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    	<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                        	<div class="square">
                                <div class="zfxd"><div class="bordert"></div></div>
                                <div class="zfxe"><div class="bordert"></div></div>
                            </div>
                            <div class="serlist">
                            	<div class="new_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                            <div class="newsword"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
                            </div></a>
                        </li>
                    	    <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
							<?php } ?>                   
                    </ul>
                </div>          
            </div>
			<?php }?>
        </div>   
			
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
			<?php }?>
			<?php } ?>			
    </section>
    <footer class="foot" ><a class="back-top">∧</a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer></div>
</div>
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</div>

</body>
</html>
<?php }} ?>
