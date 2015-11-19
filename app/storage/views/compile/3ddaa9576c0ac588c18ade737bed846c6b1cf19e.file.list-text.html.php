<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 07:01:13
         compiled from "D:\unify\app\views\templates\GP0007\list-text.html" */ ?>
<?php /*%%SmartyHeaderCode:167845641963992ead7-98834819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ddaa9576c0ac588c18ade737bed846c6b1cf19e' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0007\\list-text.html',
      1 => 1446795795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167845641963992ead7-98834819',
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
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56419639c9a816_38542591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419639c9a816_38542591')) {function content_56419639c9a816_38542591($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
                        </span><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</b>
                    </div>                          
				   <div class="deteo">
<div class="news_list">
                  <ul>
                   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                   <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span class="date"><time datetime="<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
" pubdate="pubdate"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
 </time></span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                <?php } ?>                                                                                                      
                  </ul>     
  <div class="module_page"  >
                第<?php echo $_smarty_tpl->tpl_vars['page_links']->value['current_page'];?>
页/共<?php echo $_smarty_tpl->tpl_vars['page_links']->value['page_count'];?>
 页      
              <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">[上一页]</a>
              <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                  <a class="current">[<?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
]</a></li>
                <?php } else { ?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
]</a></li>
                <?php }?>
              <?php } ?>     
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">[下一页]</a>
                         
                    
					</div>                                      
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
