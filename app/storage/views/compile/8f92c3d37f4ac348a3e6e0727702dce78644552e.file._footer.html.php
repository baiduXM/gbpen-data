<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 03:16:34
         compiled from "D:\unify\app\views\templates\GP0017\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:579564c1c8e5626a5-36410823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f92c3d37f4ac348a3e6e0727702dce78644552e' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0017\\_footer.html',
      1 => 1447829782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579564c1c8e5626a5-36410823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1c8e600323_97576543',
  'variables' => 
  array (
    'global' => 0,
    'link' => 0,
    'footprint' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1c8e600323_97576543')) {function content_564c1c8e600323_97576543($_smarty_tpl) {?>      <div class="fobgs">
      	<div class="mid_f">
        <b>友情链接：</b>
        <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a> | 
        <?php } ?><br />
		<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 版权所有 技术支持：厦门易尔通网络科技有限公司<br />
        </div>
      </div>   
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  <?php }} ?>
