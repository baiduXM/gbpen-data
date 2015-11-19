<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 01:45:24
         compiled from "D:\unify\app\views\templates\GM0055\index.html" */ ?>
<?php /*%%SmartyHeaderCode:30950563c5a5eaa4da3-61474507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8870e25ecf8a23464af782b6cdae126b0e37e3de' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0055\\index.html',
      1 => 1447206321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30950563c5a5eaa4da3-61474507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c5a5eee4796_10827654',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'search_action' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c5a5eee4796_10827654')) {function content_563c5a5eee4796_10827654($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		<!-- 调试代码 End -->
		<script type="text/javascript">
		// 跳转PC页面
		<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
			if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
				location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
			}
		<?php }?>
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.5,user-scalable=no,minimal-ui">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />        
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no, email=no" name="format-detection">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" /> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper.3dflow-2.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<script type="text/javascript">
	window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
	<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section>

<?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>    
        <div class="main">
        	<div class="search">
                <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                    <div class="searchinput"><input type="text" name="s" value="" /></div>
                    <input type="submit"  class="searchbtn"/>
                </form>                
            </div>  



       <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==1) {?>            
            <div class="menu">
                            <ul class="nav">
                            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                                <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                                    <div class="listbox">
                                        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"width="100%"></div>
                                        <div class=" title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                                    </div>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>
                             <?php } ?>
                             
                            </ul>
            </div>   
             <div class="ad"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%"></div>           
        <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['showtype']==2) {?>
            <div class="Theme">
            	<h1 class="Theme-top"><a class="more" href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">MORE+</a>
                	<dd class="china"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</dd>
                    <dd class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
 </dd>
                </h1>
                <div class="Theme-m">
                	<ul class="picture2">
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                       <li onclick="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><div>
                        <p class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" /></p>
                        <dl class=" title1">
                        <span class="addicon"></span>
                        <dd class="china"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dd>
                        <dd class="en"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</dd>
                        </dl></div>
                       </li>  
                         <?php } ?>          
          		   </ul>
                </div>
            </div>        
        <?php }?>                                  
        </div>
    <?php }?>
    <?php } ?>   
    </section>
       
        <div><footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 </footer></div>
        
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
    
</body>
</html>
<?php }} ?>
