<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:12:14
         compiled from "D:\unify\app\views\templates\GP0014\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:30888564c16be68c168-89020471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aebd3febfe6c20da6b03cf4cacd8ca5327dfa813' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0014\\content-product.html',
      1 => 1447826347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30888564c16be68c168-89020471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'title' => 0,
    'global' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c16be924961_19560502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c16be924961_19560502')) {function content_564c16be924961_19560502($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-CN">
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.11.3.js"></script>
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
        <!-- 头文件引入 -->
        <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="containers">
           <div class="left">
    
                <!-- 导航文件导入 -->
                <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



            <div class="contct">
                                <h3>联系我们<b>CONTACT</b></h3>
                  <div class="limg"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_img']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_img']['image'];?>
" height="89" width="219" /></a></div>
                                <div class="lxw2">       
                               <?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us'];?>
       
                                </div>
                            </div>                            
           </div>
<div class="right">
<div class="detal">
                    	<div class="detal_s">
				   <h3><span>所在位置: <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                     &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                 <?php } ?>
                </span> <?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h3>
<div class="deteo">
<div class="main_right_con2" >
        	<div class="description">
            	<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

</div>
    <ul class="inner_pages" style="margin-left:18px;">
     <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
     <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
">下一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
    </ul>
 			</div>
             </div>  
             
                        </div>
                    </div>            
                </div>           
        </div> 
        <!-- 导入_footer.html文件 -->
        <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div> 
</body>
</html>
















<?php }} ?>
