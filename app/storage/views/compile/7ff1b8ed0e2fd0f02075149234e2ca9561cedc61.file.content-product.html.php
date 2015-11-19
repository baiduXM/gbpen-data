<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:22:52
         compiled from "D:\Unify\app\views\templates\GP0020\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:19899564d6abc19a2f3-82810203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff1b8ed0e2fd0f02075149234e2ca9561cedc61' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0020\\content-product.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19899564d6abc19a2f3-82810203',
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
    'article' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'proshowb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d6abc7ef762_54071775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6abc7ef762_54071775')) {function content_564d6abc7ef762_54071775($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class='content index'>
	<div class='container'>
		<div class='aside'>
<?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 			
		</div>
<div class='main'>
<h4><span><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</span><strong>
<ul class="clearfix">
	<li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
	<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
	<li class="fl"> >> <b><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></b></li>
	<?php } ?>
</ul> 
</strong></h4>
<div class='details pro-det'>
<!-- 			<div class='pro-pic' ><img width='350' height='231' src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /></div>
			<dl>
				<dt><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</dt>
				<dd></dd>
				<dd></dd>
				<dd></dd>
			</dl> -->
		
			<div class="pro-pic">
				
                  <div  id="slideBoxb" class="slideBoxb" style="margin:0 auto">
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
" /></li>
                                      
                                  <?php } ?>               
                          </ul>
                          <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
                        </div>      
                        <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>                  

                  </div>               

				
			</div>
			<!-- <h1>详细说明:</h1> -->
			<p>   <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
 </p>
			
							<div style="height:30px;overflow: hidden; padding-top:7px; margin-top:15px; color:#000; float:right;"><!-- Baidu Button BEGIN -->
<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

                      </div>
			<div class='other'>
上一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a><br />
下一篇：<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a>     
			</div>
		</div>
		</div>        

		
	</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
