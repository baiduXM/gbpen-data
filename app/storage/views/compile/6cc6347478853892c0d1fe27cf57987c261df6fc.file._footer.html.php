<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:04:43
         compiled from "D:\Unify\app\views\templates\GP0014\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:225455649800b486fc6-73090147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc6347478853892c0d1fe27cf57987c261df6fc' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0014\\_footer.html',
      1 => 1445591903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225455649800b486fc6-73090147',
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
  'unifunc' => 'content_5649800b7e8182_24501262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649800b7e8182_24501262')) {function content_5649800b7e8182_24501262($_smarty_tpl) {?>
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
