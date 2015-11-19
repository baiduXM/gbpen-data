<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 01:55:24
         compiled from "D:\Unify\app\views\templates\GP0014\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:22733564d2c0c96a9d5-27121084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e9690a6de250146a3464ec13d775cc75ac2603' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0014\\_footer.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22733564d2c0c96a9d5-27121084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'footprint' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d2c0cddc9a7_17626770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d2c0cddc9a7_17626770')) {function content_564d2c0cddc9a7_17626770($_smarty_tpl) {?>
    <div class="bottom">
    	<dl>

		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list3']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list3']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list4']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list4']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list5']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list5']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list6']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list6']['name'];?>
</a> |
		<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list7']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list7']['name'];?>
</a> 



        </dl>
		<dl><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
 电话：<?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
 手机：<?php echo $_smarty_tpl->tpl_vars['contact']->value['mobile'];?>
</dl>
    </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  <?php }} ?>
