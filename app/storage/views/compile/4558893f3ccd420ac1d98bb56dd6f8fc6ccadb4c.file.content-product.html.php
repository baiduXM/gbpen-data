<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:39:35
         compiled from "D:\unify\app\views\templates\GP0017\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:24645564c1d27e72f38-68552111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4558893f3ccd420ac1d98bb56dd6f8fc6ccadb4c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0017\\content-product.html',
      1 => 1447826407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24645564c1d27e72f38-68552111',
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
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1d281f4703_87150552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1d281f4703_87150552')) {function content_564c1d281f4703_87150552($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/animation.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

</head>

<body>
    <div class="wappers">
        <!-- 头部文件引入 -->
      <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
      <div class="containers">
        <div class="detali">
            <div class="topos_t">
                <!-- 导航文件导入 -->
   <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            <div class="inborder">
                <div class="homkes"><span>您当前位置：
                   <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                     - <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                   <?php } ?>
                </span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</div>
<div class="deteo">
                    <div class="main_right_con2" >
        	<div class="description">
            	<div class="pimgw">
              <div class="bd">
                  <ul>
              <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
              <li><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" height="230" width="350" alt="产品说明"/></li>
              <?php } ?>
            </ul>
          </div>
              </div>        
	<div class="moule_edot">
            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>



    </div>
</div>
            <ul class="inner_pages">
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
      <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>      
</body>
</html>
















<?php }} ?>
