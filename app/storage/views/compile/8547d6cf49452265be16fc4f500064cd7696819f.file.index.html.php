<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:09:08
         compiled from "D:\unify\app\views\templates\GM0022\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11353564062b4216aa4-50254031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8547d6cf49452265be16fc4f500064cd7696819f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0022\\index.html',
      1 => 1446793916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11353564062b4216aa4-50254031',
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
  'unifunc' => 'content_564062b470f612_96736877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564062b470f612_96736877')) {function content_564062b470f612_96736877($_smarty_tpl) {?><!DOCTYPE html>
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
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper.3dflow-2.0.js"></script>
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
 <div class="index-wrap public_bg1">  
<header>
    <div class="baner">
          	<div class="logo logo-ny"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
	<div id="slideBox" class="slideBox1">
    <div class="hd">
            <ul></ul>
      </div>
      <span class="next public_color">&gt;</span>
      <span class="prev public_color">&lt;</span>
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
	
			</div>
			
   </div>

      </header>
   <section>
   
   <div class="content">
   <div class="q"></div><div class="x"></div>
   
   
   <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
   <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
        <div class="mainbox clearfix">
        <div class="innerbox">
          <div class="box_top clearfix">
            <div class="text public_color public_bor"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div><div class="text_en public_color1 public_bg"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
            <div class="text_bottom clearfix"><div class="ico">>>></div><div class="number public_color1 public_bg"></div></div>
          </div>
          <div class="rightbox">
          <div class="aboutbox">
            <div class="about_img "><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
"></div>
            <div class="aboutboxm public_color public_bor"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
          </div>
        </div></div></div>
		
		<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
        <div class="newxbox mainbox">
        <div class="innerbox">
          <div class="box_top clearfix">
            <div class="text public_color public_bor"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div><div class="text_en public_color1 public_bg"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
            <div class="text_bottom clearfix"><div class="ico">>>></div><div class="number public_color1 public_bg"></div></div>
          </div>
          <div class="rightbox">
          <ul class="news-list2">
		  <?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
                     <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'" class="clearfix" >
                    <a href="#" class="public_color clearfix public_bor ">
                      <span class="public_bg public_color1">+</span><b><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</b>
                    </a></li>
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==3) {?><?php break 1?><?php }?>
					<?php } ?>

          </ul></div>
          </div></div>
		  <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
        <div class="probox mainbox">
          <div class="innerbox">

          <div class="box_top clearfix">
            <div class="text public_color public_bor"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div><div class="text_en public_color1 public_bg"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
            <div class="text_bottom clearfix"><div class="ico">>>></div><div class="number public_color1 public_bg"></div></div>
          </div>
            <div class="rightbox rightbox1">
          <div class="proboxm ">
            <ul class="prolist clearfix">
			<?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
              <li>
                <div class="prolistb"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'"> <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
" width="100%" title="265*265">
                  <dd class="title1 public_color public_bg1"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</dd>
                </div>
              </li>
			  <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==4) {?><?php break 1?><?php }?>
					<?php } ?>
            </ul>
          </div>
        </div>
        </div>
        </div>
		<?php }?>
		<?php } ?>
      </section>
            <footer class="foot public_bg">
        <div class="back-top public_bg" id="quickbar-backtotop"><A href="#" class="public_color1">TOP</A></div>
        <div class="text"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
      </footer>
      </div>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
