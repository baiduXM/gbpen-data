<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:29:45
         compiled from "D:\unify\app\views\templates\GP0006\_pro.html" */ ?>
<?php /*%%SmartyHeaderCode:156535642fc799689b0-83295813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d75a3d5aef8927222c2233c1e3bffec6cd10cbe' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_pro.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156535642fc799689b0-83295813',
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
  'unifunc' => 'content_5642fc799f0933_83446850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642fc799f0933_83446850')) {function content_5642fc799f0933_83446850($_smarty_tpl) {?><section>
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
