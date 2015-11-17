<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 10:10:41
         compiled from "D:\Unify\app\views\templates\GM0007\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:449156407121b211c6-63744004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a258bf27a4bdfe1ee8d15b824078f046aa7af9' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0007\\content-news.html',
      1 => 1446431286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '449156407121b211c6-63744004',
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
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56407122055a20_37819319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56407122055a20_37819319')) {function content_56407122055a20_37819319($_smarty_tpl) {?><!DOCTYPE html>
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
css/css2.css" rel="stylesheet" type="text/css" />
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

</head>
<body>

 <div class="deta_tp">
<section>
            <div class="boxmain2"> 
            <h1 class="boxmain-topa fixed-top"><span class="back"><a href="javascript:window.history.back()">返回</a></span><span class="morefont ziti2" id="font">字+</span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h1>            
            <div class="font fix-font">
                  <dl class="big">大</dl>
                  <dl class="normal">中</dl>
                  <dl class="small">小</dl>
              </div>  
            </div>  
            <div class="nox_shpow" style="margin-top:40px;"> 
               <div class="boxmain prospwa">
<div class=" news_detail">
            	<h1 class="titlea"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
                <div class="titleb"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</div>
        	<div class="edite"><div class="nimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%"></div>
                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

					</div> 
    <ul class="inner_pages">
     <li><div class="pageli"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></div><div class="banyuan"></div></li>
     <li><div class="pageli"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一条:<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></div><div class="banyuan"></div></li>
    </ul>                                        
            </div>                                  
               </div>
            </div>   
       </section>
       </div>
     <div class="dibu">
  <a href="#" class="back-top" id="quickbar-backtotop">&and;<br>TOP</a>   
   <div class="foot">
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 版权所有
   </div>     
     </div>   
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>
</html>
<?php }} ?>
