<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:02:30
         compiled from "D:\unify\app\views\templates\GM0070\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:25685642f473c88231-39274047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ebdcd0456ebc1d8df16a0169fa039029d602c9c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0070\\_header.html',
      1 => 1447307581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25685642f473c88231-39274047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642f473d18822_80409268',
  'variables' => 
  array (
    'logo' => 0,
    'site_url' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642f473d18822_80409268')) {function content_5642f473d18822_80409268($_smarty_tpl) {?><div class="header">
      <div class="baner">
            <div class="logo" ><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
            <div class="header_menu" id="header_menu"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/6.png" width="100%"></a></div>
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
" title="640*200" /></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      
    </div>



<?php }} ?>
