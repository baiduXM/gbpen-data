<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:55:08
         compiled from "D:\unify\app\views\templates\GM0054\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16888563feeec257313-60406396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14711d2be14cb715d6eb4237f97a9e152c1b75eb' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0054\\index.html',
      1 => 1446794404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16888563feeec257313-60406396',
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
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mIndexCat_data' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563feeec797ff8_88055679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563feeec797ff8_88055679')) {function content_563feeec797ff8_88055679($_smarty_tpl) {?><!DOCTYPE html>
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
css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>


<div class="search">
	<div class="input-div"><input name="" type="text" value="请输入编号" class="search_input" /></div>
   	<a href="#" class="search_btn">搜索</a>
</div>


      <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section>
	<?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
	  <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
    	<div class="boxmain">
        	<h1 class="boxmain-top"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">更多>></a></span><span class=" title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span></h1>
            <div class="boxmain-about">
            	<div class="aboutimg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%"></div>
                <div class="aboutedite">
                	 <dd class="nr">  <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</dd>
   					  <dd class="more1"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">[查看详情]</a></dd>
                </div>
            </div>
        </div>
		<?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
        <div class="boxmain">
        	<h1 class="boxmain-top"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">更多>></a></span><span class=" title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span></h1>
            <div class="boxmain-about" style=" margin-top:2px;">
            	<ul class="newstlist">
				<?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
                	<li>
                    <dt class="title1"><span class="time">post time: <?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</dt>
                    <dd class="nr"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['description'];?>
<dd>
                    </li>
					<?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==4) {?><?php break 1?><?php }?>
					<?php } ?>
                    
                </ul>
            </div>
        </div>
		 <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
        <div class="boxmain">
        	<h1 class="boxmain-top"><span class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">更多>></a></span><span class=" title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span></h1>
            <div class="boxmain-about">
		
            	<div class="proimgbox">
				<?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
					<?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index<2) {?>
                	<div class="proimg">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%" ></a>
                    </div>
					<?php }?>
					<?php } ?>
					
					
					
                </div>
				
                	<div class="proimgbox1">
					<?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
					<?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index==2) {?>
                	<div class="proimg">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%" ></a>
                    </div>
                    <dt class=" title2"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">查看更多 >></a></dt><?php }?>
					<?php } ?>
                </div>
                <div class="proimgbox">
				
					<?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
					<?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index>2&&$_smarty_tpl->tpl_vars['mIndexCat_data']->index<5) {?>
                	<div class="proimg">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%" ></a>
                    </div>
					<?php }?>
					<?php } ?>
                </div>
				
            </div>
        </div>
		<?php }?>
		<?php } ?>
        
        
    </section>
    <footer class="foot"><div class="back-top" id="quickbar-backtotop"><A href="#">TOP</A></div>版权所有：<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</footer>



<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
