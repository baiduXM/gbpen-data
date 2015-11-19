<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 03:16:34
         compiled from "D:\unify\app\views\templates\GP0017\index.html" */ ?>
<?php /*%%SmartyHeaderCode:30908564c1c95a4e5a1-86828804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f23f4e0007818ef09fa2573687a0516728857d4' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0017\\index.html',
      1 => 1447829782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30908564c1c95a4e5a1-86828804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1c9608bb50_81127168',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'title' => 0,
    'headscript' => 0,
    'index' => 0,
    'article' => 0,
    'wonder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1c9608bb50_81127168')) {function content_564c1c9608bb50_81127168($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/animation.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
	<div class="wappers">
        <!-- 头部文件引入 -->
      <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
      <div class="containers">
        <div class="xwzx">
          <div class="news">
              <div class="ne_titles"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</div>
                <div class="xd_detalbg">
                  <div class="nimgs"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['image'];?>
" height="137" width="210" /></a></div>
                    <div class="new_p">
                      <div class="news_titles"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['title'];?>
</a></div>
                        <div class="news_edit"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['description'];?>
</div>
                        <div class="morsa"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['link'];?>
">查看详细</a></div>
                    </div>
                </div>
            </div>
            <div class="news_detal">
                    <ul>  
                      <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                      <?php if ($_smarty_tpl->tpl_vars['article']->index+1==1) {?><?php continue 1?><?php }?>
                                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>             
            </div>
        </div>
        <div class="index">
          <div class="left_about">
              <div class="a_titles"><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['name'];?>
</div>
                <div class="borders">
<img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['image'];?>
" height="125" width="134"/>
                      <div class="anputt">
                             <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
"> <?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['description'];?>
</a>
                      </div>                
                </div>
            </div>
            <div class="jcsj">
            <div class="a_titles"><?php echo $_smarty_tpl->tpl_vars['index']->value['wonderful']['name'];?>
</div>
            <div class="borders2">
<div id="box">
  <ul>
    <?php  $_smarty_tpl->tpl_vars['wonder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wonder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['wonderful']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['wonder']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['wonder']->key => $_smarty_tpl->tpl_vars['wonder']->value) {
$_smarty_tpl->tpl_vars['wonder']->_loop = true;
 $_smarty_tpl->tpl_vars['wonder']->index++;
?>
    <li class="hove"><span class="hove"><div class="num"><?php echo $_smarty_tpl->tpl_vars['wonder']->index+1;?>
</div><?php echo $_smarty_tpl->tpl_vars['wonder']->value['title'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['wonder']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['wonder']->value['image'];?>
" height="108" width="165"  class="pimgs"></a></li>
    <?php if ($_smarty_tpl->tpl_vars['wonder']->index+1==4) {?><?php break 1?><?php }?>
    <?php } ?>
  </ul>
</div>
            </div>
            
            </div>
            <div class="kecjs">
              <div class="a_titles"><?php echo $_smarty_tpl->tpl_vars['index']->value['course']['name'];?>
</div>
                <div class="borders3">
          <div class="cimgs"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['course']['data'][0]['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['course']['data'][0]['image'];?>
" height="125" width="134" /></a></div>
                    <div class="music">
                      <ul>
                          <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['course']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                                   <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
                          <?php } ?>   
                                                                                 
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
      </div>  
<?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>      
</body>
</html>
















<?php }} ?>
