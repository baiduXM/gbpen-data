<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:04:46
         compiled from "D:\Unify\app\views\templates\GP0016\index.html" */ ?>
<?php /*%%SmartyHeaderCode:477556442bfe1d5dc3-14930011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1c1a7541f69a6c8b9461156267d6454585690c' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0016\\index.html',
      1 => 1445593836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '477556442bfe1d5dc3-14930011',
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
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56442bfe986250_93202174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442bfe986250_93202174')) {function content_56442bfe986250_93202174($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- 调试代码 End -->
    <script type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
      if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
      }

    <?php }?>
    </script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
 <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("./_gundong.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="outside">
   
     <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="index_pic">
     <h6 class="tit"><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['en_name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['name'];?>
</span></h6>
     <div class="hxz"><?php echo $_smarty_tpl->getSubTemplate ("./_index_pic.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div>
     
      
     </div> 
     <div class="index_about"><div class="about_xq"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['link'];?>
"><h5 class="tit"><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['en_name'];?>
</br><span><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['name'];?>
</span></h5></a>
     <div class="about_ms"><div class="about_left"><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['description'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['link'];?>
">【查看详情】</a></div>
     <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['image'];?>
"  height="227" width="271" />
     </div>
     </div></div>
     <div class="index_news">
       <div class="news_left">
         <div class="left_top">
           <h4 class="tit"><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['en_name'];?>
</br><span><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['name'];?>
</span></h4>

         </div>
         <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['link'];?>
" class="left_bottom">查看更多</a>
       </div>
       <div class="news_right">
       <div class="top">
         <ul>
             <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list3']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"  height="218" width="227" /></a><div class="photo_title"> <div class="banck"></div><span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">[查看更多]</a></span></div></li>
                       <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                <?php } ?>
         </ul>
       </div>
         <div class="bottom">
           <ul>  
                            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list3']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span class="time"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                       <?php if ($_smarty_tpl->tpl_vars['article']->index+4==6) {?><?php break 1?><?php }?>
                <?php } ?>
                          </ul> 
         </div>
       </div>
     </div>
     <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
  </div>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script id="jsID" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_nav.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/scroll.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/gundong.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_pic.js"></script>
   <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_banner.js"></script>
</body>
</html>

<?php }} ?>
