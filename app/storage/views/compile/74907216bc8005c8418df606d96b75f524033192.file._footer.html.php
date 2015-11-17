<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:07:01
         compiled from "D:\Unify\app\views\templates\GP0017\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:797956498095de8745-85081386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74907216bc8005c8418df606d96b75f524033192' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0017\\_footer.html',
      1 => 1445591996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797956498095de8745-85081386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'friend' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56498095ec6251_33016857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56498095ec6251_33016857')) {function content_56498095ec6251_33016857($_smarty_tpl) {?><div id="footer_bg">
<div id="footer" class="wrapper">
<div id="friendlink">
<div class="title"> <div class="ch">友情链接</div><div class="en">friendlink</div></div>
<div class="inner clearfix">
<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['friend']->value['image'];?>
" /></a>
<?php } ?> 
</div>
</div>

<div id="copyriht"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
</div>


</div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

<?php }} ?>
