<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 10:31:49
         compiled from "D:\unify\app\views\templates\GM0076\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:8847564b02157fde12-40783663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6235d5f391a6e29fbad4f33862e4978f1633fa7' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0076\\_header.html',
      1 => 1447407545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8847564b02157fde12-40783663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'contact' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564b02158a7141_57743781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564b02158a7141_57743781')) {function content_564b02158a7141_57743781($_smarty_tpl) {?><header class="header">

  <h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a></h1> 
  <div class="company"><?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
</div>

  <div class="header_menu" id="header_menu"><i class="icon iconfont">&#xe603;</i></div>
  
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
