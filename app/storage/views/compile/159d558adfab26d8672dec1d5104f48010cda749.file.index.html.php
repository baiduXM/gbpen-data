<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:17:48
         compiled from "D:\Unify\app\views\templates\GP0013\index.html" */ ?>
<?php /*%%SmartyHeaderCode:430856442f0ce81424-87253661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '159d558adfab26d8672dec1d5104f48010cda749' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0013\\index.html',
      1 => 1445591896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '430856442f0ce81424-87253661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'site_another_url' => 0,
    'title' => 0,
    'headscript' => 0,
    'index' => 0,
    'navho' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56442f0d50d266_41542610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442f0d50d266_41542610')) {function content_56442f0d50d266_41542610($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>

<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />

<!--[if IE 6]>
<script type="text/javascript" src="js/dd_delatedpng.js" ></script>
<script type="text/javascript">//如果多个element使用PNG,则用','分隔
DD_belatedPNG.fix('div,ul,li,a,p,img');
</script>
<![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>

<script type="text/javascript">
	// 跳转手机页面
	<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
		if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
			location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
		}
	<?php }?>
	</script>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>


</head>

<body>
	<div class="wappers">
    	
		<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
       
    
       <div class="containers">
       	<div class="index">
			  <div class="left">
                <div class="list" style="height:218px;">
                  <div class="a_title2"><span><?php echo $_smarty_tpl->tpl_vars['index']->value['homenavs']['en_name'];?>
</span> <i><?php echo $_smarty_tpl->tpl_vars['index']->value['homenavs']['name'];?>
</i></div> <!-- 下表为0的面包屑导航正好是一级栏目的当前栏目 -->
       <div class="listbg">
  <ul class="">
    <?php  $_smarty_tpl->tpl_vars['navho'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navho']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['homenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navho']->key => $_smarty_tpl->tpl_vars['navho']->value) {
$_smarty_tpl->tpl_vars['navho']->_loop = true;
?>
    <li class="<?php if ($_smarty_tpl->tpl_vars['navho']->value['current']) {?>current<?php }?>">
      <a href="<?php echo $_smarty_tpl->tpl_vars['navho']->value['link'];?>
" class="choose"><?php echo $_smarty_tpl->tpl_vars['navho']->value['name'];?>
</a>
    </li>
    <?php } ?>
  </ul>
    </div>                           
                </div>              
              </div>  
              <div class="aboiut">
            	       <div class="list_title2"><i><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
">更多</a></i><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</div>
<div class="border"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
" height="136" width="165"/>
                    	<div class="anputt">
       <?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>
<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
">[了解更多]</a></span>
 </div>
                    </div>               
              </div> 
              <div class="contacta">
            	   <div class="list_title"><i><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['contact1']['link'];?>
">更多</a></i>联系方式</div>
                   <div class="ttal_ta">
真诚欢迎您的来电！                   
                   </div>
<div class="tela">
<?php echo $_smarty_tpl->tpl_vars['index']->value['contact'];?>
 
    </div>             
              
              </div>       
        </div>
<div class="prods">
            	<div class="titlt_i"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['products']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more2.jpg" height="13" width="42"></a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['name'];?>
</div>
<div class="proimg">
                     <div class="rollBox">
     <div class="LeftBotton" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()"></div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['products']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<div class="pic">
          <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" target="_blank" class="choose" ><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" height="134" width="179"/><h2 class="xu_word"><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</h2></a>
         </div>       
         <?php } ?>                                                                                 
        <!-- 图片列表 end -->    
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="RightBotton" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()"></div>
    </div>
     
    </div>                    
            </div>        
       </div>
  	<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
    </div>    

</body>
</html>
















<?php }} ?>
