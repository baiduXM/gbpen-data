<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:13:02
         compiled from "D:\Unify\app\views\templates\GM0016\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19120564152ae1093e8-34628195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e436592c95dd542963afe2f846eb0f4a7af6aa4' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0016\\index.html',
      1 => 1446110981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19120564152ae1093e8-34628195',
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
    'navs' => 0,
    'nav' => 0,
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mIndexCat_list' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564152aecdb090_01631323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564152aecdb090_01631323')) {function content_564152aecdb090_01631323($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
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

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
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
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
<div class="index-wrap">
      <header class="indextop public-bg">
      	<div class="indextl">
        <div class="top-y"><div class="top-img"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/6.png"></div><div class="top-by"></div></div>
            <div class="indexmenu">
            	<div class="swiper-container scroll-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
                        	<ul>
                            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></li>
								<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
								<?php } ?> 
                                
                            </ul>
    					</div></div></div>
            </div>
        </div>
        <div class="indextr">
                	<div class="indexlogo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></div>
        	<div class="indextr-box" id="slideBox">
            	<div class="slideBox">
		<div class="bd">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
			<li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" /></a></li>
			<?php } ?>
			
		</ul>
		</div>
        <div class="hd indextr-boxbtn">
    			<ul></ul>
           		<span class="next">&gt;</span>
                <span class="prev">&lt;</span>
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
	  <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
      <div class="mainbox">
      	  <div class="aboutbox">
      	  <h1 class="aboutboxtop"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+</a></span><span class="cn"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span><p class="en public-bor"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</p></h1>
          <div class="aboutboxm"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>

		  </div>
<img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
">
          </div>
      </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
	  
      <div class="probox newxbox">
      	  <ul class="newslist">
		  <?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
		  
		  <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index%2==0) {?>
          	 <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'">
                <div class="list">
                    <div class="newsimg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
"></div>
                	<dt><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</dt>
                    <dd><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['description'];?>
</dd>
					</div>
                <div class="date">
                	<dd class="day"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubtimestamp'],"%m ");?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubtimestamp'],"%d ");?>
</dd>
                    <dd class="year public-bor"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubtimestamp'],"%y ");?>
</dd>
                </div>
             </li>
			 <?php } else { ?>
             <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'">
                <div class="date">
                	<dd class="day"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubtimestamp'],"%m ");?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubtimestamp'],"%d ");?>
</dd>
                    <dd class="year public-bor"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubtimestamp'],"%y ");?>
</dd>
                </div>
                <div class="list">
                <div class="newsimg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
"></div>
                	<dt><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</dt>
                    <dd><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['description'];?>
</dd>
                </div>
             </li>
			 <?php }?>
			 
          	 <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==2) {?><?php break 1?><?php }?>
					<?php } ?>
          </ul>
      </div>
	  
	<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
      <div class="probox">
      	 <h1 class="aboutboxtop"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+</a></span><span class="cn"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span><p class="en public-bor"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</p></h1>
         <div class="proboxm">
         	<ul class="prolist">
			<?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
            	<li><div class="prolistb"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'">
                	<div class="pro_img"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
" width="100%"></div>
                    <dd class="title1"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</dd>
                </div></li>
				<?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==6) {?><?php break 1?><?php }?>
					<?php } ?>
                
            </ul>
         </div>
      </div>
	  <?php }?>
	    <?php } ?>
		</section>
        <footer class="foot public-bg"><div class="back-top public-bg1" id="quickbar-backtotop"><A href="#">TOP</A></div><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>
        </div>
     <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>

</html>
<?php }} ?>
