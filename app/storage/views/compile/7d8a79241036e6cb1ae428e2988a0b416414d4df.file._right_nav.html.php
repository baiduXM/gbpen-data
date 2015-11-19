<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:29:43
         compiled from "D:\unify\app\views\templates\GP0006\_right_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:303515642fc7774d202-17776935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d8a79241036e6cb1ae428e2988a0b416414d4df' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_right_nav.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303515642fc7774d202-17776935',
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
  'unifunc' => 'content_5642fc779dd306_17129915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642fc779dd306_17129915')) {function content_5642fc779dd306_17129915($_smarty_tpl) {?><section>
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
