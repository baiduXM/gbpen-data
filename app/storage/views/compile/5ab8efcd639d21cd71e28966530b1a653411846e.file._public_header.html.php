<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 10:12:14
         compiled from "D:\Unify\app\views\templates\GM0008\_public_header.html" */ ?>
<?php /*%%SmartyHeaderCode:314415640717ec71a15-00174088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ab8efcd639d21cd71e28966530b1a653411846e' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0008\\_public_header.html',
      1 => 1446707404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314415640717ec71a15-00174088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640717ed362d1_43879816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640717ed362d1_43879816')) {function content_5640717ed362d1_43879816($_smarty_tpl) {?><div class="baner">
	<div id="slideBox" class="slideBox">
		<div class="hd">
			<ul></ul>
		</div>
		<div class="bd">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
				<li>
					<a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" title="640*376" />
					</a>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
</div><?php }} ?>
