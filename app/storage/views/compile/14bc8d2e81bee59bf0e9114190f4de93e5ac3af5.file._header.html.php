<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:04:45
         compiled from "D:\Unify\app\views\templates\GM0015\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:10388564d667db54445-67431907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14bc8d2e81bee59bf0e9114190f4de93e5ac3af5' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0015\\_header.html',
      1 => 1447833037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10388564d667db54445-67431907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d667dcb8506_70308811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d667dcb8506_70308811')) {function content_564d667dcb8506_70308811($_smarty_tpl) {?> <header class="header">
   <div class="logo">
     <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
   <div class="header_menu " id="header_menu"></div>
 </header>
 <div class="baner">
   <div id="slideBox" class="slideBox">
     <div class="hd">
       <ul></ul>
     </div>
     <div class="bd">
       <ul>
         <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
         <li>
           <a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" style="<?php if ($_smarty_tpl->tpl_vars['slidepic']->index+1==1) {?>background:url(<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/baner.jpg)<?php }?>">
             <img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" title="638*484" /> 
           </a>
         </li>
         <?php } ?>
       </ul>
     </div>
   </div>
 </div><?php }} ?>
