<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 10:10:36
         compiled from "D:\Unify\app\views\templates\GM0007\list-text.html" */ ?>
<?php /*%%SmartyHeaderCode:18765640711c9fc613-17964790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed4fc8d1f4fb30379f5f9321515f3c8a9688369' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0007\\list-text.html',
      1 => 1446431286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18765640711c9fc613-17964790',
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
    'logo' => 0,
    'list' => 0,
    'article' => 0,
    'page_links' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_list2' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640711d181829_05899099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640711d181829_05899099')) {function content_5640711d181829_05899099($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
js/mask.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
</head>

<body>
    <div class="heaer">
        <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
    </div>
    <div class="headline"></div>
    <div class="detl-wrap">
        <div class="indexa">
            <div class="box-id">
                <div class="title_index">
                    <div class="banyuan"></div>
                    <div class="a_title">
                        <div class="morsa"><span class="morefont fenlei2" id="first">分类 <span id="down"> &or;</span><span id="up"> &and; </span></span>
                        </div>
                        <div class="title2"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</div>
                    </div>
                </div>
                <div class="border">
                    <div class="box-m">
                        <div class="news_show">
                            <div class="nimg2"><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['image'];?>
" width="100%"></div>
                            <div class="news_list">
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                <div class="news_d">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                                        <div class="ndata"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],"%d ");?>
/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],"%m ");?>
</div>
                                        <div class="contain">
                                            <dt><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
                                            <dd><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</dd>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <div class="mores" id="more" data-nexturl="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">查看更多 +</div>
                                <div class="mores less_more" id="less_more">没有更多</div>
                            </div>
                        </div>
                        <div class="hide-class">
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                                <div class="classbox public-bg">
                                    <dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><span><h1 class="circle"></h1></span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></dl>
                                    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
                                    <dl class="nav3"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></dl>
                                    <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list2']->key => $_smarty_tpl->tpl_vars['nav_list2']->value) {
$_smarty_tpl->tpl_vars['nav_list2']->_loop = true;
?>
                                    <dl class="nav4"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list2']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list2']->value['name'];?>
</a></dl>
                                    <?php } ?> <?php }?> <?php } ?> <?php }?>
                                </div>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dibu">
        <a href="#" class="back-top" id="quickbar-backtotop">&and;<br>TOP</a>
        <div class="foot">
            <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 版权所有
        </div>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

</body>

</html>
<?php }} ?>
