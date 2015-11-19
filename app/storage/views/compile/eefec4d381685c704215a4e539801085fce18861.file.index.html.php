<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:42:37
         compiled from "D:\Unify\app\views\templates\GP0019\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26815564d6f5d25af15-52535772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eefec4d381685c704215a4e539801085fce18861' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0019\\index.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26815564d6f5d25af15-52535772',
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
    'headscript' => 0,
    'index' => 0,
    'new' => 0,
    'contact' => 0,
    'global' => 0,
    'naver' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d6f5dacbf00_06872660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6f5dacbf00_06872660')) {function content_564d6f5dacbf00_06872660($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>


</head>

<body>
	<div class='wappers h_o'>	
<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="containers h_o">
            <div class="contant h_o">
                <div class="public">
                    <div class="contant_top h_o">
                        <div class="about fl h_o">
                          <h3 class="c_title"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['en_name'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
</h3>
                          <div class="about_art h_o">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
">
                            <p class="article">
                              <?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>

                            </p>
                          </div>
                        </div>
                        <div class="news fl h_o">
                          <h3 class="c_title"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</h3>
                          <ul class="news_list h_o">
                            <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?>
                            <li class="h_o"><img src="<?php echo $_smarty_tpl->tpl_vars['new']->value['image'];?>
" /><div class="li_nr"><h2><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a></h2><p><?php echo $_smarty_tpl->tpl_vars['new']->value['description'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
">【详细】</a></p></div>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['new']->index+1==2) {?><?php break 1?><?php }?>
                            <?php } ?>
                          </ul>
                        </div>
                        <div class="contact fr h_o">
                          <h3 class="c_title"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['contact']['en_name'];?>
</b> <?php echo $_smarty_tpl->tpl_vars['index']->value['contact']['name'];?>
</h3>
                          <div class="contact_art h_o">
                              <span class="tel">
                                <b>咨询热线：<?php echo $_smarty_tpl->tpl_vars['contact']->value['mobile'];?>
</b>
                                姓名:<?php echo $_smarty_tpl->tpl_vars['contact']->value['name'];?>
<br/>
                                QQ：:<?php echo $_smarty_tpl->tpl_vars['contact']->value['qq'];?>
<br/>
                                手机:<?php echo $_smarty_tpl->tpl_vars['contact']->value['mobile'];?>
<br/>
                                地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
<br/>
                              </span>
                              <ul class="navss">
                               <?php  $_smarty_tpl->tpl_vars['naver'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['naver']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['second_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['naver']->key => $_smarty_tpl->tpl_vars['naver']->value) {
$_smarty_tpl->tpl_vars['naver']->_loop = true;
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['naver']->value['link'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['naver']->value['icon'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['naver']->value['name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['naver']->value['en_name'];?>
</a></li>
                                 <?php if ($_smarty_tpl->tpl_vars['new']->index+1==3) {?><?php break 1?><?php }?> 
                                <?php } ?>
                              </ul>
                          </div>
                        </div>
                    </div>
                    <div class="products">
                      <h3 class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['products']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.jpg"></a><em><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['en_name'];?>
</em><i><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['name'];?>
</i></h3>
                      <div class="picMarquee-left">         
                        <div class="bd">
                          <ul class="picList">
                          <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['products']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                            <li>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" /><span class='case_title'><?php echo $_smarty_tpl->tpl_vars['product']->value['title'];?>
</span></a>
                            </li>
                            <?php } ?>
                          </ul>
                        </div>
                      </div>
                 </div>
               </div>
            </div>
      </div>    
<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
















<?php }} ?>
