<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 07:45:17
         compiled from "D:\unify\app\views\templates\GP0012\index.html" */ ?>
<?php /*%%SmartyHeaderCode:4669564bcad38988b9-72518635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc4ecefe60af2e82637e331ebd69601ad2c8360' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0012\\index.html',
      1 => 1447832661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4669564bcad38988b9-72518635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bcad3c4d0e6_32860722',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'headscript' => 0,
    'index' => 0,
    'news' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bcad3c4d0e6_32860722')) {function content_564bcad3c4d0e6_32860722($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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

<div class="wrap">

    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="top_r"></div>
    <div id="container" class="wrap1 clearfix">
    <div id="news">
      <div class="title"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/mo.jpg" width="12" height="12" /></a></span>
        <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</h2>
      </div>
      <div class="inner">

     <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['news']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['news']->index++;
?>
        <div id="n1" class="clearfix">
         <div class="np"><img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['image'];?>
" width="97" height="71" /></div>
          <div class="nr">
            <h2><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['pubtimestamp'],'%Y/%m/%d');?>
 </h2>
            <div class="wz"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</a> </div>
          </div>
        </div>
          <?php if ($_smarty_tpl->tpl_vars['news']->index+1==2) {?><?php break 1?><?php }?>
    <?php } ?>
        
        
      </div>
    </div>
    
    <div id="about">
      <div class="title"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/mo.jpg" width="12" height="12" /></a></span>
        <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</h2>
      </div>
      <div class="inner"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
" width="130" height="75" />
        <p><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>
</p>
      </div>
    </div>
    
     <div class="c"></div>
     
     <div id="product">
      <div class="title"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/mo.jpg" width="12" height="12" /></a></span>
        <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
</h2>
      </div>
      
      <div class="inner">

	<ul id="MarqueeDiv2">
       <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
       <li><a href="<?php echo $_smarty_tpl->tpl_vars['pro']->value['link'];?>
"><img height="146" width="161" src="<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
" /><h2><?php echo $_smarty_tpl->tpl_vars['pro']->value['title'];?>
</h2></a></li>
       <?php } ?>
    </ul>  
      </div>
    </div>
   <div style="clear:both"></div>
   
   
 </div>
 
    
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>

</html>
<?php }} ?>
