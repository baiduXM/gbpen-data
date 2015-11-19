<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 07:03:18
         compiled from "D:\unify\app\views\templates\GP0007\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:13893564196b662b846-93635128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebdf95855e493c37af272144cbf6e497ec106e3d' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0007\\content-news.html',
      1 => 1446795795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13893564196b662b846-93635128',
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
    'contact' => 0,
    'global' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564196b693aae6_97594678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564196b693aae6_97594678')) {function content_564196b693aae6_97594678($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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

<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
</head>

<body>
    <div class="wrap">
    	<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="ny_container">
        	<div class="ny_content">
               <div class="ny_leftside fl">
                    <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub4.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                    <div class="contactlianxi">
                    	<div class="cimg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/aimg.jpg" /></div>
                        <div class="clianxi">
<b><?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
</b>
<?php echo $_smarty_tpl->tpl_vars['global']->value['contactusfoot'];?>
       
                        </div>
                    </div>              
                </div>
<div class="ny_rightside fr">
                <div class="detal_s">
                	<div class="ny_title">
                    	<span>
                            <ul class="clearfix">
                                <li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
                                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                                <li class="fl"> >> <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
                                <?php } ?>
                            </ul>                          
                        </span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['en_name'];?>
</b>
                    </div>                          
				   <div class="deteo">
<div class="main_right_con" >
                	 <h1 class="inner_news_tit"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 </h1>
   <h2 class="inner_news_time"><a href="javascript:history.go(-1);">[ 返回列表 ]</a></h2>
   <div class="edit"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div>
<div style="height:30px;overflow: hidden; padding-top:7px; margin-top:15px; color:#fff; float:right;"><!-- Baidu Button BEGIN -->
<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

                      </div>
    <ul class="inner_pages">    
     <li><span>上一篇：</span><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
     <li><span>下一篇：</span><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
    </ul>

   			</div>
             
                    </div>                                
                </div>            
            </div>                
                            
            </div>
       </div>         
        <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

    </div>  
</body>
</html>
















<?php }} ?>
