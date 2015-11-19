<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:50:59
         compiled from "D:\unify\app\views\templates\GM0050\index.html" */ ?>
<?php /*%%SmartyHeaderCode:45556415b93b23292-33222280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452fd8491f6f524ddeb72edc90a5afcd0ef52445' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0050\\index.html',
      1 => 1446794348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45556415b93b23292-33222280',
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
    'navs' => 0,
    'nav' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mi' => 0,
    'mIndexCat_data' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56415b94393f71_87165879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56415b94393f71_87165879')) {function content_56415b94393f71_87165879($_smarty_tpl) {?><!DOCTYPE html>
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
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>

	<div class="top">
	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></div>
	<!--<div class="daohang"><a href="#"><img src="images/nav.png"></a></div>-->
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
" /></a></li>
			<?php } ?>
		</ul>
	</div>
	 </div>
   </div>
    <div class="bottom"><div class="middle"></div></div>
	</div>
       
		
    <div class="main public_bg">  
			<div class="box-nav clearfix">
           <ul class="clearfix">
		   <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
		    <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==1) {?>
		    <li class="one"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
		    <?php } elseif ($_smarty_tpl->tpl_vars['nav']->index+1==2) {?>
		    <li class="two"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
 </a></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['nav']->index+1==3) {?>
			<li class="three"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['nav']->index+1==4) {?>
			<li class="four"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['nav']->index+1==5) {?>
			<li class="five"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
 </a></li>
			<?php }?>
			<?php } ?>
		   </ul>
        </div> 
		
	<?php $_smarty_tpl->tpl_vars['mi'] = new Smarty_variable(1, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
  <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
        <div class="box-about">
            <h2>
			<div class="num"><?php echo $_smarty_tpl->tpl_vars['mi']->value++;?>
</div>
			<div class="word"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
			<div class="English"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
			</h2>
			
			<div class="inner"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">
			<div class="text" >
			<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
			<div class="bottom"></div></a>
			</div>
			
			<div class="picture animation2"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
"></div>
			</div>
			
	<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
		<div class="box-product">
            <h2>
			<div class="num"><?php echo $_smarty_tpl->tpl_vars['mi']->value++;?>
</div>
			<div class="word"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
			<div class="English"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
			</h2>
			
			<div class="inner">
		  <ul class="clearfix animation1">
		  <?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
		    <?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==1) {?>
			<li class="one"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" height="108vw"></a></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==2) {?>
			<li class="two"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" height="108vw"></a></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==3) {?>
			<li class="three"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" height="108vw"></a></li>
			<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==4) {?>
			<li class="four"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" height="108vw"></a></li>
		    <?php }?>
		  <?php } ?>
		</ul>
			</div>
   		 </div>
	 <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
	    <div class="box-news">
            <h2>
			<div class="num"><?php echo $_smarty_tpl->tpl_vars['mi']->value++;?>
</div>
			<div class="word"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
			<div class="English"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
			</h2>
			
			<div class="inner">
		  <ul class="clearfix">
		  <?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
		<li>
		<div class="prolistb"  onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
'">
		<div class="circle "><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" class="animation3" height="77vw"></div>
		<div class="bottom">
		<h2><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</h2><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['description'];?>
 </div>
		</div>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==3) {?><?php break 1?><?php }?>
					<?php } ?>
		
		</ul>
			</div>
    </div>
	<?php }?>
	  <?php } ?>
	  </div>
    <div class="foot">
    	<div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>
   		<div class="text"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
   </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
