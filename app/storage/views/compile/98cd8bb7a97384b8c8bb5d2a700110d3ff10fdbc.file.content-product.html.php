<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:48:34
         compiled from "D:\unify\app\views\templates\GP0008\content-product.html" */ ?>
<?php /*%%SmartyHeaderCode:23862563fed62e2c094-07691654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98cd8bb7a97384b8c8bb5d2a700110d3ff10fdbc' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0008\\content-product.html',
      1 => 1447029715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23862563fed62e2c094-07691654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'title' => 0,
    'article' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'image' => 0,
    'search_action' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fed632ea917_19622864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fed632ea917_19622864')) {function content_563fed632ea917_19622864($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
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
 

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-CN">
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js">
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/global.js"></script>

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
<div class="wrap">
     <!-- 导入头部文件（内页公用） -->
     <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="content">
        <h1 class="ny-tit"><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>

            <span>当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
           <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
             &gt; <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
           <?php } ?></span>
       </h1>
       <div class="ny-left fl">

            <div class="ny-det">
              <div class="det-img">
              <div class="bd">
                  <ul>
              <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
              <li><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['image'];?>
" height="230" width="350"/><h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1></li>
              <?php } ?>
            </ul>
          </div>
              </div>
              <div class="ny-con">
                <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>

                <div class="share"><?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

                </div>
              </div>
            </div>
            <ul class='article-paging'>
              <li><b>上一篇：</b><a href='<?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['link'];?>
'><?php echo $_smarty_tpl->tpl_vars['article']->value['prev']['title'];?>
</a></li>
              <li><b>下一篇：</b><a href='<?php echo $_smarty_tpl->tpl_vars['article']->value['next']['link'];?>
"'><?php echo $_smarty_tpl->tpl_vars['article']->value['next']['title'];?>
</a></li>
            </ul>
       </div>
       <div class="ny-right fr">
           <div class="ny-search">
               <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                      <input class="searchbox" type="text" name="s" value="请输入关键字" />
                      <div class="searchbtn"><input type="submit" value="" /></div>
               </form>   
           </div>       
           <!-- 导入侧导航 -->
           <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           <div class="new-latest">
              <h1><?php echo $_smarty_tpl->tpl_vars['global']->value['news']['name'];?>
</h1>
              <ul>
                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['article']->index+1==5) {?><?php break 1?><?php }?>
                <?php } ?>
              </ul>  
           </div>
       </div>
     </div>
     <!-- 导入底部文件 -->
   <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html>
<?php }} ?>
