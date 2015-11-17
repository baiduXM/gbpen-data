<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 01:04:46
         compiled from "D:\Unify\app\views\templates\GP0001\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2113356405a11436b68-68379962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e32c6026035bb0b88167735f7d616c90259a801' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0001\\index.html',
      1 => 1447061030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2113356405a11436b68-68379962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405a1223dbd8_15077227',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'index' => 0,
    'slidepic' => 0,
    'article' => 0,
    'footprint' => 0,
    'search_action' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405a1223dbd8_15077227')) {function content_56405a1223dbd8_15077227($_smarty_tpl) {?><!DOCTYPE html>
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
css/home.css">

<!--[if lte IE 8]>
<link rel="stylesheet" href="css/ie.css">
<![endif]-->

<!--[if lte IE 7]>
<style type="text/css">
.main,.search,.header,.hoverview,.slash{
	before:'';
}
.slash{
	after:'';
	z-index:10;
}
.slash .before{
	z-index: 11;
}
.slash .after{
	z-index: 12;
}
.nav{
	z-index: 13;
}
.icon{
	z-index:20;
}
</style>
<![endif]-->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/ajust.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/respond.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.7.1.min.js"></script>
<!--[if lte IE 8]>    
<script type="text/javascript" src="js/jquery.pseudo.js"></script>
<![endif]-->
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
	<div class="wrap">

		<div class="header">
			<div class="header_inner">
				<div class="top group">
					<h1 class="logo"><a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title']->value);?>
"/></a></h1>
					<ul>
						<li><a href="javascript:void(0);" onclick="SetHome(this, window.location)">设为首页</a></li>
						<li><a href="javascript:void(0);" onclick="shoucang(document.title, window.location)">加入收藏</a></li>
					</ul>
				</div>

				<div class="nav">
					<ul>
					<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
						<li class="nav_<?php echo $_smarty_tpl->tpl_vars['nav']->index+1;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
							<span class="hoverview">
								<ul>
									<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
		                            <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
		                            <?php } ?> <?php }?>
								</ul>
							</span>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['nav']->index+1==6) {?><?php break 1?><?php }?>
					<?php } ?>
					</ul>
					<!-- 斜线 -->
					<div class="slash"></div>
				</div>
			</div>
		</div>

		
		<div class="slider-wrapper theme-theme1204">

            <div class="ribbon"></div>

            <div id="slider" class="nivoSlider">
            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" height="1050" width="1920" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['slidepic']->value['title']);?>
" />
			<?php } ?>
            </div>
		</div>

		<div class="main">
			<div class="about">
				<h2><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['en_name'];?>
<span class="blue"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</span></h2>
				<div class="txt"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>
</div>
				<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
">[详细]</a></span>
			</div>
			<div class="news">
				<div class="title">
					<h2><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
<span class="blue"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</span></h2>
					<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
" class="title_more">MORE>></a>
				</div>

				<div class="container">
					<div id="ca-container" class="ca-container">
						<div class="ca-wrapper">
						<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
							<div class="ca-item ca-item-<?php echo $_smarty_tpl->tpl_vars['article']->index+1;?>
">
								<h6><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
</a></h6>
								<div class="news_img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"/></div>
								<div class="txt">
									<p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</P>
									<span class="more">[<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">查看更多</a>]</span>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="icon">
			<ul>
				<li class="rotate_bg_1"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['link'];?>
"><div><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['icon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['en_name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['name'];?>
</div></a></li>
				<li class="rotate_bg_2"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['link'];?>
"><div><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['icon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['en_name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['name'];?>
</div></a></li>
				<li class="rotate_bg_3"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['link'];?>
"><div><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['icon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['en_name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['name'];?>
</div></a></li>
				<li class="rotate_bg_4"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['link'];?>
"><div><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['icon'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['en_name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['name'];?>
</div></a></li>
			</ul>
			<div class="rotate_bg"></div>
			<div class="ie8">
				<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/home_i.png" height="300" width="442" usemap="#icon_img" alt="icon_img"/>
				<map name="icon_img">
					<area shape="poly" coords="142,0,212,72,142,142,72,72" href="javascript:;" title="<?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['name'];?>
"/> 
					<area shape="poly" coords="0,142,72,72,142,142,72,212" href="javascript:;" title="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['name'];?>
"/> 
					<area shape="poly" coords="72,212,142,142,212,212,142,280" href="javascript:;" title="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['name'];?>
"/> 
					<area shape="poly" coords="143,142,212,72,282,142,213,212" href="javascript:;" title="<?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['name'];?>
"/> 
				</map>
			</div>
		</div>
		
		<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
		<div class="copyright_bg"></div>
		
		<div class="search">
			<form id="form" class="fm" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" name="fm">
				<span class="s_ipt_wr">
					<input type="text" id="kw" name="s" class="s_ipt" placeholder="请输入产品关键字"/>
					<a href="javascript:;"></a>
				</span>
				<span class="s_btn_wr">
					<input type="submit" class="s_btn" id="submit" value="">
				</span>
			</form>
			<div class="phone">客户服务热线：<span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></div>
		</div>

		<div class="blue_bg_l"></div>
		<div class="blue_bg_r"></div>
	</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.nivo.slider_2.5.2.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.crollPane.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/tap.js"></script>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


</body>
</html><?php }} ?>
