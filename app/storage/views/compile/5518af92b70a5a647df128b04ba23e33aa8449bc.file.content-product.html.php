<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 01:10:25
         compiled from "D:\unify\app\views\templates\GP0016\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:16284564c384e411ec5-09514759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5518af92b70a5a647df128b04ba23e33aa8449bc' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\content-product.html',
      1 => 1447838986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16284564c384e411ec5-09514759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c384e6d3109_18906927',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c384e6d3109_18906927')) {function content_564c384e6d3109_18906927($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- 调试代码 End -->
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
css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
 <script id="jsID" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_nav.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_banner.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_pic.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery_sz.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/left_nav.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
 <!-- 头部开始 -->
 <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <div class="contant">
          <div class="contant_left">
        <div class="left1 aboutl">
         <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="left4">
          <h3 class="title left4_title">联系我们&nbsp;<span>CONTACT US</span></h3>
          <?php echo $_smarty_tpl->getSubTemplate ("./_global.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
      </div>
          <div class="about_r"><?php echo $_smarty_tpl->getSubTemplate ("./_pro_right_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              <div class="info pro_det">
              <div class="description">
        
         <div class="pimgw"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="282" width="331"/><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>

          </div>

         <div class="neir"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
    <div style="height:30px;overflow: hidden; padding-top:7px; color:#000;">
<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

                </div>
            <ul class="inner_pages">
     <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
     <li><a href="$article.next.link">下一篇：<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
    </ul>
              </div>
          </div>
  </div>
 <!-- 头部结束 -->
 <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
