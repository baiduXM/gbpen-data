<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 02:11:16
         compiled from "D:\unify\app\views\templates\GP0010\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:13139564000c4e1e331-95667418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e78c5261a7eee86148f98cbdf4c47172a33351' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0010\\_footer.html',
      1 => 1447035019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13139564000c4e1e331-95667418',
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
  'unifunc' => 'content_564000c4ea3113_47823076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564000c4ea3113_47823076')) {function content_564000c4ea3113_47823076($_smarty_tpl) {?><div id="footer_bg">
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
