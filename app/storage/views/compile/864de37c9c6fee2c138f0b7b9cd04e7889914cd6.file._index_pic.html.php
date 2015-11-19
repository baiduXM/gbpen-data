<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 09:29:54
         compiled from "D:\unify\app\views\templates\GP0016\_index_pic.html" */ ?>
<?php /*%%SmartyHeaderCode:10138564c14d52a0807-86982976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '864de37c9c6fee2c138f0b7b9cd04e7889914cd6' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_index_pic.html',
      1 => 1447838986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10138564c14d52a0807-86982976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c14d5359bb2_13680735',
  'variables' => 
  array (
    'index' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c14d5359bb2_13680735')) {function content_564c14d5359bb2_13680735($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><section>

      <div class="picMarquee">
				<ul class="picList">

					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list4']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                         <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
 class="pic""><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"  height="116" width="133" />
                         <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['title'],7,"…");?>
</a> </a></li>
                    <?php } ?>

				</ul>

			</div>
</section><?php }} ?>
