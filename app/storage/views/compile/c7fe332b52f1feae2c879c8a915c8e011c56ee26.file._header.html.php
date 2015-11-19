<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 09:39:29
         compiled from "D:\unify\app\views\templates\GM0077\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:325956492f84b97341-42571849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7fe332b52f1feae2c879c8a915c8e011c56ee26' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0077\\_header.html',
      1 => 1447753164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325956492f84b97341-42571849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56492f84c42582_61474888',
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
<?php if ($_valid && !is_callable('content_56492f84c42582_61474888')) {function content_56492f84c42582_61474888($_smarty_tpl) {?><header class="header">
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
