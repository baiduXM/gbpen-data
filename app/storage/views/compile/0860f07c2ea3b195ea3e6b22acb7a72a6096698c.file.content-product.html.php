<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 02:07:08
         compiled from "D:\unify\app\views\templates\GP0012\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:1138564bcc2e186e30-79989926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0860f07c2ea3b195ea3e6b22acb7a72a6096698c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0012\\content-product.html',
      1 => 1447808488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138564bcc2e186e30-79989926',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bcc2e578d07_27627749',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
    'proshowb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bcc2e578d07_27627749')) {function content_564bcc2e578d07_27627749($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/sub.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js">
    </script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.kinMaxShow-1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
 
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sub_container" class="wrap1 clearfix">
                  
                    <div class="sidebar">
</div>
                    <div class="crumb">
                <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/ico11.png" width="19" height="15"class="pngFix" />
                <span>当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
           <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
             &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
           <?php } ?></span>
            </div>
           	

        <div class="main">
            
            <div class="article">
                        <div class="descripimg">
                            <div id="slideBoxb" class="slideBoxb" style="margin:0 auto">
                                <div class="hd">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['proshowb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proshowb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['proshowb']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['proshowb']->key => $_smarty_tpl->tpl_vars['proshowb']->value) {
$_smarty_tpl->tpl_vars['proshowb']->_loop = true;
 $_smarty_tpl->tpl_vars['proshowb']->index++;
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['proshowb']->index+1;?>
</li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="bd">
                                    <ul>
                                        <?php  $_smarty_tpl->tpl_vars['proshowb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['proshowb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['proshowb']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['proshowb']->key => $_smarty_tpl->tpl_vars['proshowb']->value) {
$_smarty_tpl->tpl_vars['proshowb']->_loop = true;
 $_smarty_tpl->tpl_vars['proshowb']->index++;
?>
                                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['proshowb']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['proshowb']->value['title'];?>
" width="500" height="500"/></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                                <a class="prev" href="javascript:void(0)"></a>
                                <a class="next" href="javascript:void(0)"></a>
                            </div>
                        </div>
                        <div class="descriptcot">
                            <div class="text_p">
                                产品名称：<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                                <br />
                            </div>
                        </div>
                        <div class="moule_edot">
                            <b style="font-size:14px;">产品介绍</b>
                            <br /> <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
 </div>
                        <div style="height:30px;overflow: hidden; padding-top:7px; margin-top:15px;color:#000; float:right;">
                            <!-- Baidu Button BEGIN -->
                            <?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

                        </div>
                        <ul class="inner_pages" style="margin-left:15px; clear:both;">
                            <li>上一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
                            <li>下一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
                        </ul>
                    </div>
                     <div class="bot"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sid_bot.png" width="868" height="48" /></div>
        </div>
        
           <?php echo $_smarty_tpl->getSubTemplate ('./_aside.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html>
<?php }} ?>
