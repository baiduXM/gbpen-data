<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:36:45
         compiled from "D:\Unify\app\views\templates\GP0002\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:3274656405ab680df42-64951417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf59d2f44f78587f20e60ac3d1205c96c276355d' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0002\\_footer.html',
      1 => 1447061039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3274656405ab680df42-64951417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405ab69a5f16_42765704',
  'variables' => 
  array (
    '_footer' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405ab69a5f16_42765704')) {function content_56405ab69a5f16_42765704($_smarty_tpl) {?><!-- footer start -->
<div class="footer clearfix">
	<div class="friend_link">
		<select onchange="self.location.href=options[selectedIndex].value">
		  <option value="<?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_1']['name'];?>
</option>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_2']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_2']['name'];?>
</option>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_3']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_3']['name'];?>
</option>
		  <option value="<?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_4']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['_footer']->value['friend_link_4']['name'];?>
</option>
		</select>
	</div>
	<div class="copyright"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
</div>
<!-- footer end --><?php }} ?>
