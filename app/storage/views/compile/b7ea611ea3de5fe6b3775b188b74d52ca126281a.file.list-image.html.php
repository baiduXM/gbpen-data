<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:21:19
         compiled from "D:\unify\app\views\templates\GM0072\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:2577756492f8feb4d52-59398425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ea611ea3de5fe6b3775b188b74d52ca126281a' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0072\\list-image.html',
      1 => 1447635119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2577756492f8feb4d52-59398425',
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
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56492f9029abc4_34943803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56492f9029abc4_34943803')) {function content_56492f9029abc4_34943803($_smarty_tpl) {?><!DOCTYPE html>
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

<div class="index-wrap">
<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section>
    	<div class="boxmain">
        	<h1 class="boxmain-top">
               <span class="more3 backb"><a href="javascript:window.history.back()">返回</a></span>
               <span class="more3" id="first">分类<span id="down"> ∧</span><span id="up"> ∨ </span></span>
               <div class="mind_title">
                <span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
               </div>
           </h1>
            <div class="hide-class">
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                  <dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></dl>
                <?php } ?>
          </div> 
<div class="boxmain-ny-m">
<div class="pros_showa">
  <ul>
   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                        <div><p><img  src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%"></p><span class="imgword"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</span></div>
                        </a>
                    </li>    
				<?php } ?>                                                                                                                                   
                                    
                 </ul>   
      <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
" class="cu">首页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
" >下一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
"  >尾页</a></div>         
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
