<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:19:36
         compiled from "D:\unify\app\views\templates\GP0002\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16581563c6983819802-38901698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e004dcb557921ed012f8352e3efc9d4522eff7' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0002\\index.html',
      1 => 1447060683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16581563c6983819802-38901698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c6983ea5470_97061248',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'logo' => 0,
    'index' => 0,
    'article' => 0,
    'limit' => 0,
    'search_action' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c6983ea5470_97061248')) {function content_563c6983ea5470_97061248($_smarty_tpl) {?><!DOCTYPE html>
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
css/index.css">
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

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
				<div class="r1 clearfix">
					<div class="c1 c">
						<div class="advantage">
							<span class="brown_2">开拓</span>
							<span class="brown_2">创新</span>
							<span class="brown_y">专业制造</span>
						</div>
						<div class="intro">
							<h2 class="black"><?php echo $_smarty_tpl->tpl_vars['index']->value['intro']['name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['index']->value['intro']['en_name'];?>
</span></h2>
							<p><?php echo $_smarty_tpl->tpl_vars['index']->value['intro']['description'];?>
</p>
							<a class="more_btn" href="<?php echo $_smarty_tpl->tpl_vars['index']->value['intro']['link'];?>
">more</a>
						</div>
					</div>
					<div class="c2 c">
						<div class="link">
							<div class="shape">
								<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['nav1']['link'];?>
"><div class="culture">
									
									<?php echo $_smarty_tpl->tpl_vars['index']->value['nav1']['icon'];?>

									<h2><?php echo $_smarty_tpl->tpl_vars['index']->value['nav1']['name'];?>
</h2>
									<span><?php echo $_smarty_tpl->tpl_vars['index']->value['nav1']['en_name'];?>
</span>
								
									<span class="link_s_arrow">&gt;</span>
								</div></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['nav2']['link'];?>
"><div class="team">
									<?php echo $_smarty_tpl->tpl_vars['index']->value['nav2']['icon'];?>

									<h2><?php echo $_smarty_tpl->tpl_vars['index']->value['nav2']['name'];?>
</h2>
									<span><?php echo $_smarty_tpl->tpl_vars['index']->value['nav2']['en_name'];?>
</span>
									<span class="link_b_arrow">&gt;</span>
								</div></a>
								<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['nav3']['link'];?>
"><div class="join">
									<?php echo $_smarty_tpl->tpl_vars['index']->value['nav3']['icon'];?>

									<h2><?php echo $_smarty_tpl->tpl_vars['index']->value['nav3']['name'];?>
</h2>
									<span><?php echo $_smarty_tpl->tpl_vars['index']->value['nav3']['en_name'];?>
</span>
									<span class="link_s_arrow">&gt;</span>
								</div></a>
							</div>
							<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/shape_1.png" height="607" width="453" usemap="#shape"/>
							<map name="shape" class="shape">
								<area class="culture" shape="polygon" coords="0,130,134,45,134,470,0,390" href="<?php echo $_smarty_tpl->tpl_vars['index']->value['nav1']['link'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['index']->value['nav1']['name']);?>
"> 
								<area class="team" shape="polygon" coords="134,45,226.5,0,318,45,318,545,226.5,607,134,545" href="<?php echo $_smarty_tpl->tpl_vars['index']->value['nav2']['link'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['index']->value['nav2']['name']);?>
"> 
								<area class="join" shape="polygon" coords="318,470,453,390,453,130,318,45"  href="<?php echo $_smarty_tpl->tpl_vars['index']->value['nav3']['link'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['index']->value['nav3']['name']);?>
"> 
							</map>

						</div>
					</div>
					<div class="c3 c">
						<div class="news">
							<h2 class="white"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</span></h2>
							<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(2, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
							<div class="new_<?php echo $_smarty_tpl->tpl_vars['article']->index+1;?>
">
								<h6><a class="yellow" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h6>
								<p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p>
								<a class="more_arrow" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">更多</a>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['article']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
							<?php } ?>
						</div>

						<div class="search">
							<form id="form" class="fm" name="f" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" >
								<span class="s_ipt_w">
									<input type="text" placeholder="请输入关键字" name="s" id="">
								</span>
								<span class="s_btn_w">
									<input type="submit" name="" id="smt" class="gb_btn" value="搜索">
								</span>
							</form>
						</div>
					</div>
				</div>
				<div class="r2 clearfix">
				<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(3, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list1']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
					<div class="c">
						<a class="brown" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
							<div class="img_w">
								<img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"></img>
							</div>
							<h5><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h5>
							<span><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</span>
						</a>				
					</div>
				<?php if ($_smarty_tpl->tpl_vars['article']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
				<?php } ?>				
				</div>
			</div>
			<!-- main end -->
			
			<!-- footer start -->
			<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
			<!-- footer end -->
		</div>
		<!-- bg start -->
		<!-- <div class="t_l"></div>
		<div class="b_r"></div>
		<div class="t_r"></div> -->
		<!-- bg end -->
	</div>
	<script src='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.10.2.min.js'></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/demo.js"></script>
	<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html><?php }} ?>
