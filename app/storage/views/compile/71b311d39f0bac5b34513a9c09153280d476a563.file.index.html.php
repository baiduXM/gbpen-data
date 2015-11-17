<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:50:15
         compiled from "D:\Unify\app\views\templates\GP0003\index.html" */ ?>
<?php /*%%SmartyHeaderCode:144765640582fa7d382-93634698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b311d39f0bac5b34513a9c09153280d476a563' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0003\\index.html',
      1 => 1447061059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144765640582fa7d382-93634698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564058303aa207_33668378',
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'index' => 0,
    'imglist' => 0,
    'limit' => 0,
    'txtlist' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564058303aa207_33668378')) {function content_564058303aa207_33668378($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
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

<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

	<div class="main">
		<div class="about">
			<div class="con">
				<h2><span class="zh"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</span><br/><span class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['en_name'];?>
</span></h2>
				<div class="txt"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>
</div>
				
			</div><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
" class="more">更多</a>
			<div class="bg">
				<div class="b_l">
					<img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_bg_big']['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['index']->value['about_bg_big']['title']);?>
">
				</div>
				<div class="t_r">
					<img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_bg_big']['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['index']->value['about_bg_big']['title']);?>
">
				</div>
				
				<!-- <div class="smak"></div> -->
			</div>
		</div>
		<div class="product">
			<div class="bg clearfix">
			<ul class="clearfix">
				<li class="first">					
					<div><h2><span class="zh"><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['name'];?>
</span><br/><span class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['en_name'];?>
</span></h2></div>
				</li>
				<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(10, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['imglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['img_list']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['imglist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['imglist']->key => $_smarty_tpl->tpl_vars['imglist']->value) {
$_smarty_tpl->tpl_vars['imglist']->_loop = true;
 $_smarty_tpl->tpl_vars['imglist']->index++;
?>	
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['imglist']->value['link'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['imglist']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['imglist']->value['title']);?>
">
				
					<h6 class="title"><?php echo $_smarty_tpl->tpl_vars['imglist']->value['title'];?>
</h6>
				</a></li>

				<?php if ($_smarty_tpl->tpl_vars['imglist']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
				<?php } ?>	
				<li class="last">					
					<div><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['products']['link'];?>
" class="more">更多</a></div>
				</li>
			</ul>
			</div>
		</div>
		<div class="new">
			<h2><span class="zh"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</span><br/><span class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</span></h2>
			<div class="new_list">
				<ul class="clearfix">
				<?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(6, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['txtlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['txtlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['img_list']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['txtlist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['txtlist']->key => $_smarty_tpl->tpl_vars['txtlist']->value) {
$_smarty_tpl->tpl_vars['txtlist']->_loop = true;
 $_smarty_tpl->tpl_vars['txtlist']->index++;
?>					
					<li>
						<div class="c_l">
							<span class="day"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['txtlist']->value['pubtimestamp'],'%d');?>
</span>
							<span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['txtlist']->value['pubtimestamp'],'%Y%m');?>
</span>
						</div>
						<div class="c_r">
							<h6><a href="<?php echo $_smarty_tpl->tpl_vars['txtlist']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['txtlist']->value['title'];?>
</a></h6>
							<div class="new_txt"><?php echo $_smarty_tpl->tpl_vars['txtlist']->value['description'];?>
</div>

							<a href="<?php echo $_smarty_tpl->tpl_vars['txtlist']->value['link'];?>
" class="txtmore">查看详情>></a>
						</div>
					</li>
				<?php if ($_smarty_tpl->tpl_vars['txtlist']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
				<?php } ?>
				</ul>
			</div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
" class="read_more">更多</a>
		</div>
	</div> 

	<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/unslider.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/demo.js" type="text/javascript"></script>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


</body>
</html><?php }} ?>
