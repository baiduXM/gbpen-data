<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:28:40
         compiled from "D:\unify\app\views\templates\GM0071\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:129095643ec1e658832-61490930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc098c4c33f4c6942a5f83bc276d62392846c03c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0071\\_header.html',
      1 => 1447309712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129095643ec1e658832-61490930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5643ec1e6dcbc3_31701029',
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5643ec1e6dcbc3_31701029')) {function content_5643ec1e6dcbc3_31701029($_smarty_tpl) {?><div class="header">
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
      <div class="header_menu" id="header_menu"></div>
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
    </div><?php }} ?>
