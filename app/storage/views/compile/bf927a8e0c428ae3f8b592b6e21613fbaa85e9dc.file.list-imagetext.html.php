<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:51:39
         compiled from "D:\Unify\app\views\templates\GP0005\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:2660856405e9b3c7234-34953619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf927a8e0c428ae3f8b592b6e21613fbaa85e9dc' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\list-imagetext.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2660856405e9b3c7234-34953619',
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
    'list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405e9b75a271_18550960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405e9b75a271_18550960')) {function content_56405e9b75a271_18550960($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/style.css" rel="stylesheet" type="text/css" />

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

</head>
<body>
     <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
     <div class="contant_about">
        <div class="about_l f_l">
           <?php echo $_smarty_tpl->getSubTemplate ("./_pagenavs_sub3.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <div class="lx"><div class="lx_q"><?php echo $_smarty_tpl->getSubTemplate ("./_global.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div>
        </div>
         <div class="about_r f_r">
           <?php echo $_smarty_tpl->getSubTemplate ("./_right_nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

           <div class="info new_two">
    <ul>   
       <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?> 
       <li>
          <div class="nimgb"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
"/></a></div>
          <div class="right_news"><div class="nlist_a"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></div>
           <div class="nlist_word"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                                </div>
                                </div>
                            </li>     
        <?php } ?>                          
 
                          </ul>
                           <div class="num"><?php echo $_smarty_tpl->getSubTemplate ("./_num.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
           </div>
         </div>
      </div>
     <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script id="jsID" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
</body>
</html>

<?php }} ?>
