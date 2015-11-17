<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 02:14:07
         compiled from "D:\Unify\app\views\templates\GM0018\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:14671564152ef38b341-32214017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18c3637140c56ce2772f06c09cb0059f946b890' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0018\\_header.html',
      1 => 1446631369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14671564152ef38b341-32214017',
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
  'unifunc' => 'content_564152ef433f68_92821132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564152ef433f68_92821132')) {function content_564152ef433f68_92821132($_smarty_tpl) {?>        <div class="baner">
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
" title="638*484" />        
        					</a>
        				</li>
        			<?php } ?>
        			</ul>
        		</div>
        	</div>
        </div><?php }} ?>
