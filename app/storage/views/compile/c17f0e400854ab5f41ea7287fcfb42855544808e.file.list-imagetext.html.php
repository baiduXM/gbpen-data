<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:27:40
         compiled from "D:\Unify\app\views\templates\GP0008\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:83345640670c54d4e2-31157539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17f0e400854ab5f41ea7287fcfb42855544808e' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0008\\list-imagetext.html',
      1 => 1445481994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83345640670c54d4e2-31157539',
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
  'unifunc' => 'content_5640670cb83607_01111478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640670cb83607_01111478')) {function content_5640670cb83607_01111478($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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

        <div class="container h_o public">
		  	<div class="left fl">
             <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
                          
			</div>			  
			<div class="right h_o fr">
				<h3 class="title">
	            	<span class="location fr">当前位置:<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> &gt; <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>>> <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
					<?php } ?>
					</span>
					<b><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</b><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>

				</h3>
				<div class="article h_o">
	            	<ul class="ny_news_list" >
            			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
						   <li class="h_o"><div class="img"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
</span></a></div><div class="li_nr1 fr"><h2><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h2><p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">[查看更多]</a></div>
                  			</li> 
           				<?php } ?>  
		  			</ul>

                    <ul class="clearfix munber">
						<li ><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首页</a></li>
						<li ><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a></li>
						<?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
							<li class=" current"><a><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a></li>
						<?php }?>
						<?php } ?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">末页</a></li>
					</ul>
	            </div>     
       		</div>  
       </div>
      <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 	
</div>    
</body>
</html>
















<?php }} ?>
