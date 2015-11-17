<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:32:31
         compiled from "D:\Unify\app\views\templates\GP0009\list-page.html" */ ?>
<?php /*%%SmartyHeaderCode:307835640682f43e960-67811665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1461e947b629c0b25ab2c32efd941c536b620664' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0009\\list-page.html',
      1 => 1446530289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307835640682f43e960-67811665',
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
    'global' => 0,
    'showpic' => 0,
    'search_action' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640682fb97c02_10448376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640682fb97c02_10448376')) {function content_5640682fb97c02_10448376($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
js/jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
<title>厦门近思机械设计有限公司</title>
</head>

<body>
	<div class="wrap">
    <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="i_bgd">
        	<div class="public ny_content">
            	<div class="inbter_content">
                   <div class="ny_leftside fl">
                        <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub4.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
                         <div class="caselist">
<div class="focusBoxb">
                            <ul class="pic">
                             <?php  $_smarty_tpl->tpl_vars['showpic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showpic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['showpics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['showpic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['showpic']->key => $_smarty_tpl->tpl_vars['showpic']->value) {
$_smarty_tpl->tpl_vars['showpic']->_loop = true;
 $_smarty_tpl->tpl_vars['showpic']->index++;
?>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['title'];?>
" /></a></li>                            
                             <?php } ?> 
                            </ul>
                            <div class="txt-bg"></div>
                            <div class="txt">
                                <ul>
                                 <?php  $_smarty_tpl->tpl_vars['showpic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showpic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['showpics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['showpic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['showpic']->key => $_smarty_tpl->tpl_vars['showpic']->value) {
$_smarty_tpl->tpl_vars['showpic']->_loop = true;
 $_smarty_tpl->tpl_vars['showpic']->index++;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['showpic']->value['title'];?>
</a></li>                            
                                 <?php } ?>                                     
                                </ul>
                            </div>
                
                            <ul class="num">
                           <?php  $_smarty_tpl->tpl_vars['showpic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showpic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['showpics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['showpic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['showpic']->key => $_smarty_tpl->tpl_vars['showpic']->value) {
$_smarty_tpl->tpl_vars['showpic']->_loop = true;
 $_smarty_tpl->tpl_vars['showpic']->index++;
?>
                             <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['showpic']->index+1;?>
</a><span></span></li>
                           <?php } ?> 
                           
                            </ul>
                    </div>                    
                    </div>   
<div class="caselist">
<div class="focusBoxc">
                            <ul class="pic">
                             <?php  $_smarty_tpl->tpl_vars['showpic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showpic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['showpictows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['showpic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['showpic']->key => $_smarty_tpl->tpl_vars['showpic']->value) {
$_smarty_tpl->tpl_vars['showpic']->_loop = true;
 $_smarty_tpl->tpl_vars['showpic']->index++;
?>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['title'];?>
" /></a></li>                            
                             <?php } ?> 
                            </ul>
                            <div class="txt-bg"></div>
                            <div class="txt">
                                <ul>
                                 <?php  $_smarty_tpl->tpl_vars['showpic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showpic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['showpictows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['showpic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['showpic']->key => $_smarty_tpl->tpl_vars['showpic']->value) {
$_smarty_tpl->tpl_vars['showpic']->_loop = true;
 $_smarty_tpl->tpl_vars['showpic']->index++;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['showpic']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['showpic']->value['title'];?>
</a></li>                            
                                 <?php } ?>                                     
                                </ul>
                            </div>
                
                            <ul class="num">
                           <?php  $_smarty_tpl->tpl_vars['showpic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showpic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['showpictows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['showpic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['showpic']->key => $_smarty_tpl->tpl_vars['showpic']->value) {
$_smarty_tpl->tpl_vars['showpic']->_loop = true;
 $_smarty_tpl->tpl_vars['showpic']->index++;
?>
                             <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['showpic']->index+1;?>
</a><span></span></li>
                           <?php } ?> 
                           
                            </ul>
                    </div>                    
                    </div>                                                         
                    </div>  
                    <div class="ny_rightside fr">
            <div class="anougsearch anernewsliat fr">
                	<div class="search">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                           <span><input type="text" class="txtq" name="s" value="" /></span>
                            <input type="submit" class="btm1" />
                        </form>                        
                    </div> 
                </div>                   
                    <div class="detal_s">
                        <div class="ny_title">
                            <span><ul class="clearfix">
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
                            </ul>             </span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

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
        </div>  
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          
    </div>
</body>
</html>

<?php }} ?>
