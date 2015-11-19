<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 00:58:17
         compiled from "D:\unify\app\views\templates\GP0016\_pro.html" */ ?>
<?php /*%%SmartyHeaderCode:10504564c3786aface4-25002429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4349ab9a99baa9d336703a867b2aba9e57b607c1' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_pro.html',
      1 => 1447838987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10504564c3786aface4-25002429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c3786b91c88_18282515',
  'variables' => 
  array (
    'list' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c3786b91c88_18282515')) {function content_564c3786b91c88_18282515($_smarty_tpl) {?><section>
<ul>
              <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="140" width="187" class="img"/></a><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                            
                        </li>
                         <?php if ($_smarty_tpl->tpl_vars['article']->index+1==12) {?><?php break 1?><?php }?>
  <?php } ?>
            </ul>
            </section><?php }} ?>
