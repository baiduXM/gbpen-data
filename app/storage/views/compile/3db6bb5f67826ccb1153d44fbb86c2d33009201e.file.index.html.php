<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:49:25
         compiled from "D:\Unify\app\views\templates\GP0012\index.html" */ ?>
<?php /*%%SmartyHeaderCode:12474564193759e2610-04118673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db6bb5f67826ccb1153d44fbb86c2d33009201e' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0012\\index.html',
      1 => 1446110028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12474564193759e2610-04118673',
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
    'headscript' => 0,
    'index' => 0,
    'case' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56419376086458_83869429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419376086458_83869429')) {function content_56419376086458_83869429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <script type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
    if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
    } <?php }?>
    </script>
    
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/MSClass.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.kinMaxShow-1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>    



    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="container" class="wrapper">
    
      <div id="case" class="clearfix">
      <div class="inner yc" style="margin:auto">
       <ul id="MarqueeDiv1">
       <?php  $_smarty_tpl->tpl_vars['case'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['case']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['case']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['case']->key => $_smarty_tpl->tpl_vars['case']->value) {
$_smarty_tpl->tpl_vars['case']->_loop = true;
?>
       <li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['case']->value['link'];?>
"><img height="115" src="<?php echo $_smarty_tpl->tpl_vars['case']->value['image'];?>
" /><p><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</p></a></li>
       <?php } ?>
    </ul>
  </div> 
  
   </div>
   <div id="about" class="fl">
     <h2 class="tit"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.jpg" /></a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['en_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</h2>
     <div class="inner">
        <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
" height="81" width="118" /><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['index']->value['about']['description'],50,"…");?>

     </div>
   </div>
   <div id="product" class="fl">
     <h2 class="tit"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.jpg" /></a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['en_name'];?>
<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
</h2>
     <div class="inner yc">
 <ul id="MarqueeDiv2">
       <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
       <li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['pro']->value['link'];?>
"><img height="65" src="<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
" /><h2><?php echo $_smarty_tpl->tpl_vars['pro']->value['title'];?>
</h2></a></li>
       <?php } ?>
    </ul>     </div>
   </div>
   <div id="video" class="fl">
     <h2 class="tit"><span><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.jpg" /></a></span>VIDEO 视频中心</h2>
     <div class="inner">
     <div class="video_img"><embed src="<?php echo $_smarty_tpl->tpl_vars['index']->value['video'];?>
" allowFullScreen="true" quality="high" width="238" height="128" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed></div>

        
     </div>
   </div>
   <div style="clear:both"></div>
 </div>
 
    
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>
