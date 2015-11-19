<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 09:29:53
         compiled from "D:\unify\app\views\templates\GP0016\index.html" */ ?>
<?php /*%%SmartyHeaderCode:4238564c14d4a15685-19518659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f793b64e1fc5894d9a065f65f8c1a4484116c24e' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\index.html',
      1 => 1447838986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4238564c14d4a15685-19518659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c14d4e04335_65213815',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c14d4e04335_65213815')) {function content_564c14d4e04335_65213815($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
 <script id="jsID" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_nav.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_banner.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_pic.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_sz.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/left_nav.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
 <!-- 头部开始 -->
 <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <!-- 产品滚动 -->

 <!-- 内容 -->
 <div class="contant">
      <div class="contant_left">
        <div class="left1">
         <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub2.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="left4">
          <h3 class="title left4_title">联系我们&nbsp;<span>CONTACT US</span></h3>
          <?php echo $_smarty_tpl->getSubTemplate ("./_global.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
      </div>
      <div class="contant_right">
        <div class="right1">
          <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['link'];?>
"></a><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['name'];?>
&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['en_name'];?>
</span></h3>
          <div class="about_xq">
           <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['image'];?>
" height="91" width="119" alt="" />
           <div class="ms"><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['description'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['link'];?>
">【查看更多】</a></div>
         </div>
        </div>
        <div class="right1 right3">
          <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['link'];?>
"></a><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['name'];?>
&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['en_name'];?>
</span></h3>
          <div class="about_xq">
		  
           <ul class="bottom">
          <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list4']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                          <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span class="time"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                       <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>
          <?php } ?>
        </ul>
           
         </div>
        </div>
        <div class="gd"><h3 class="tit"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['link'];?>
"></a> <?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['name'];?>
</h3>
        <?php echo $_smarty_tpl->getSubTemplate ("./_index_pic.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
      </div>
 </div>
 <!-- 头部结束 -->
 <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
