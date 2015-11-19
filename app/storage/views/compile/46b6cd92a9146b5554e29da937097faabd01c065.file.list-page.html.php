<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:33:43
         compiled from "D:\unify\app\views\templates\GP0004\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:2412856403a98a9db51-45585514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b6cd92a9146b5554e29da937097faabd01c065' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0004\\list-page.html',
      1 => 1447062379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2412856403a98a9db51-45585514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56403a98c26499_85581089',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'list' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403a98c26499_85581089')) {function content_56403a98c26499_85581089($_smarty_tpl) {?><!DOCTYPE html>
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
			<h2><span><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h2>
			<div class="con">
				<div class="about">
					<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>

				</div>
			</div>

		</div>

		</div>

		<div class="top_blue"></div>
		<div class="bottom_blue"></div>
	</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/fun.js" type="text/javascript"></script>	
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html><?php }} ?>
