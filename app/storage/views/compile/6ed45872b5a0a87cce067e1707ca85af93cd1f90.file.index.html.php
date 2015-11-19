<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:18:00
         compiled from "D:\unify\app\views\templates\GP0015\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17611564c18184819a2-75553424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ed45872b5a0a87cce067e1707ca85af93cd1f90' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0015\\index.html',
      1 => 1447826369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17611564c18184819a2-75553424',
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
    'index' => 0,
    'pro' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c18187eef23_66324491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c18187eef23_66324491')) {function content_564c18187eef23_66324491($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
             <div class="col fl">
                 <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['en_name'];?>
</span></h1>
                 <div class="col-nr">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['image'];?>
" width="320" height="119">
                       <h2><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['index']->value['about_us']['description'],20,"…");?>
<span></span></h2>
                     </a>
                 </div>
             </div>
             <div class="col news fl">
                 <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
">&gt;&gt;</a></h1>
                 <div class="col-nr">
                    <div class="focus">
                        <div id="pic">
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['case']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['pro']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
"><h2><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pro']->value['title'],15,"…");?>
</h2></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="tip-bg"></div>
                        <div id="tip">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="btn">
                            <ul>
                                <li class="prev" id="focus_btn_left"></li>
                                <li class="next" id="focus_btn_right"></li>
                            </ul>
                        </div>
                    </div>

                 </div>

                   
             </div>
             <div class="col fr">
                 <h1 class="title">人才招聘<span>recruitment</span></h1>
                 <div class="col-nr">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['contactimg']['link'];?>
">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['contactimg']['image'];?>
" width="320" height="119">
                     </a>
                 </div>
                
             </div>
         </div>
 
     </div>
     <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html>
<?php }} ?>
