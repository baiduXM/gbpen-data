<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:11:34
         compiled from "D:\unify\app\views\templates\GP0015\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:14830564d68167708a1-61444637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5efca75d7a0dd60cee660a73d684e79cda67ce88' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0015\\list-imagetext.html',
      1 => 1447826369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14830564d68167708a1-61444637',
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
    'headscript' => 0,
    'global' => 0,
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d6816e878e7_07796151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6816e878e7_07796151')) {function content_564d6816e878e7_07796151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
<div class="wrap">
<!-- 导入头部文件 -->
    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="content">
        <div class="row">
            <div class="side-left fl">
                <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <div class="recu">
                     <h1 class="title">人才招聘<span>recruitment</span></h1>
                     <div class="ny-recu">
                         <a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['contactimg']['link'];?>
" class="recuimg">
                           <img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['contactimg']['image'];?>
" width="215" height="134">
                         </a>
                     </div>

                </div>

             </div>
             <div class="side-right fr">
                 <div class="ny-tit">
                   <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

                     <span class="locate">当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
                               <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                                 &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                               <?php } ?>
                      </span>
                   </h1>


                 </div>
                 <div class="ny-con">
                    <div class="ny-list">
                            <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?> 
                                <div class="list-item">
                                  <dl><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"></a></dl>
                                  <dt><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></dt>
                                  <dd><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['description'],400,"…");?>
</dd>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?> <?php break 1?> <?php }?>
                                
                            <?php } ?>     
                    </div>
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
                          <a class="current"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
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
     </div>
     <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html>
<?php }} ?>
