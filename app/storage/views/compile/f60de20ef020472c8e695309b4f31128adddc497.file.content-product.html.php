<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 06:45:29
         compiled from "D:\unify\app\views\templates\GP0002\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:8846563feca4b271d7-05132075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f60de20ef020472c8e695309b4f31128adddc497' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0002\\content-product.html',
      1 => 1447060683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8846563feca4b271d7-05132075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563feca500a9b8_60128318',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'logo' => 0,
    'global' => 0,
    'article' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'image' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563feca500a9b8_60128318')) {function content_563feca500a9b8_60128318($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
							<h4><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
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
								<div class="txt">
								<div id="demo01" class="flexslider">
								<ul class=" slides clearfix">
									<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
									<li><div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" height="214" width="309" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['image']->value['title']);?>
"  /></div></li>
									<?php } ?>
								</ul>
								</div>
								<article>
									<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

								</article>
								
								<!-- Baidu Button BEGIN -->
								<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>
			
								<!-- Baidu Button END -->
								</div>
							</div>
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
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/slid.js"></script>
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<!----><?php }} ?>
