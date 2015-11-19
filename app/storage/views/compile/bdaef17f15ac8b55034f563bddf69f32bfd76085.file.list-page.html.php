<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:56:05
         compiled from "D:\Unify\app\views\templates\GP0015\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:6724564d7285a89c52-86383704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdaef17f15ac8b55034f563bddf69f32bfd76085' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0015\\list-page.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6724564d7285a89c52-86383704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'contact' => 0,
    'global' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d72860a9771_17369360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d72860a9771_17369360')) {function content_564d72860a9771_17369360($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <script type="text/javascript">
  // 跳转手机页面
  <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
    if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
      location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
    }
  <?php }?>
  </script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>

<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
	<body>	
     <div class="wappers">   	
		<!-- 头部 -->
		<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- 最新产品 -->
            <div class="container">
                <div class="about">
                    		<div class="about_left">
                                <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                    <div class="contact_ab">
                            		<h3 class="atn_title">联系我们<i>CONTACT US</i></h3>
                                    <div class="ab_telp">
                                    	<p class="con_tel "><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</p>
                                        <p class="con_add "><?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
</p>
                                        <p class="con_more_01  "><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['rczprec']['link'];?>
" class="border_rg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/hr_bg.jpg" /><?php echo $_smarty_tpl->tpl_vars['global']->value['rczprec']['name'];?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['feedback']['link'];?>
" class="border_rg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/veo_bg.jpg" /><?php echo $_smarty_tpl->tpl_vars['global']->value['feedback']['name'];?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['dowload']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/xz_bg.jpg" /><?php echo $_smarty_tpl->tpl_vars['global']->value['dowload']['name'];?>
</a></p>
                                   	</div>
                            </div>
                            </div>
                            
                            <div class="about_right">
                            		<h3 class="ab_title"><span class="cu_nav">
<ul class="clearfix">
	<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
	<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
	<li class="fl"> >> <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
	<?php } ?>
</ul>                                            
                                    </span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
<i><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</i></h3>
                                    <div class="ab_eadit">
                                    		  <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>
   
                                    </div>
                            </div>
                    </div>              
            </div>                      
		<!-- 热门产品 -->

		<!-- 底部 -->
		<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
	</body>
</html>
<?php }} ?>
