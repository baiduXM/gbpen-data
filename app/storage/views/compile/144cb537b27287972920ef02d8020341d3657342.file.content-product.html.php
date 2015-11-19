<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:19:45
         compiled from "D:\unify\app\views\templates\GP0015\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:8376564c1881047682-40589879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '144cb537b27287972920ef02d8020341d3657342' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0015\\content-product.html',
      1 => 1447826369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8376564c1881047682-40589879',
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
    'article' => 0,
    'pagenavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c18813aac54_79683511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c18813aac54_79683511')) {function content_564c18813aac54_79683511($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
                   <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>

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
                    <div class="ny-det">
                      <div class="det-img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"><h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1></div>
                      <div class="ny-detcon">
                        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                        <div class="share"><?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

                        </div>
                      </div>
                    </div>
                    <ul class='article-paging'>
                      <li>上一篇：<a href='<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
                      <li>下一篇：<a href='<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"'><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
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
</html><?php }} ?>
