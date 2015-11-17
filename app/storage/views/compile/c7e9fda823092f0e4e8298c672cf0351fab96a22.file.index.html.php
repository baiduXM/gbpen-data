<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:07:00
         compiled from "D:\Unify\app\views\templates\GP0017\index.html" */ ?>
<?php /*%%SmartyHeaderCode:298156498094dbbdc9-27929088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e9fda823092f0e4e8298c672cf0351fab96a22' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0017\\index.html',
      1 => 1445591996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298156498094dbbdc9-27929088',
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
    'new' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56498095882bf7_67519926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498095882bf7_67519926')) {function content_56498095882bf7_67519926($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.kinMaxShow-1.0.min.js"></script>
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
    <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="list" class="wrapper">
        <ul class="clearfix">
            <li>
                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/list_one.jpg" /></div>
                <h2><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['name'];?>
</a></h2>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['description'];?>
</div>
            </li>
            <li>
                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/two.jpg" /></div>
                <h2><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['name'];?>
</a></h2>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['description'];?>
</div>
            </li>
            <li>
                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/three.jpg" /></div>
                <h2><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['name'];?>
</a></h2>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['description'];?>
</div>
            </li>
            <li>
                <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/four.jpg" /></div>
                <h2><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['name'];?>
</a></h2>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['description'];?>
</div>
            </li>
        </ul>
    </div>
    <div id="news_bg">
        <div id="news" class="wrapper">
            <div class="title  clearfix">
                <div class="ch"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</div>
                <div class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</div><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.png" /></a></span></div>
            <div class="inner clearfix">
                <div class="text">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?>
                        <?php if ($_smarty_tpl->tpl_vars['new']->index+1>1&&$_smarty_tpl->tpl_vars['new']->index+1<=6) {?>
                        <li><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['pubtimestamp'],'%Y - %m - %d');?>
 </span><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a> </li>
                        <?php }?> <?php } ?>
                        
                    </ul>
                </div>
                <div class="right">
                    <div class="content clearfix">
                     <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?>
                         <?php if ($_smarty_tpl->tpl_vars['new']->index==0) {?> 
                        <div class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['new']->value['image'];?>
" height="148" width="165" /></div>
                        <div class="word">
                            <h2><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</h2>
                            <div class="txt"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['new']->value['description'],110,"…");?>
</div>
                            <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="button"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['link'];?>
">+查看更多</a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="pro" class="wrapper">
        <div class="title clearfix">
            <div class="ch"><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
</div>
            <div class="en"><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['en_name'];?>
</div>
            <div class="button"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
">查看更多</a></div>
        </div>
        <div class="inner">
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
" width="174" height="223" />
                                    <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>
