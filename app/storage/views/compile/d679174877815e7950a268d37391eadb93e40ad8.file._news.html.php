<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:52:43
         compiled from "D:\Unify\app\views\templates\GP0005\_news.html" */ ?>
<?php /*%%SmartyHeaderCode:1927656405edbdc5721-94119210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd679174877815e7950a268d37391eadb93e40ad8' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_news.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927656405edbdc5721-94119210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405edbe957b6_88021582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405edbe957b6_88021582')) {function content_56405edbe957b6_88021582($_smarty_tpl) {?><section>
	<ul class="module_news">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                <?php } ?>
            </ul>
</section><?php }} ?>
