<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 02:08:01
         compiled from "D:\unify\app\views\templates\GP0006\_pro_right_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:14089564000014351d4-54497596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9454e754790329e57e55ed1f66e59b681eb92c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_pro_right_nav.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14089564000014351d4-54497596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'posnavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56400001497a40_87301268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56400001497a40_87301268')) {function content_56400001497a40_87301268($_smarty_tpl) {?>
<section>
	 <h2 class="top_pro"><span class="more">当前位置:<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  -<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
  <?php } ?>
</span></h2>
</section><?php }} ?>
