<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:34:05
         compiled from "D:\unify\app\views\templates\GP0004\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:459456403a702ff288-75950734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce440a6b3caacebfc9a057788f07f2c0215e5fd' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0004\\list-image.html',
      1 => 1447062379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459456403a702ff288-75950734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56403a70570da9_77648309',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'list' => 0,
    'article' => 0,
    'limit' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403a70570da9_77648309')) {function content_56403a70570da9_77648309($_smarty_tpl) {?><!DOCTYPE html>
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
				<div class="list_imagetext clearfix">
					<ul class="img_li clearfix">
						<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(12, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
						<li>							
							<div class="img_wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"></div>
							<div class="img_title">
								<h5><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h5>
								<div class="txt"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
								<div class="readmore"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">+</a></div>
							</div>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['article']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
						<?php } ?>								
					</ul>

					
				</div>
				<?php echo $_smarty_tpl->getSubTemplate ('./_page_normal.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
