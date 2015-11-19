<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 00:48:38
         compiled from "D:\unify\app\views\templates\GP0013\index.html" */ ?>
<?php /*%%SmartyHeaderCode:18727564bcae615e920-95704338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ccc86571c8eb1b7d0aa686e17022648f3e00cf' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0013\\index.html',
      1 => 1447724397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18727564bcae615e920-95704338',
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
    'lnav' => 0,
    'pro' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bcae65546e0_88183464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bcae65546e0_88183464')) {function content_564bcae65546e0_88183464($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

    <div id="contain">

  <div class="des">
   <div class="wrapper"> <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
<br /><span><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['en_name'];?>
</span></h2></div>
    <div class="inner wrapper clearfix">
     <div class="nav_list">
         <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/top.png" />
          <ul>
          <?php  $_smarty_tpl->tpl_vars['lnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro_list']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['lnav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['lnav']->key => $_smarty_tpl->tpl_vars['lnav']->value) {
$_smarty_tpl->tpl_vars['lnav']->_loop = true;
 $_smarty_tpl->tpl_vars['lnav']->index++;
?>
             <li><a href="<?php echo $_smarty_tpl->tpl_vars['lnav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['lnav']->value['name'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['lnav']->index+1==10) {?><?php break 1?><?php }?>
           <?php } ?>
          </ul>
          <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/bot.png" />
       </div>
       <div class="pro_list yc">
         <ul class="clearfix">
         <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pro']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
 $_smarty_tpl->tpl_vars['pro']->index++;
?>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['pro']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
" width="130" height="130" /><p><?php echo $_smarty_tpl->tpl_vars['pro']->value['title'];?>
</p></a></li>
        <?php if ($_smarty_tpl->tpl_vars['pro']->index+1==8) {?><?php break 1?><?php }?>
       <?php } ?>
         </ul>
       </div>
    </div>
  </div>
  
  <div class="an">
  <div class="wrapper clearfix">
    <div id="about">
     <div class="inner"><p><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>
</p><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
" class="more">[查看更多]</a><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
" width="450" height="105" /></div>
    </div>
    <div id="news">
      <div class="inner yc">
        <ul class="clearfix">
        <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['news']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['news']->index++;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['image'];?>
" width="170" height="100"/><p><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p><div style="height:120px; overflow:hidden"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</div></a></li>
 
  <?php if ($_smarty_tpl->tpl_vars['news']->index+1==2) {?><?php break 1?><?php }?>
<?php } ?>
        </ul>
      </div>
    </div>
    
  </div>
 </div>
</div>
 
    
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>
