<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:51:31
         compiled from "D:\Unify\app\views\templates\GP0005\_right_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:2501556405e936aea30-57052774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31a30ed1e63502f65db91c67b3bbb680c0ceecd7' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_right_nav.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501556405e936aea30-57052774',
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
  'unifunc' => 'content_56405e93767911_12700620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405e93767911_12700620')) {function content_56405e93767911_12700620($_smarty_tpl) {?><section>
	 <h2 class="top_pro"><span>当前位置:<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  -<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
  <?php } ?></span>
</h2>
</section><?php }} ?>
