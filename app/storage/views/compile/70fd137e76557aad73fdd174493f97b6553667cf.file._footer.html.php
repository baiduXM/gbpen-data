<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 07:44:26
         compiled from "D:\unify\app\views\templates\GP0012\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:17283564bcad41391b1-64436411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70fd137e76557aad73fdd174493f97b6553667cf' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0012\\_footer.html',
      1 => 1447832661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17283564bcad41391b1-64436411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bcad4276f01_71070541',
  'variables' => 
  array (
    'footprint' => 0,
    'global' => 0,
    'friend' => 0,
    'footscript' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bcad4276f01_71070541')) {function content_564bcad4276f01_71070541($_smarty_tpl) {?><div  class="footer_bg">
    <div id="footer" class="wrap1 clearfix">
      <div class="cty"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
      <div class="links">
        友情链接<?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['title'];?>
</a> 
		 	<?php } ?> 
      </div>
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
