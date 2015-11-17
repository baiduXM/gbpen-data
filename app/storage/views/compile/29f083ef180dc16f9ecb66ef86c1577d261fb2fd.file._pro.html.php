<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:51:31
         compiled from "D:\Unify\app\views\templates\GP0005\_pro.html" */ ?>
<?php /*%%SmartyHeaderCode:336456405e9377f5b2-60110021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29f083ef180dc16f9ecb66ef86c1577d261fb2fd' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_pro.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336456405e9377f5b2-60110021',
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
  'unifunc' => 'content_56405e93861eb1_06318658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405e93861eb1_06318658')) {function content_56405e93861eb1_06318658($_smarty_tpl) {?><section>
<ul>
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /></a><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                            
                        </li>
  <?php } ?>
            </ul>
            </section><?php }} ?>
