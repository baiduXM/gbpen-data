<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 09:21:45
         compiled from "D:\unify\app\views\templates\GM0063\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:26958564188634b11f1-25251705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329c1c2c54dd3664a028d0d9d8f2ecbaab9be83f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0063\\_header.html',
      1 => 1447406501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26958564188634b11f1-25251705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564188634f78e4_46898669',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564188634f78e4_46898669')) {function content_564188634f78e4_46898669($_smarty_tpl) {?><header class="header">

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
