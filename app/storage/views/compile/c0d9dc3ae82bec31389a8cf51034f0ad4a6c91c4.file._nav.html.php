<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 08:24:10
         compiled from "D:\Unify\app\views\templates\GM0002\_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:24732564c35aad6f7a0-14691993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0d9dc3ae82bec31389a8cf51034f0ad4a6c91c4' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0002\\_nav.html',
      1 => 1447833037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24732564c35aad6f7a0-14691993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c35ab0a69f2_61062937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c35ab0a69f2_61062937')) {function content_564c35ab0a69f2_61062937($_smarty_tpl) {?>﻿                      

				<div class="hide-class">
              
			  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
			<dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><span class="icon">&bull;</span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></dl>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
	
			<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
        
          <dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><span class="icon">&bull;</span>-><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></dl>
          <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
          
            <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
           
             <dl><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><span class="icon">&bull;</span>--><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></dl>
           
            <?php } ?>
          
          <?php }?>
        
        <?php } ?>
     
      <?php }?>
  
    <?php } ?>
              </div>
          
			
			
			<?php }} ?>
