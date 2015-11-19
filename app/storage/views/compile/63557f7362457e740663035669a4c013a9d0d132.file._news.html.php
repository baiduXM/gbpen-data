<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 01:14:01
         compiled from "D:\unify\app\views\templates\GP0016\_news.html" */ ?>
<?php /*%%SmartyHeaderCode:32575564c429842c591-26679750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63557f7362457e740663035669a4c013a9d0d132' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_news.html',
      1 => 1447838986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32575564c429842c591-26679750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c42984af471_44087630',
  'variables' => 
  array (
    'list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c42984af471_44087630')) {function content_564c42984af471_44087630($_smarty_tpl) {?><section>
	<ul class="module_news">
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><div class="ti"><span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div></a></li>
                <?php } ?>
            </ul>
</section><?php }} ?>
