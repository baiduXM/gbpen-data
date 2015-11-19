<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 08:46:43
         compiled from "D:\unify\app\views\templates\GM0078\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:19118564997f31eedd6-93444877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc298d74cb7ef457656aa3a034430e87afd30af0' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0078\\list-image.html',
      1 => 1447636512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19118564997f31eedd6-93444877',
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
    'article' => 0,
    'page_links' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564997f3466dd8_11546195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564997f3466dd8_11546195')) {function content_564997f3466dd8_11546195($_smarty_tpl) {?><!DOCTYPE html>
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
css/swiper.css">

<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
	window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
</head>
<body>
<div class="className p_r"><span class="type">分类↑</span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>


         <i class="iconfont demo-icon icon-th-list slide-nav iconnav p_a">&#xe603;</i>
</div>
   <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


   <div class="aboutms info">

          <!--   <div class="font">字体： <span class="d">大</span> | <span class="z">中</span> | <span class="x">小</span></div> -->
           <div class="infos pro">
           	<ul class="pic_lm">
           	 <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
							<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'"><figure><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt=""></figure>
                                 <figcaption><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</figcaption> 
							</a></li>
							
							<?php if ($_smarty_tpl->tpl_vars['article']->index+1==9) {?><?php break 1?><?php }?>
                        <?php } ?>    
						</ul>



                     <div class="num"><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
" class="cu">首页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
" >下一页</a><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
"  >尾页</a></div>  
           </div> 
        </div> 
					
				  
					
				

			<div class="name"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
<!-- <i class="demo-icon icon-angle-circled-up">&#xe801;</i> --></div>
		
			
		</div>
	
		<div class="shadow p_a"></div>
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
</body>
</html>
<?php }} ?>
