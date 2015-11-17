<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 02:01:40
         compiled from "D:\Unify\app\views\templates\GM0001\_list_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:254725645448486d124-54595028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dec0705af2c35b88422829ea7b3f4c2ff68e71b' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0001\\_list_nav.html',
      1 => 1446795347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254725645448486d124-54595028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5645448493ec00_66154940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5645448493ec00_66154940')) {function content_5645448493ec00_66154940($_smarty_tpl) {?><nav class="pag_nav">
<ul class="clearfix">
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>cur<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
  </li>
  <?php } ?>
</ul>
</nav><?php }} ?>
