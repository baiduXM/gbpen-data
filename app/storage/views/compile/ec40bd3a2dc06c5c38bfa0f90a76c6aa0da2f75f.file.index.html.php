<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:00:51
         compiled from "D:\Unify\app\views\templates\GP0008\index.html" */ ?>
<?php /*%%SmartyHeaderCode:14022564060c36f3d34-34584448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec40bd3a2dc06c5c38bfa0f90a76c6aa0da2f75f' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0008\\index.html',
      1 => 1445481994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14022564060c36f3d34-34584448',
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
    'article' => 0,
    'new' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564060c4242523_82686672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564060c4242523_82686672')) {function content_564060c4242523_82686672($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>


</head>

<body>
	<div class='wappers h_o'>	
		<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="prodcs public">
      <ul>
        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['products']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
             <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
<i><?php echo $_smarty_tpl->tpl_vars['article']->value['en_name'];?>
</i></span></a></li> 
             <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
        <?php } ?>
        </ul>
      </div>
      <div class="about h_o">
          <div class="public padding_15">
              <div class="ab_title p_r fl h_o"><h3><b><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['en_name'];?>
</b><?php echo $_smarty_tpl->tpl_vars['index']->value['about']['name'];?>
 </h3><span class="fr"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['image'];?>
"></span></div>
              <div class="ab_art fr">
              <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
" class="more">MORE+</a>
                <p class="article">
                    <?php echo $_smarty_tpl->tpl_vars['index']->value['about']['description'];?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about']['link'];?>
">[查看更多]</a>
                </p>
              </div>
          </div>
      </div>
      <div class="container public h_o">
            <div class="news fl">
              <h3 class="n_title"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</b><p><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['image'];?>
"></p></h3> 
              <ul class="news_list h_o">
                  <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?>
                  <li class="h_o"><div class="img"><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['new']->value['image'];?>
" /><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['pubtimestamp'],'%Y-%m-%d');?>
</span></a></div><div class="li_nr fr"><h2><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a></h2><p><?php echo $_smarty_tpl->tpl_vars['new']->value['description'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
">[查看更多]</a></p></div>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['new']->index+1==2) {?><?php break 1?><?php }?>
                  <?php } ?>
              </ul>
            </div>
            <div class="contact fr h_o">
              <img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact']['image'];?>
" />
              <div class="contact_nr h_o">
                    <h3><?php echo $_smarty_tpl->tpl_vars['global']->value['contact']['name'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['global']->value['contact']['en_name'];?>
</h3>
                    <span><?php echo $_smarty_tpl->tpl_vars['global']->value['contacts'];?>
</span>
              </div>
            </div>
      </div>
      <div class="product public h_o">
             <h3 class="title p_r"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['products']['link'];?>
">MORE+</a><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['name'];?>
<em><?php echo $_smarty_tpl->tpl_vars['index']->value['products']['en_name'];?>
</em></h3>
             <ul class="product_list h_o">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['products']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
              <?php if ($_smarty_tpl->tpl_vars['article']->index==0) {?> 
                 <div class="productfl fl">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /></a>
                    <span class="p_r">
                          <b><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</b>
                            <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">查看更多+</a>
                    </span>
                 </div>
                 <?php } elseif ($_smarty_tpl->tpl_vars['article']->index>0) {?>
                 <ul class="productfr fr">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /><span><i><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</i><em></em></span></a></li>
                 </ul>
                 <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                  <?php }?>
                 <?php } ?>
             </ul>
      </div>
    
       <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
</div>
</body>
</html>
















<?php }} ?>
