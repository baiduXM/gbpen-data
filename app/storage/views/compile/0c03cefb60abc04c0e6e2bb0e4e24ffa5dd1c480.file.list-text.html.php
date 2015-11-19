<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 07:43:35
         compiled from "D:\unify\app\views\templates\GP0004\list-text.html" */ ?>
<?php /*%%SmartyHeaderCode:2198456404ea76ae373-60832844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c03cefb60abc04c0e6e2bb0e4e24ffa5dd1c480' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0004\\list-text.html',
      1 => 1446793143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2198456404ea76ae373-60832844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'list' => 0,
    'article' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56404ea78892f6_07656646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56404ea78892f6_07656646')) {function content_56404ea78892f6_07656646($_smarty_tpl) {?><!DOCTYPE html>
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
				<div class="list_txt">
					<ul class="list">
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
						<li class="clearfix">
							<h3><a  href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
							<p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p>
						</li>
						<?php } ?>										
					</ul>
					<?php echo $_smarty_tpl->getSubTemplate ('./_page_normal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
