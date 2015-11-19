<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:10:42
         compiled from "D:\unify\app\views\templates\GM0046\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2079564063122349a5-86440192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12598c33dbb8acd3d6d2a269e179be1e3f2c81d2' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0046\\index.html',
      1 => 1446794292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079564063122349a5-86440192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mIndexCat_list' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564063126f60d2_79845414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564063126f60d2_79845414')) {function content_564063126f60d2_79845414($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
		// 跳转PC页面
		<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
			if (!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
				location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
			}
		<?php }?>
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>

	<div class="heaer">
    	<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
    </div>
    <div class="baner">
	<div id="slideBox" class="slideBox">
    <div class="hd">
            <ul></ul>
              </div>
	<div class="bd">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
			<li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" /></a></li>
			<?php } ?>
		</ul>
	</div>
	
			</div>
			
   </div>
   <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="main">
	<?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
	  <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
    	<div class="box-id">
        	<h1 class="box-top"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+MORE</a></span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</h1>
            <div class=" about-m">
            	<div class="about-img"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
"></div>
            	<div class="about-edite">      <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
 </div>
            </div>
        </div>
		<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
        <div class="box-id">
        	<h1 class="box-top"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+MORE</a></span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</h1>
            <div class=" about-m">
               <ul class="news-list">
			   <?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
"><span class="date"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
 </a></li>
               <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==5) {?><?php break 1?><?php }?>
					<?php } ?>
           		</ul>
            </div>
        </div>
		<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
        <div class="box-id">
        	<h1 class="box-top"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">+MORE</a></span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</h1>
            <div class=" about-m">
                <ul class="picture1">
				<?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
                     <li><div><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
"><p class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
" width="100%" title="186*291" /></p><p class=" title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</p></a></div></li>
                    <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==6) {?><?php break 1?><?php }?>
					<?php } ?></ul>  
            </div>
        </div>
		<?php }?>
	    <?php } ?>
        
    </div>
    <div class="foot">
   <div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>
   版权所有：
    <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
   
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
