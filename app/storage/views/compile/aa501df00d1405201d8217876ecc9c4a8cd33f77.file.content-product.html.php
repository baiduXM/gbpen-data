<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:39:00
         compiled from "D:\unify\app\views\templates\GP0004\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:6425564046d07147e5-14276041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa501df00d1405201d8217876ecc9c4a8cd33f77' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0004\\content-product.html',
      1 => 1447062379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6425564046d07147e5-14276041',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564046d0a30294_12676730',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'posnavs' => 0,
    'article' => 0,
    'image' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564046d0a30294_12676730')) {function content_564046d0a30294_12676730($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<script type="text/javascript">
	// 跳转手机页面
	<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
	if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
	    location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
	} <?php }?>
</script>

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />

<link rel="stylesheet" rev="stylesheet" href="http://chanpin.xm12t.com.cn/css/global.css" type="text/css" />

<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />

</head>
<!-- 关于我们 -->
<body>
  <!-- fixed_nav layer start -->
  <?php echo $_smarty_tpl->getSubTemplate ('./fixed_nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
  <!-- fixed layer end -->
	<div class="wrap">
		<div class="wrap_inner">
		<?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<div class="main">
			<h2><span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
</span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</h2>
			<div class="con">
				<div class="content_pro clearfix">
					<div class="con_wrap clearfix">

						<div class="slid_wrap">
						<div class="img_wrap"  id="img_wrap" >
							<ul class=" slides clearfix">
								<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
								<li><div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['image']->value['title']);?>
"  /></div></li>
								<?php } ?>
							</ul>
						</div>
						</div>
						<div class="img_txt"><?php echo preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES));?>
</div>
					</div>
					

					<!-- Baidu Button BEGIN -->
					<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>
			
					<!-- Baidu Button END -->
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
" class="pre">上一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
" class="nxt">下一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a>
			</div>

		</div>

		</div>

		<div class="top_blue"></div>
		<div class="bottom_blue"></div>
	</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/slid.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/fun.js" type="text/javascript"></script>	
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


</body>
</html><?php }} ?>
