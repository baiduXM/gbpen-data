<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:02:25
         compiled from "D:\Unify\app\views\templates\GM0013\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5908564150319b5a29-73008218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '602666b8df48d1ab2836025bc44801547cd98f0e' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0013\\index.html',
      1 => 1446110974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5908564150319b5a29-73008218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
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
  'unifunc' => 'content_564150321715e1_05314706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564150321715e1_05314706')) {function content_564150321715e1_05314706($_smarty_tpl) {?><!DOCTYPE html>
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
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no" name="format-detection">

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
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
      <div class="index-wrap">
      <div class="heaer  public_bg1">
        <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
      </div>
      <div class="menu public_bg1">
        <div class="nav"> <a class="arrow-left" href="#">&lt;</a> <a class="arrow-right" href="#">&gt;</a>
          <div class="swiper-nav swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class=" public_color">网站首页<br>
                <span class="en">home</span></a></span></div>
				<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
              <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" class=" public_color"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
<br>
                <span class="en"><?php echo $_smarty_tpl->tpl_vars['nav']->value['en_name'];?>
</span></a></span></div>
				<?php } ?>
              
            </div>
          </div>
        </div>
      </div>
      <div class="baner">
        <div id="slideBox" class="slideBox">
          <div class="hd">
            <ul>
            </ul>
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
      <div class="main">
	  <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
	  <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
        <div class="box-id">
		
          <div class="box-about clearfix public_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="147" height="97" title="147*97">
            
			<dl class="nr public_color1"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</a> </dl>
            <div class="j j1"></div>
			
          </div>
        </div>
		<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
		
        <div class="box-id">
          <div class="box-pro">
            <h1 class="box-top clearfix public_bor"><span class="more public_bg"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">更多+</a></span>
              <div class="text public_color2"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>

                <div class="en public_color"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
              </div>
            </h1>
            <div class="about-m">
              <ul class="picture2">
			  <?php  $_smarty_tpl->tpl_vars['mIndexCat_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_list']->key => $_smarty_tpl->tpl_vars['mIndexCat_list']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_list']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_list']->index++;
?>
                <li>
                  <div class="public_bg"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['link'];?>
 ">
                    <p class="img public_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['image'];?>
" width="100%" title="170*94" /></p>
                    <p class=" title public_color1"><b><?php echo $_smarty_tpl->tpl_vars['mIndexCat_list']->value['title'];?>
</b></p>
                    </a></div>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['mIndexCat_list']->index+1==6) {?><?php break 1?><?php }?>
					<?php } ?>
              </ul>
            </div>
          </div>
        </div>
		<?php }?>
        <?php } ?>
      </div>
      <div class="foot public_bg">
        <div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>
        <div class="text"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
      </div>
      </div>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
