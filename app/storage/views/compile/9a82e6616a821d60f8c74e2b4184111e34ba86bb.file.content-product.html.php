<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:22:08
         compiled from "D:\unify\app\views\templates\GM0072\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:3215056492fc0ab0d00-15819815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a82e6616a821d60f8c74e2b4184111e34ba86bb' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0072\\content-product.html',
      1 => 1447635119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3215056492fc0ab0d00-15819815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'article' => 0,
    'image' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56492fc0d871b8_13111838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56492fc0d871b8_13111838')) {function content_56492fc0d871b8_13111838($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
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
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.5,user-scalable=no,minimal-ui">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />        
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no, email=no" name="format-detection">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<meta name="screen-orientation" content="portrait">
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/animate.css"> 
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
<h1 class="fixed-top"><span class="fixed-btn back"><a href="javascript:window.history.back()">返回</a></span> <div class="menulista" id="quickbar" ><a href="#" id="quickbar-navs-btn" ><div class="word">导航</div></a></div>
               <div class="mind_title">
                <span>关于我们</span>
               </div>
</h1>
<div class="index-wrap">
<section>
    <div class="index_show" style="margin:50px 15px 8px;">
<div class="d_titles">
<h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
<hl class="title2">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
  字体 : <span class="smalld">小</span> | <span class="middled">中</span> | <span class="bigd">大</span></hl>
</div>
<div class="ping">
                        	<div class="d_datu"><div id="slideBox" class="slideBox">
    <div class="hd">
            <ul></ul>
              </div>
	<div class="bd">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			<li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" /></a></li>
			<?php } ?>
		</ul>
	</div>
	
			</div></div><div class="pi_words2"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                        </div>
          <div class="box-m">
<div class="boxmain-m"> 

                <div class="edite" >
        2005年，厦门易尔通网络科技有限公司被百度授权建立了厦门地区“百度客户销售服务中心”，该服务中心为厦门地区的百度客户提供专业的服务。 
       2007年11月，百度正式授权易尔通为福建漳州、龙岩、莆田地区核心代理。2009年，易尔通网络科技有限公司拿到了泉州地区的代理权，至此，易尔通的服务已经覆盖整个闽南地区，成为百度闽南营销服务中心。
      目前我们的客户服务中心为厦门、泉州、漳州、龙岩、莆田及周边地区的百度客户在“咨询服务”、“开户服务”、“关键字管理”到“效果跟踪报告”方面提供服务。让客户充分体验产品加上专业的服务才能在网络推广中获得效益。
      同时根据厦门、漳州、龙岩、莆田地区客户对服务更 ... ...高质量的要求易尔通客户服务中心再推出“网站建设服务”、“网站优化服务”、“关键字效果分析服务”到“企业网络推广综合报告服务 ”一系列专业服务 ，保证让客户能从网络上获得最佳产品、品牌推广效果，让大量客户从网络中带来了前所未有的经济效益。
       2005年，厦门易尔通网络科技有限公司被百度授权建立了厦门地区“百度客户销售服务中心”，该服务中心为厦门地区的百度客户提供专业的服务。 
       2007年11月，百度正式授权易尔通为福建漳州、龙岩、莆田地区核心代理。2009年，易尔通网络科技有限公司拿到了泉州地区的代理权，至此，易尔通的服务已经覆盖整个闽南地区，成为百度闽南营销服务中心。
      目前我们的客户服务中心为厦门、泉州、漳州、龙岩、莆田及周边地区的百度客户在“咨询服务”、“开户服务”、“关键字管理”到“效果跟踪报告”方面提供服务。让客户充分体验产品加上专业的服务才能在网络推广中获得效益。
      同时根据厦门、漳州、龙岩、莆田地区客户对服务更 ... ...高质量的要求易尔通客户服务中心再推出“网站建设服务”、“网站优化服务”、“关键字效果分析服务”到“企业网络推广综合报告服务 ”一系列专业服务 ，保证让客户能从网络上获得最佳产品、品牌推广效果，让大量客户从网络中带来了前所未有的经济效益。
       2005年，厦门易尔通网络科技有限公司被百度授权建立了厦门地区“百度客户销售服务中心”，该服务中心为厦门地区的百度客户提供专业的服务。 
       2007年11月，百度正式授权易尔通为福建漳州、龙岩、莆田地区核心代理。2009年，易尔通网络科技有限公司拿到了泉州地区的代理权，至此，易尔通的服务已经覆盖整个闽南地区，成为百度闽南营销服务中心。保险。       
                </div>   
            <ul class="inner_pages">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
 ">上一篇:<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
 </a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
 ">上一篇:<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
 </a></li>
            </ul>                        
            </div>
          </div>
       </div>
    </section>

        <footer class="foot"><a class="back-top"><span>TOP</span></a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 </footer>
        
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
        
    </div>

</body>
</html>
<?php }} ?>
