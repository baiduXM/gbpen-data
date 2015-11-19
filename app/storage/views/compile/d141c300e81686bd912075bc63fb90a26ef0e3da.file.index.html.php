<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:11:06
         compiled from "D:\unify\app\views\templates\GM0052\index.html" */ ?>
<?php /*%%SmartyHeaderCode:275835640632a4a2372-93959207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd141c300e81686bd912075bc63fb90a26ef0e3da' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0052\\index.html',
      1 => 1446794375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275835640632a4a2372-93959207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'title' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mIndexCat_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640632a98f584_38602983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640632a98f584_38602983')) {function content_5640632a98f584_38602983($_smarty_tpl) {?><!DOCTYPE html>
<html manifest="huancun.manifest">

<head>
    <script type="text/javascript">
    // 跳转PC页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
    if (!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
    } <?php }?>
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no,minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="telephone=no, email=no" name="format-detection">
    <!-- 启用360浏览器的极速模式(webkit) -->
    <meta name="renderer" content="webkit">
    <!-- 避免IE使用兼容模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
    <meta name="HandheldFriendly" content="true">
    <!-- 微软的老式浏览器 -->
    <meta name="MobileOptimized" content="320">
    <!-- uc强制竖屏 -->
    <meta name="screen-orientation" content="portrait">
    <!-- QQ强制竖屏 -->
    <meta name="x5-orientation" content="portrait">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper.3dflow-2.0.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
    <script type="text/javascript">
    window.addEventListener('load', function() {
        setTimeout(function() {
            window.scrollTo(0, 1);
        }, 100);
    }); //safari浏览器可以通过此代码来隐藏地址栏
    </script>
    <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body> 
    <div class="body">
        <div class="wrap page-active">
            <div class="index-wrap">
                <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <section> 
                    <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
                    <div class="about">
                        <div class="img">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
" width="100%" title="171*197">
                            <div class="title">
                                <dd class="en"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</dd>
                                <dd><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</dd>
                            </div>
                        </div>
                        <div class="nr">
                            <dl> <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
</dl>
                            <dd><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
" class="more">查看详情&nbsp;<i></i></a>
                        </div>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
                    <div class="room">
                        <h1 class="room-top">
                            <dl class="title">
                                <dd class="china"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</dd>
                                <dd class="en"><span><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</span></dd>
                            </dl>
                        </h1>
                        <div class="room-m">
                            <ul class="picture2">
                                <?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
                                <li>
                                    <div>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
">
                                            <p class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%" title="196*243" /></p>
                                            <p class=" title1"><span class="more">●●●</span><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</p>
                                        </a>
                                    </div>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==4) {?><?php break 1?><?php }?> <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==3) {?>
                    <div class="active">
                        <h1 class="active-top"><span class=" title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</span></h1>
                        <div class="active-m">
                            <ul class="newslist">
                                <?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?> <?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index%2==0) {?>
                                <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
'">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%" title="306*159">
                                    <div class="editbox">
                                        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</h1>
                                        <div class="nr"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['description'];?>

                                        </div>
                                    </div>
                                </li>
                                <?php } else { ?>
                                <li onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
'">
                                    <div class="editbox">
                                        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</h1>
                                        <div class="nr"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['description'];?>

                                        </div>
                                    </div>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%" title="306*159">
                                </li>
                                <?php }?> <?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==3) {?><?php break 1?><?php }?> <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php }?> <?php } ?>
                </section>
                <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    </div>
</body>

</html>
<?php }} ?>
