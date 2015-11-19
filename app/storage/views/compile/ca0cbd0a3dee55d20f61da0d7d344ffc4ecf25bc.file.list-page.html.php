<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 07:01:08
         compiled from "D:\unify\app\views\templates\GP0007\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:1703756419634d883e6-11255044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca0cbd0a3dee55d20f61da0d7d344ffc4ecf25bc' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0007\\list-page.html',
      1 => 1446795795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703756419634d883e6-11255044',
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
    'list' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56419635083973_29737122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419635083973_29737122')) {function content_56419635083973_29737122($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                        </span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</b>
                    </div>                          
				   <div class="deteo">
            <div class="ny_about">
                 <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['list']->value['content'], ENT_QUOTES);?>
                    
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
