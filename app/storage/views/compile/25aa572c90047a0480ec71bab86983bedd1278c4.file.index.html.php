<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:57:32
         compiled from "D:\Unify\app\views\templates\GM0007\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2333356405ffcdc5939-93059534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25aa572c90047a0480ec71bab86983bedd1278c4' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0007\\index.html',
      1 => 1446431286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2333356405ffcdc5939-93059534',
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
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'mIndexCat_data' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405ffd8e51d0_98703306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405ffd8e51d0_98703306')) {function content_56405ffd8e51d0_98703306($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>

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
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta content="telephone=no" name="format-detection">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css2.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
    <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
    <div class="heaer">
        <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
        <div class="logbg">
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
            <div class="banyuan2">
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="nav">
            <a class="arrow-left" href="#">&lt;</a>
            <a class="arrow-right" href="#">&gt;</a>
            <div class="swiper-nav swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></span></div>
                    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                    <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="baner">
        <div id="slideBox" class="slideBox">
            <div class="hd">
                <ul></ul>
            </div>
            <div class="bd">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                    <li>
                        <a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" /></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
        <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
?> <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?>
        <div class="conert">
            <div class="about">
                <div class="title_index">
                    <div class="banyuan"></div>
                    <div class="a_title">
                        <div class="title2"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                    </div>
                </div>
                <div class="border">
                    <div class="annput">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['image'];?>
">
                        <div class="edita">
                            <?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>

                        </div>
                        <div class="mores"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">查看更多 +</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
        <div class="conert">
            <div class="cpzx">
                <div class="title_index">
                    <div class="banyuan"></div>
                    <div class="a_title">
                        <div class="title2"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                    </div>
                </div>
                <div class="border">
                    <div class="pic-show">
                        <ul class="huns_tu2">
                            <?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
                            <li>
                                <div class="hua_show2">
                                    <div class="ping">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
">
                                            <div class="cimg"><img src="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['image'];?>
" width="100%"></div>
                                            <div class="pi_words2"><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==6) {?><?php break 1?><?php }?> <?php } ?>
                        </ul>
                        <div class="mores"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">查看更多 +</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
        <div class="conert">
            <div class="xwzx">
                <div class="title_index">
                    <div class="banyuan"></div>
                    <div class="a_title">
                        <div class="title2"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                    </div>
                </div>
                <div class="border">
                    <div class="news_list">
                        <?php  $_smarty_tpl->tpl_vars['mIndexCat_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat_data']->key => $_smarty_tpl->tpl_vars['mIndexCat_data']->value) {
$_smarty_tpl->tpl_vars['mIndexCat_data']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat_data']->index++;
?>
                        <div class="news_d">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['link'];?>
">
                                <div class="ndata"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_data']->value['pubtimestamp'],"%d ");?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mIndexCat_data']->value['pubtimestamp'],"%m ");?>
</div>
                                <div class="contain">
                                    <dt><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['title'];?>
</dt>
                                    <dd><?php echo $_smarty_tpl->tpl_vars['mIndexCat_data']->value['description'];?>
</dd>
                                </div>
                            </a>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['mIndexCat_data']->index+1==3) {?><?php break 1?><?php }?> <?php } ?>
                    </div>
                    <div class="mores"><a href="<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
">查看更多 +</a></div>
                </div>
            </div>
        </div>
        <?php }?> <?php } ?>
        <div class="dibu">
            <a href="#" class="back-top" id="quickbar-backtotop">&and;<br>TOP</a>
            <div class="foot">
                <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 版权所有
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>

</html>
<?php }} ?>
