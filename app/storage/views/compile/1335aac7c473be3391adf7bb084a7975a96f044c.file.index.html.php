<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 01:31:50
         compiled from "D:\unify\app\views\templates\GP0008\index.html" */ ?>
<?php /*%%SmartyHeaderCode:30044563fec109a4670-32456398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1335aac7c473be3391adf7bb084a7975a96f044c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0008\\index.html',
      1 => 1447119107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30044563fec109a4670-32456398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fec111854b1_51387630',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'title' => 0,
    'headscript' => 0,
    'logo' => 0,
    'search_action' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'index' => 0,
    'slidepic' => 0,
    'global' => 0,
    'new' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fec111854b1_51387630')) {function content_563fec111854b1_51387630($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
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
  <script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
  <!-- <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/global.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
<div class="wrap">
  <div class="header">
    <div class="public">
      <div class="logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">
          <left><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="80px"></left></a>
      </div>
      <div class="search">
        <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
          <input class="searchbox" type="text" name="s" value="请输入关键字" />
          <div class="searchbtn">
            <input type="submit" value="" />
          </div>
        </form>
      </div>
      <div class="menu">
        <ul class="nav">
          <li>
            <h3>
              <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a>
            </h3>
          </li>
          <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
          <li class="nLi <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
            <h3>
              <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
            </h3>
            <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
            <ul class="subnav">
              <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
              </li>
              <?php } ?>
            </ul>
            <?php }?>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="banner">

    <div class="focusBox" style="margin:0 auto">
      <ul class="pic">
        <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank">
            <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" width="100%" height="559px" />
          </a>
        </li>
        <?php } ?>
      </ul>
      <ul class="hd">
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

  </div>
  <div class="content">
    <div class="row">
      <div class="about fl">
        <h1 class="title">
          <?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['name'];?>

          <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">更多 +</a>
        </h1>
        <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
" class="about-nr">
          <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['image'];?>
" width="281" height="95px"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['index']->value['about_us']['description'],110,"…");?>
</a>
      </div>
      <div class="news fl">
        <h1 class="title">
          <?php echo $_smarty_tpl->tpl_vars['global']->value['news']['name'];?>

          <a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['news']['link'];?>
">更多 +</a>
        </h1>
        <div class="newbox">
          <dl>
            <a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['news']['link'];?>
">
              <img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['news']['image'];?>
" width="129" height="95px"></a>
          </dl>
          <dt>
            <a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['news']['data'][0]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['news']['data'][0]['title'];?>
</a>
            <span><?php echo $_smarty_tpl->tpl_vars['global']->value['news']['data'][0]['pubdate'];?>
</span>
          </dt>
          <dd><?php echo $_smarty_tpl->tpl_vars['global']->value['news']['data'][0]['description'];?>
</dd>
        </div>
        <ul class="newslist">
          <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?>
          <?php if ($_smarty_tpl->tpl_vars['new']->index+1==1) {?><?php continue 1?><?php }?>
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>

              <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['pubtimestamp'],'%Y / %m / %d');?>
</span>
            </a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['new']->index+1==4) {?><?php break 1?><?php }?>
                     <?php } ?>
        </ul>
      </div>
      <div class="contact fr">
        <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['index']->value['contactimg']['title'];?>
</h1>
        <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['contactimg']['link'];?>
">
          <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['contactimg']['image'];?>
" width="281" height="95px"></a>
        <?php echo $_smarty_tpl->tpl_vars['index']->value['contact_us'];?>

      </div>
    </div>
    <div class="pro">
      <h1 class="title">
        <?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
">更多 +</a>
      </h1>
      <div id="prizes">
        <div class="photos">

          <div class="photos-content" style="visibility:hidden">
            <ul>
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                  <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="174px" height="131px" />
                  <h2>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                    <p>+</p>
                  </h2>
                </a>
              </li>
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
</html><?php }} ?>
