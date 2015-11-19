<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:24:57
         compiled from "D:\unify\app\views\templates\GM0066\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3040056418db991cfb4-08656943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c396b795074126b784f61df34c050ec6bb47457' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0066\\_header.html',
      1 => 1447060336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3040056418db991cfb4-08656943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56418db9990bc8_28699198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56418db9990bc8_28699198')) {function content_56418db9990bc8_28699198($_smarty_tpl) {?>    <div class="header">
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
      <div class="baner">
        <div id="slideBox" class="slideBox">
          <div class="hd">
            <ul>
            </ul>
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
" title="500*245" /></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
    
  </header>



	
	
	<?php }} ?>
