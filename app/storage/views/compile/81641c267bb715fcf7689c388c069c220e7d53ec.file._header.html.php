<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 09:19:42
         compiled from "D:\unify\app\views\templates\GM0077\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:29177564b029248eef9-99337647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81641c267bb715fcf7689c388c069c220e7d53ec' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0077\\_header.html',
      1 => 1447838379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29177564b029248eef9-99337647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564b029295cb50_34250617',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564b029295cb50_34250617')) {function content_564b029295cb50_34250617($_smarty_tpl) {?><header class="header">
  <div class="top clearfix">
    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="to_home"><i class="icon iconfont">&#xe620;</i></a>
    <h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a></h1> 

    <div class="header_menu" id="header_menu"><i class="icon iconfont">&#xe603;</i></div>
  </div>
  <!-- 滚轮图 -->
    <div class="swiper_container">
        <div class="swiper-wrapper">
          <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
            <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['slidepic']->value['title']);?>
"></div>
          <?php } ?> 
        </div>  
    </div>     
</header>
<?php }} ?>
