<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 09:16:05
         compiled from "D:\unify\app\views\templates\GM0079\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2355956499ed55d96e9-22653005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c858a60666fc0253d3d28e84c9a3b7cbc7ecb1c0' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0079\\index.html',
      1 => 1447665260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355956499ed55d96e9-22653005',
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
    'headscript' => 0,
    'search_action' => 0,
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
  'unifunc' => 'content_56499ed5b3bcf5_89193698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56499ed5b3bcf5_89193698')) {function content_56499ed5b3bcf5_89193698($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
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
css/animate.css" rel="stylesheet" type="text/css" />
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
    <div class="index-wrap">
         <div class="class">
  <h1 class="class-top"><span class="class-close">×</span>快速搜索</h1>
  <div class="class-m">
  <div class="swiper-container scroll-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
                        	<div class="search_all">
                    	<form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                 	<div class="suosuo">
                       
                           <div class="ss_input"><input type="text" name="s" value=""  class="txt1"></div>
                             <div class="ss_btn"><input type="submit" class="btn1" value="搜索"> </div>
                          
                                                  
                    </div>  </form>                          
                            </div>
  	
    </div></div></div>
  </div>
</div>        
         <div class="headerbanner">
               <div class="header_l">      
              <div class="logo_l"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>     		
                <div class="menu2"  id="quickbar" ><a href="#" id="quickbar-navs-btn"><span></span></a></div> 
                <div class="search" id="daohang">
                  <a href="#"><span></span></a>
                </div>    
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
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
                        <?php } ?>
                </ul>
            </div>
            </div>
            
  	   </div>                   
    </div>
         <div class="menu">
                    <div class="nav">
                   <div class="swiper-nav swiper-container">
<div class="swiper-wrapper">
                   <div class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.html"><i><span>网站首页</span></i></a></div>
                        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                    <div class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><i><span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</span></i></a></div>
                          
                        <?php } ?>                                  
                    </div>
                    </div>
                    </div>
           </div>
         <section>
         <div class="indexbg_al">
           <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
               <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?> 
                	<div class="picture2">
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                       <li onclick="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><div>
                        <p class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" /></p>
                        <dl class=" title1">
                        <dd class="china"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dd>
                        </dl></div>
                       </li>  
                       <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?> 
                        <?php } ?> 
                      
          		   </ul>     
                     <div class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">点击查看更多产品</a>             </div>
                     </div>  
              <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?> 
				<div class="news">
					<ul>
                          <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
						<li><a href="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%y');?>
.<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%m');?>
.<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%d');?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                         <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>
                        <?php } ?>
					</ul>
					<div class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">点击查看更多产品</a>             </div>
				</div> 
               <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>   
<div class="about">
				    <div class="aboutdatel">
					    <div class="leftaimg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" alt=""></div>
						<div class="right_edit"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
					</div>
					
					<div class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">点击查看更多内容</a>             </div>
				</div>                                  
               <?php }?>
           <?php } ?>                     	
         </div>
         </section>
<div class="foot">
 <div class="top">∧</div><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 
</div>         
   </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  
</body>
</html>
<?php }} ?>
