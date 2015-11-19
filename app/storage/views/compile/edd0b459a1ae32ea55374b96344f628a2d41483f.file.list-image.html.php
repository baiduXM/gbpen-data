<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 02:24:23
         compiled from "D:\unify\app\views\templates\GP0003\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:25711564a8fd7e4f030-70538193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edd0b459a1ae32ea55374b96344f628a2d41483f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0003\\list-image.html',
      1 => 1447060949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25711564a8fd7e4f030-70538193',
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
    'list' => 0,
    'article' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564a8fd81ab989_58764848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a8fd81ab989_58764848')) {function content_564a8fd81ab989_58764848($_smarty_tpl) {?><!DOCTYPE html>
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
				<div class="list_img">
					<ul class="clearfix">
					
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
					<li>
						<div class="img_wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"/></div>
						<div class="title">
							<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><h6><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h6>
							</a>
						</div>
					</li>
					<?php } ?>
					
					</ul>
				
					<!-- page[分页] -->
					<?php echo $_smarty_tpl->getSubTemplate ('./_page_normal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
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
