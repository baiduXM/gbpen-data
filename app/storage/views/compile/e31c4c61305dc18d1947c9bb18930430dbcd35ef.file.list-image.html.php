<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:29:36
         compiled from "D:\unify\app\views\templates\GP0009\list-image.html" */ ?>
<?php /*%%SmartyHeaderCode:19876563fef71ceb380-14086578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31c4c61305dc18d1947c9bb18930430dbcd35ef' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0009\\list-image.html',
      1 => 1447126174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19876563fef71ceb380-14086578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fef720e8b48_07370277',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'title' => 0,
    'list' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fef720e8b48_07370277')) {function content_563fef720e8b48_07370277($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js">
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/global.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

</head>

<body>
<div class="wrap">
<!-- 导入头部文件 -->
    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="ny-con">
       <div class="side-left fl">
           <i class="topbg"></i><i class="botbg"></i>
           <div class="ny-tit">
               <h1><span><span class="cn"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span><span class="en"><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</span></span><i></i></h1>
           </div>
           <div class="locationbox">
               <div class="location">
                   当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
                               <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                                 &gt;&gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                               <?php } ?>
               </div>
           </div>
           <div class="main">
              <div class="edit">
                    <ul class="ny-prolist">
                            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?> 
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="240" height="151"><h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2></a></li>
                                
                            <?php } ?>     
                    </ul>
                                        <div class="paging">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">&laquo; 上一页</a>
                      <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                          <a class="current" style="color:#cc1835;"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
                        <?php } else { ?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
                        <?php }?>
                      <?php } ?>


                      <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页 &raquo;</a>
                    </div>
              </div>
           </div>
        </div>
  
        <div class="side-right fr">
            <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           
        </div>

     </div>
     <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html>
<?php }} ?>
