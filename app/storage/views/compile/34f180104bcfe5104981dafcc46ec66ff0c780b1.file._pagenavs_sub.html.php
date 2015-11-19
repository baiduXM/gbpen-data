<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 00:47:38
         compiled from "D:\unify\app\views\templates\GM0061\_pagenavs_sub.html" */ ?>
<?php /*%%SmartyHeaderCode:8095564bcaaab2be56-16863916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34f180104bcfe5104981dafcc46ec66ff0c780b1' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0061\\_pagenavs_sub.html',
      1 => 1447752937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8095564bcaaab2be56-16863916',
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
  'unifunc' => 'content_564bcaaac7ff67_90732961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bcaaac7ff67_90732961')) {function content_564bcaaac7ff67_90732961($_smarty_tpl) {?>                      

				<ul>
			  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
			<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
'"><span class="icon">&bull;</span><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
			<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
	
			<?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
        
          <li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
'"><span class="icon">&bull;</span>-><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
          <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
          
            <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
           
             <li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
'"><span class="icon">&bull;</span>--><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a></li>
           
            <?php } ?>
          
          <?php }?>
        
        <?php } ?>
     
      <?php }?>
  
    <?php } ?>
			</ul>  
            
			<?php }} ?>
