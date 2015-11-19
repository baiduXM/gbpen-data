<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:09:53
         compiled from "D:\unify\app\views\templates\GM0037\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25781564062e1348744-66214742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527ed13add578e22dcb2b8915e209fda720d664e' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0037\\index.html',
      1 => 1446794157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25781564062e1348744-66214742',
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
  'unifunc' => 'content_564062e179b203_66989333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564062e179b203_66989333')) {function content_564062e179b203_66989333($_smarty_tpl) {?><!DOCTYPE html>
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

      <header>
      	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"><div class="topnav" id="quickbar-showcats"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/topnav.png"></div></div>

            <div class="baner public-bg">
	<div id="slideBox" class="slideBox1">
    <div class="hd">
            <ul></ul>
      </div>
      <span class="next">&gt;</span>
      <span class="prev">&lt;</span>
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
	  
	  <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
	  <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?> 
     <!-- <div class="mainbox">
      <div class="abou-img"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
"></div>
      	  <div class="aboutbox">
           <h1 class="aboutboxtop"><div class="jx public-bg public-color1">1</div>
          <div class="right"><span class="more"><a href="#" class=" public-color1">more</a></span>
          <div class="wz public-bg"><span class="cn public-color1">关于我们</span><p class="en public-color1">Company profile</p></div>
          <div class="line public-bor"></div></div>
          </h1>
          <div class="aboutboxm"  onclick="javascript:window.location.href='news_detail.html'">
          福建振辉停车棚专业从事篷业技术工程研发、设计制作、安装及维护。 本公司拥有自主的生产基地和先进的加工生产设备。设计软件采用国际先进的MCAD、FSCAD、3D3S、及EASY软件，是具有国家钢结构施工资质及设计资质的企业。 振辉一直致力于新型产品的开发与研究。在建筑形式与设计形式与设计方法上不断创新。从材料采购、加工、制造到产品运输、现场、安装的全程都受到严格的质量控制...
          </div>

          </div>
      </div>-->
	  <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
      <div class="probox public-bg1">
      	
         <div class="proboxm">
         	<ul class="prolist clearfix">
			<?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
            	<li><div class="prolistb"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
" width="100%">
                    <dd class="title1"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</dd>
                    <dd class="text"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['description'];?>
</dd>
                </div></li>
				<?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==4) {?><?php break 1?><?php }?>
					<?php } ?>
               
            </ul>
         </div>
      </div>
	  <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
      <div class="probox newxbox">
      <div class="top-title public-bg public-color1"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
      	  <ul class="newslist">
		  <?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
             <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
'" class="public-bg1">
                <div class="date">
                    <div class="zy public-bg"><div class="xy"></div></div>
                </div>
                <div class="list">
                	<dt><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubdate'];?>
</dt>
                    <dd><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</dd>
                </div>
             </li>          
             <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==3) {?><?php break 1?><?php }?>
					<?php } ?>            

          </ul>
      </div>
	  <?php }?>
	    <?php } ?>
		</section>
        <footer class="foot public-bg public-color1"><div class="back-top" id="quickbar-backtotop"><a href="#">TOP</a></div><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>

</html>
<?php }} ?>
