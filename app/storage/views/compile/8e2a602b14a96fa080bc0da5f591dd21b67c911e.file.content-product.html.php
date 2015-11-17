<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:04:33
         compiled from "D:\Unify\app\views\templates\GP0001\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:20669564188f10053f8-60842935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2a602b14a96fa080bc0da5f591dd21b67c911e' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0001\\content-product.html',
      1 => 1447061030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20669564188f10053f8-60842935',
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
    'pagenavs' => 0,
    'posnavs' => 0,
    '_pagenavs_sub3' => 0,
    'nav' => 0,
    'article' => 0,
    'image' => 0,
    'related' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564188f1804692_59632328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564188f1804692_59632328')) {function content_564188f1804692_59632328($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.7.1.min.js"></script>

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
						<div class="img_wrap">
						<div id="img_wrap" >
							<ul class="slides group">
								<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
								<li><div><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['image']->value['title']);?>
" /></div></li>
								<?php } ?>
							</ul>
						</div>
						</div>
						<div class="img_txt"><?php echo preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES));?>
</div>

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
				
				<div class="article_rank">
					<h5>相关阅读</h5>
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['article']->index+1==8) {?><?php break 1?><?php }?> 
                    <?php } ?>
				</div>
				
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 		
		</div>	

		<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>

<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/pagenavs_sub3.js'></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/slid.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/tap.js"></script>
</body>
</html><?php }} ?>
