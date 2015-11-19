<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 00:58:17
         compiled from "D:\unify\app\views\templates\GP0016\_right_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:24422564c1c558383e7-57278593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ad1ea42c465246d0963df2afb416d889ce0029a' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_right_nav.html',
      1 => 1447838987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24422564c1c558383e7-57278593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1c558b2869_99960398',
  'variables' => 
  array (
    'site_url' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1c558b2869_99960398')) {function content_564c1c558b2869_99960398($_smarty_tpl) {?><section>
	<h3 class="about_title tit"><em class="more"><span>当前位置</span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  - <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a>
  <?php } ?>
</em><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h3>
</section>


 <?php }} ?>
