<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 08:52:48
         compiled from "D:\Unify\app\views\templates\GP0013\content-news.html" */ ?>
<?php /*%%SmartyHeaderCode:9768564aeae0d8a901-88014440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064fbaff1e012058d2269958bfe6be758da515a2' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0013\\content-news.html',
      1 => 1445591896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9768564aeae0d8a901-88014440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'stylecolor' => 0,
    'site_another_url' => 0,
    'title' => 0,
    'global' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'article' => 0,
    'related' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564aeae149f7e6_44681107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564aeae149f7e6_44681107')) {function content_564aeae149f7e6_44681107($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="x-ua-compatible" content="ie=8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>

<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style_<?php echo $_smarty_tpl->tpl_vars['stylecolor']->value;?>
.css" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="js/dd_delatedpng.js" ></script>
<script type="text/javascript">//如果多个element使用PNG,则用','分隔
DD_belatedPNG.fix('div,ul,li,a,p,img');
</script>
<![endif]-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/left.js"></script>

<script type="text/javascript">
	// 跳转手机页面
	<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
		if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
			location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
		}
	<?php }?>
	</script>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>


</head>

<body>
	<div class="wappers">
    	 <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

       <div class="containers">
			     <div class="left">
                  <div class="list" >
                      <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    
                      </div>                              
                  
          <div class="contactb">
                           <div class="list_title">联系我们</div>
                             <div class="ttal_ta">
          真诚欢迎您的来电！                   
                             </div>
          <div class="tela">
          <?php echo $_smarty_tpl->tpl_vars['global']->value['contact'];?>
   
           </div>             
                        
                        </div>  

          </div>        
             
<div class="right_a">
<div class="detal_s">
                	<div class="list_title"><span>所在位置:<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> &gt; <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
	 >> <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
	<?php } ?></span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</div>
<div class="deteo">
          <div class="main_right_con" >
                	 <h1 class="inner_news_tit"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
  </h1>
   <h2 class="inner_news_time"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
 </h2>
   <div class="edit"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
   </div>
<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['content']),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

    <ul class="inner_pages">
    <li>上一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
     <li>下一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
    </ul>
    <div class="news_lista">
    	<div class="xgxw">相关新闻：</div>
                        <ul> 	
                           <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>						
                             <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                             <?php if ($_smarty_tpl->tpl_vars['article']->index+1==6) {?><?php break 1?><?php }?>
                          <?php } ?>                                         
                          </ul>          
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
