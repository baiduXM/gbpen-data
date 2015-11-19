<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:22:01
         compiled from "D:\unify\app\views\templates\GM0057\_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1034556419842bd95a4-92303835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a00dfc58131780315f4fcebe309c890cc96f3b1' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0057\\_nav.html',
      1 => 1447658518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1034556419842bd95a4-92303835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56419842d3d572_92440361',
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419842d3d572_92440361')) {function content_56419842d3d572_92440361($_smarty_tpl) {?>﻿                      

				
           
			  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
			<dl><a onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
'"><span class="icon">&bull;</span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></dl>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
	
			<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
        
          <dl><a onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
'"><span class="icon">&bull;</span>-><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></dl>
          <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
          
            <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
           
             <dl><a onClick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
'"><span class="icon">&bull;</span>--><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></dl>
           
            <?php } ?>
          
          <?php }?>
        
        <?php } ?>
     
      <?php }?>
  
    <?php } ?>
			
              
          
			
			
			<?php }} ?>
