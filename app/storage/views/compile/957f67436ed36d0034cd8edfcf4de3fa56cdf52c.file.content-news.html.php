<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 06:57:01
         compiled from "D:\Unify\app\views\templates\GP0003\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:2631056497e3d396ee9-99604437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '957f67436ed36d0034cd8edfcf4de3fa56cdf52c' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0003\\content-news.html',
      1 => 1447061059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2631056497e3d396ee9-99604437',
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
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56497e3d90c859_15331004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56497e3d90c859_15331004')) {function content_56497e3d90c859_15331004($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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

</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
	<div class="wrap clearfix">
		<div class="content">
			<div class="con_top">
				<div class="con_top_inner clearfix">
				<h4><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
</span></h4>
				<p class="position">当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
					<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
					- <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
    				<?php } ?>
				</p>
				<div class="clear"></div>
				</div>
			</div>
			<div class="article">
				<div class="content_news">
					<div class="article">
						<h3 class="article_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
						<p class="detail">类别：<span class="fenlei"><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</span>发布日期：<span class="date"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span>浏览次数：<span><?php echo $_smarty_tpl->tpl_vars['article']->value['viewcount'];?>
</span></p>
						<div class="article_con clearfix ">
							<div class="txt">
							<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

							</div>
							<!-- Baidu Button BEGIN -->
							<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>
			
							<!-- Baidu Button END -->
							
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

		<?php echo $_smarty_tpl->getSubTemplate ('./_side.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

	</div>
	
	<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/unslider.min.js"></script>
<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/demo.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


</body>
</html><?php }} ?>
