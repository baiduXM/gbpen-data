<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:30:01
         compiled from "D:\Unify\app\views\templates\GP0009\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:21215640679958d7e4-36751471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd2d000a7ae22c8eba5f9e9e628f7d61b216878' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0009\\list-imagetext.html',
      1 => 1446530289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21215640679958d7e4-36751471',
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
    'article' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640679a00e623_70815888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640679a00e623_70815888')) {function content_5640679a00e623_70815888($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
<div class="ny_newshowsb">
            	<ul>
 <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>                    
                                
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                           <div class="casimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /></div>  
                           <div class="nrogjtaer">                  
                        	<div class="news_timerc">
                            	<div class="dateb"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%d');?>
<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%m');?>
</span></div>
                                <div class="n_wordc">
                               <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                                </div>
                                <div class="morejiac">+</div>
                            </div>
                            <div class="newsowordd">
                           <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                            </div>  
                            </div> 
                            </a>                 
                    </li>
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
        </div>  
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          
    </div>
</body>
</html>

<?php }} ?>
