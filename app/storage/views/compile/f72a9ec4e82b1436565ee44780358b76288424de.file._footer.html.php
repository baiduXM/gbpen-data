<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 06:49:26
         compiled from "D:\Unify\app\views\templates\GP0012\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:30408564193765ac971-72563506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72a9ec4e82b1436565ee44780358b76288424de' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0012\\_footer.html',
      1 => 1446110028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30408564193765ac971-72563506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'friend' => 0,
    'footprint' => 0,
    'logo' => 0,
    'title' => 0,
    'footscript' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5641937683aa31_17885043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641937683aa31_17885043')) {function content_5641937683aa31_17885043($_smarty_tpl) {?><div id="footer">
   <div class="wrapper clearfix" style="position:relative">
     <div class="copyright">
      友情链接<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['title'];?>
</a> 
		 	<?php } ?> 
<br />
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>


     </div>
     <div class="bot_logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" width="80%" style="margin:auto" /></div>
   </div>
 </div>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
 


<!--#*
<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> |<?php } ?>

<a href="index.html" target="_blank">首页</a> | <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> | <?php } ?>

<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

*#-->

<?php }} ?>
