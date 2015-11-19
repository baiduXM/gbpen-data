<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 01:45:24
         compiled from "D:\unify\app\views\templates\GM0055\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:15911563c5a5ef0fae7-71179792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57cee3f776d42843aa3fd9dec31535b89081e564' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0055\\_header.html',
      1 => 1447206321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15911563c5a5ef0fae7-71179792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c5a5f055183_30133611',
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c5a5f055183_30133611')) {function content_563c5a5f055183_30133611($_smarty_tpl) {?>	<div class="index_top">
       <header>
          <div class="header">
              <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"> </div>
          </div>
          <div class="baner">
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
                            <li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
                        <?php } ?>
                    </ul>
                </div>
              </div>
          </div>
       </header>    
    </div><?php }} ?>
