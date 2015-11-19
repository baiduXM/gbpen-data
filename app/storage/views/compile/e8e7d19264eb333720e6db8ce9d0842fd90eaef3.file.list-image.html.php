<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:19:13
         compiled from "D:\unify\app\views\templates\GP0002\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:25044563fec9dba4815-29455814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8e7d19264eb333720e6db8ce9d0842fd90eaef3' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0002\\list-image.html',
      1 => 1447060683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25044563fec9dba4815-29455814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fec9e1635a7_93255423',
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
    'article' => 0,
    'limit' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fec9e1635a7_93255423')) {function content_563fec9e1635a7_93255423($_smarty_tpl) {?><!DOCTYPE html>
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

						<div class="img_list clearfix">
							<ul>
								<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(12, null, 0);?>
								<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
										<div class="img_wrap"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="132" width="164" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"></div>
										<h6><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h6>
									</a>
								</li>
								<?php if ($_smarty_tpl->tpl_vars['article']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
								<?php } ?>								
							</ul>
						</div>

					    <!-- 分页链接 -->
						<ul class="page_normal">
							
							<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
<?php } else { ?>javascript:;<?php }?>">首页</a></li>
							<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']>1) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
<?php } else { ?>javascript:;<?php }?>">上一页</a></li>
							
							<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
								<li class="cur"><a><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
							<?php } else { ?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
							<?php }?>
							<?php } ?>
							
							<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
<?php } else { ?>javascript:;<?php }?>">下一页</a></li>
							<li><a href="<?php if ($_smarty_tpl->tpl_vars['page_links']->value['current_page']<$_smarty_tpl->tpl_vars['page_links']->value['page_count']) {?><?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
<?php } else { ?>javascript:;<?php }?>">末页</a></li>
							
						</ul>


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
