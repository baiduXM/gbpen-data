<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:12:18
         compiled from "D:\Unify\app\views\templates\GP0001\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:3116756405a4663e799-11366888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4272be84506c096d4c8b3338d67af8d93fbbbd8' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0001\\content-news.html',
      1 => 1447061030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116756405a4663e799-11366888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405a46e1c9f9_74479828',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'pagenavs' => 0,
    'posnavs' => 0,
    '_pagenavs_sub3' => 0,
    'nav' => 0,
    'article' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405a46e1c9f9_74479828')) {function content_56405a46e1c9f9_74479828($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/globle.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/main.css">
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie.css">
<![endif]-->

</head>
<body>
	<div class="wrap case-detail">
		<?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

		<div class="main">
			<div class="top group">
				<div class="title"><?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
					<h2><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['en_name'];?>
<span class="orange"><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</span></h2>
					<?php } else { ?>
					<h2><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['en_name'];?>
<span class="orange"><?php echo $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['name'];?>
</span></h2>
					<?php }?>
				</div>
				<div class="position"><i class="iconfont">&#xe616;</i><p>您当前所在所在位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a>
				<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
	            &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
	            <?php } ?>
				</p></div>
			</div>
			<div class="con">
				<div class="article">
					<div class="article-title">
						<h4><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h4>			    
						<div>
							<span class="cat">分类：<?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</span>
							<span class="date">发布日期：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span>
							<span class="count">浏览次数：<?php echo $_smarty_tpl->tpl_vars['article']->value['viewcount'];?>
</span>
						</div>
					</div>
					<div class="content group">
						<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>


						<!-- Baidu Button BEGIN -->
						<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>
			
						<!-- Baidu Button END -->

					</div>
				</div>
				<div class="article-link">
					<a class="article-pre" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a>
					<a class="article-next" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a>
				</div>

				<div class="Recommend group">
					<div class="th group">
						<h3>推荐案例<span>Recommended</span></h3>
						<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['hot_news']['link'];?>
" class="more">more>></a>
					</div>
					<div class="bd">
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['hot_news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
	                    <div>
							<div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="207" width="310" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"/></div>
							<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
						</div>
	                    <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?> 
	                    <?php } ?>
					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 	
		</div>	

		<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.7.1.min.js"></script>

<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/tap.js"></script>
</body>
</html><?php }} ?>
