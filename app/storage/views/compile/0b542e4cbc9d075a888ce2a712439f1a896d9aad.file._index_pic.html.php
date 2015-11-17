<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:04:47
         compiled from "D:\Unify\app\views\templates\GP0016\_index_pic.html" */ ?>
<?php /*%%SmartyHeaderCode:3173056442bff132e13-69909487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b542e4cbc9d075a888ce2a712439f1a896d9aad' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0016\\_index_pic.html',
      1 => 1445593836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3173056442bff132e13-69909487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'article' => 0,
    '_header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56442bff2d8a19_58004293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442bff2d8a19_58004293')) {function content_56442bff2d8a19_58004293($_smarty_tpl) {?><section>
<div class="slide">
        <ul>
          
          <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list1']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                         <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="pro"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"  height="auto" width="333" /> </a>
                         <h3 class="title"><div class="banck"></div><span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</span></h3></li>
                         <?php if ($_smarty_tpl->tpl_vars['article']->index+1==9) {?><?php break 1?><?php }?>
          <?php } ?>
        </ul>
</div>
<div class="hd">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_header']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['slidepic']->index+1;?>
</li>
                <?php } ?>
            </ul>
</div>
</section><?php }} ?>
