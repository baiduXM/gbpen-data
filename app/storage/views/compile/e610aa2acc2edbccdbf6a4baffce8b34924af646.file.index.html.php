<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:07:48
         compiled from "D:\unify\app\views\templates\GM0056\index.html" */ ?>
<?php /*%%SmartyHeaderCode:502156403e4f785130-12933987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e610aa2acc2edbccdbf6a4baffce8b34924af646' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0056\\index.html',
      1 => 1447056465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502156403e4f785130-12933987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56403e4fc38775_79016964',
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
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403e4fc38775_79016964')) {function content_56403e4fc38775_79016964($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		<!-- 调试代码 End -->
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
 <div class="index_show">
 <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?>
 	<?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>   
    <div class="about-edit">
        	<div class="atitleimg">
            	<div class="atitles"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
               <div class="aimgs"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%"></div>
            </div>
            <div class="a_righshow"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">
              <div class="a_jiedu"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>
              <div class="a_bj"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</div>
<div class="xax_d">详情信息</div></a>
            </div>
       </div>    
    <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
<div class="course">
          <div class="coust_titles"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><span class="mores">更多＋</span><div class="keftitle"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</b></div></a></div>    
            <div class="course_detal">
            	<ul>
                 <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                	<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                    	<div class="kechengs">
                        	<div class="pings">
                              <div class="cimgs"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%"></div>
                            </div>
                            <div class="c_title2"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                            <div class="c_eidt2"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div>
<div class="xax_d">详情信息</div>
                        </div></a>
                    </li>    
                   <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                 <?php } ?>                                    
                </ul>
            </div>
        </div>    
   <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>  
       <div class="popular">
          <div class="coust_titles"><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'"><span class="mores">更多＋</span><div class="keftitle"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</b></div></a></div>    
          <div class="pipular_detal">
          	<ul>
             <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
            	<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'">
                	<div class="pir_show">
                    	<div class="pshow2">
                        	<div class="simgs"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="100%"></div>
                            <div class="sword">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                            </div>
                        </div>
                    </div></a>
                </li>
                 <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
            	<?php } ?>                       
            </ul>
          </div>    
        </div>     
    <?php }?>
 <?php } ?>
 </div>
    </section>
        <footer class="foot"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 </footer>
        
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
    
</body>
</html>
<?php }} ?>
