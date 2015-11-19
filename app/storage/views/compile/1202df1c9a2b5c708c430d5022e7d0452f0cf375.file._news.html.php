<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:29:49
         compiled from "D:\unify\app\views\templates\GP0006\_news.html" */ ?>
<?php /*%%SmartyHeaderCode:38485642fc7de0b727-75480643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1202df1c9a2b5c708c430d5022e7d0452f0cf375' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_news.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38485642fc7de0b727-75480643',
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
  'unifunc' => 'content_5642fc7de9a1a2_38362811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642fc7de9a1a2_38362811')) {function content_5642fc7de9a1a2_38362811($_smarty_tpl) {?><section>
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
