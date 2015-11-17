<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:06:34
         compiled from "D:\Unify\app\views\templates\GP0011\index.html" */ ?>
<?php /*%%SmartyHeaderCode:50805642f70ad0a021-88116382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65fe22249e28a1e9c9363fb577e41ef98a4b4325' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0011\\index.html',
      1 => 1445591871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50805642f70ad0a021-88116382',
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
    'news' => 0,
    'lnav' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642f70b5e88f2_51499000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642f70b5e88f2_51499000')) {function content_5642f70b5e88f2_51499000($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
    <style>
    .tx1 {
        behavior: url(pie.htc);
    }
    </style>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="container" class="wrapper clearfix">
        <div id="left">
            <div id="pro">
                <div id="prizes">
                    <div class="photos">
                        <div class="photos-content">
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="174" height="131" /></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="about">
                <div class="title clearfix">
                    <div class="ch"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</div>
                    <div class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['en_name'];?>
</div><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.jpg" /></a></span></div>
                <div class="inner">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
" height="56" width="321" /><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>

                </div>
            </div>
            <div id="news">
                <div class="title clearfix">
                    <div class="ch"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</div>
                    <div class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</div><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.jpg" /></a></span></div>
                <div class="inner">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['image'];?>
" height="56" width="321" />
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['news']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['news']->index++;
?>
                        <li><span class="date"><time class="fr" datetime="<?php echo $_smarty_tpl->tpl_vars['news']->value['pubdate'];?>
" pubdate="pubdate"><?php echo $_smarty_tpl->tpl_vars['news']->value['pubdate'];?>
</time></span><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['news']->index+1==3) {?><?php break 1?><?php }?> <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="right">
            <div id="list">
                <div class="title clearfix"><div class="ch"><?php echo $_smarty_tpl->tpl_vars['index']->value['left_nav']['name'];?>
</div><div class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['left_nav']['en_name'];?>
</div></div>
                 <div class="inner">
                  <ul>
                    <?php  $_smarty_tpl->tpl_vars['lnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['left_nav']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['lnav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['lnav']->key => $_smarty_tpl->tpl_vars['lnav']->value) {
$_smarty_tpl->tpl_vars['lnav']->_loop = true;
 $_smarty_tpl->tpl_vars['lnav']->index++;
?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['lnav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['lnav']->value['name'];?>
</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['lnav']->index+1==4) {?><?php break 1?><?php }?>
                   <?php } ?>
                  </ul>
               </div>
            </div>
            <div id='contact'>
                <div class="title">
                    <div class="ch">联系方式</div>
                    <div class="en"> CONTACT US</div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us'];?>

            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>
