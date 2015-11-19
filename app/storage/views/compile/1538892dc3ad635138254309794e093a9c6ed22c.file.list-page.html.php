<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 06:44:38
         compiled from "D:\unify\app\views\templates\GP0002\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:22235563fec967db086-00354577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1538892dc3ad635138254309794e093a9c6ed22c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0002\\list-page.html',
      1 => 1447060683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22235563fec967db086-00354577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fec96aae975_75880732',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'logo' => 0,
    'global' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fec96aae975_75880732')) {function content_563fec96aae975_75880732($_smarty_tpl) {?><!DOCTYPE html>
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/main.css">

</head>
<body style="display: none;">
	<div class="wrap">
		<div class="wrap_inner">
			<!-- header star -->
			<div class="header clearfix">
				<h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a></h1>
				<?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
			</div>
			<!-- header end -->

			<!-- main star -->
			<div class="main">
				<div class="m_b" >
					<img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['m_b']['image'];?>
" width="1042" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['global']->value['m_b']['title']);?>
"/>
				</div>
				<div class="r clearfix">
					<div class="side">
						<?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
					</div>
					<div class="con">
						<div class="con_top clearfix">
							<h4><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</h4>
							<p class="position">您所在的位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
								<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
								&gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
	            				<?php } ?>
							</p>
							<div class="clear"></div>
						</div>

						<div class="con_article">							
							<div class="article_con">
								<div class="about">
									<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>
	
	    						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main end -->

			<!-- footer start -->
			<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
			<!-- footer end -->
		</div>
	</div>
	<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.10.2.min.js'></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/demo.js"></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/stopExecutionOnTimeout.js?t=1'></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.velocity.min.js'></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'></script>
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html><?php }} ?>
