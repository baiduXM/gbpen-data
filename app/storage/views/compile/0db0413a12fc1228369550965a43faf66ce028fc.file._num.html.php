<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 00:58:17
         compiled from "D:\unify\app\views\templates\GP0016\_num.html" */ ?>
<?php /*%%SmartyHeaderCode:25255564c1c558c6b00-98874763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0db0413a12fc1228369550965a43faf66ce028fc' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_num.html',
      1 => 1447838986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25255564c1c558c6b00-98874763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1c559c1120_94138176',
  'variables' => 
  array (
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1c559c1120_94138176')) {function content_564c1c559c1120_94138176($_smarty_tpl) {?><section>
               
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">[第一页]</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">[上一页]</a>
                <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                    <a><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
                <?php }?>
                <?php } ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">[下一页]</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">[最后页]</a>
</section><?php }} ?>
