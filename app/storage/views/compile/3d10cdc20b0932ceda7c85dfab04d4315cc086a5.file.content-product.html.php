<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:55:11
         compiled from "D:\unify\app\views\templates\GM0054\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:21559563feeef37cff9-08538388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d10cdc20b0932ceda7c85dfab04d4315cc086a5' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0054\\content-product.html',
      1 => 1446794404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21559563feeef37cff9-08538388',
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
    'article' => 0,
    'image' => 0,
    'related' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563feeef64e5d0_15986574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563feeef64e5d0_15986574')) {function content_563feeef64e5d0_15986574($_smarty_tpl) {?><!DOCTYPE html>
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
css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 
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

</head>

<body>


<h1 class="boxmain-top fixed-top"><span class="back"><a href="javascript:window.history.back()">返回</a></span><span class="more2" id="font">字+</span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>
<div class="font fix-font">
      <dl class="big">大</dl>
      <dl class="normal">中</dl>
      <dl class="small">小</dl>
  </div>

    <section>
    	<div class="boxmain ny-wrap">
        	<div class="bigimgbox">
            	<div class=" bigimg">
                	<div id="slideBox" class="slideBox">
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
			<li><a class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" /></a></li>
			<?php } ?>
		</ul>
	</div>
	
			</div>
			
                </div>
                <dt class="bigimgtitle"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
            </div>	
            <div class="prodetail">
            	<h1 class="title2">产品详情：</h1>
                <div class="edite" style="border-bottom:1px solid #bababa">     <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div>
                <div class="next1"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一个</a><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一个</a></div>
            </div>
        </div>
        <div class="boxmain relate">
        	<h1 class="boxmain-top relate-top">相关产品</h1>
            <div class="relate-m" style="height:116px; overflow:hidden;">
            	<div class="swiper-container thumbs-cotnainer">
		<div class="swiper-wrapper">
		<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
			<div class="swiper-slide">
				<div class="related-list1"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="176" height="176"><dt><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt></a></div>
			</div>
			<?php } ?>
            
		</div>
	</div>
            </div>
        </div>
        	
    </section>
    <footer class="foot"><div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>版权所有：<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


</body>
</html>
<?php }} ?>
