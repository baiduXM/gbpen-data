<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 09:07:10
         compiled from "D:\unify\app\views\templates\GP0001\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:320625641b3be7cf361-25679800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282bf152e5c26c66bd25eb357ae4b56b9a593544' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0001\\list-imagetext.html',
      1 => 1447060669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320625641b3be7cf361-25679800',
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
    'list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5641b3beb14192_66307932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641b3beb14192_66307932')) {function content_5641b3beb14192_66307932($_smarty_tpl) {?><!DOCTYPE html>
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
	<div class="wrap case">
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
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<div class="news_row group">
					<div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"/></div>
					<div class="news_con">
						<h4><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h4>
						<span>[<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
]</span>
						<p class="txt"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p>
					</div>
				</div>
				<?php } ?>
				
				<!-- page[分页] -->
				<?php echo $_smarty_tpl->getSubTemplate ('./_page_normal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
				
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
