<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:19:14
         compiled from "D:\unify\app\views\templates\GP0002\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:10571563c69841acdb3-95780541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23f2041fa19553cfd9335a26e3c50a4b952d1bd' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0002\\_footer.html',
      1 => 1447060683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10571563c69841acdb3-95780541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c69842a8885_48399114',
  'variables' => 
  array (
    '_footer' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c69842a8885_48399114')) {function content_563c69842a8885_48399114($_smarty_tpl) {?><!-- footer start -->
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
