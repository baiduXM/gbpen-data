<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 02:11:07
         compiled from "D:\unify\app\views\templates\GM0014\index.html" */ ?>
<?php /*%%SmartyHeaderCode:192755643f455eca008-33888656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83efbe7f8292a562a7e41a9928bc60b109ca1e3a' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0014\\index.html',
      1 => 1447294258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192755643f455eca008-33888656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5643f456640c80_11987523',
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
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'pro_num' => 0,
    'time' => 0,
    'f' => 0,
    'article' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643f456640c80_11987523')) {function content_5643f456640c80_11987523($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
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
<div class="body">

<div class="wrap page-active">
<div class="index-wrap">
	<?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section>
    	<div class="boxmain">
			<?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
        	<div class="dress">
            	<div class="index_title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
 </span></div>
                <div class="pros_show">
			<div id="picScroll" class="picScroll">				
				<div class="bd">
						<?php $_smarty_tpl->tpl_vars['pro_num'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['mIndexCat']->value['data']), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable($_smarty_tpl->tpl_vars['pro_num']->value/3, null, 0);?>
						<?php $_smarty_tpl->tpl_vars['f'] = new Smarty_variable(1, null, 0);?>
						<?php while ($_smarty_tpl->tpl_vars['time']->value>0) {?>
							<ul>
							<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
							<?php if ($_smarty_tpl->tpl_vars['article']->index<($_smarty_tpl->tpl_vars['f']->value-1)*3) {?><?php continue 1?><?php }?>
							<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'"><div class="prsilimg"><img _src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="117px" height="74px"/><div class="pri_titles"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div></div></a></li>
							<?php if ($_smarty_tpl->tpl_vars['article']->index+1==$_smarty_tpl->tpl_vars['f']->value*3) {?><?php break 1?><?php }?>
							<?php } ?>
							</ul>
						<?php $_smarty_tpl->tpl_vars['f'] = new Smarty_variable($_smarty_tpl->tpl_vars['f']->value+1, null, 0);?>
						<?php $_smarty_tpl->tpl_vars['time'] = new Smarty_variable($_smarty_tpl->tpl_vars['time']->value-1, null, 0);?>
						<?php }?>						


				</div>
<div class="hd">
						<span class="next"></span>
						<ul></ul>
						<span class="prev"></span>
				</div>                
			</div>        
            </div>
            </div> 
			
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
            <div class="dress">
               <div class="index_title"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
<span><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span></div>
               <div class="aboutshow">
<div class="box-about"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
                   <div class="aboutimgs"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="213px" height="136px"></div>
                   <div class="a_text"><div id="triangle-left"></div>
                   <div class="text">
					<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['mIndexCat']->value['description'], ENT_QUOTES);?>
 
					</div>
                   </div></a>
                </div>               
                </div>
            </div>  
			
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
			<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>
            <div class="dress">
               <div class="index_title"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</a><span><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span></div>
               <div class="news_d">
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
                    	<div class="xwzx-detal">                    	   
                           <div class="news_wprd">
                             <div class="ndate"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</div>
                             <div class="nword"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                           
                           </div>
                           <div class="newsimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="138px" height="50px"></div>
                        </div></a>
                    </li>   
					<?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
                	<?php } ?>
                                                                             
                 </ul>
               </div>
            </div>                
        </div>
		<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
		
		<?php }?>
		<?php } ?>		
    </section>
    <footer class="foot" ><a class="back-top">TOP</a><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer></div>
</div>
	<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

</body>
</html>
<?php }} ?>
