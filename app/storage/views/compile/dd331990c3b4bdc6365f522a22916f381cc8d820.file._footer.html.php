<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:04:47
         compiled from "D:\Unify\app\views\templates\GP0016\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1286756442bff2f0937-63123846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd331990c3b4bdc6365f522a22916f381cc8d820' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0016\\_footer.html',
      1 => 1445593836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1286756442bff2f0937-63123846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56442bff353475_85978337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442bff353475_85978337')) {function content_56442bff353475_85978337($_smarty_tpl) {?><footer>
	
	<section>
	<div class="foot_bj">
	<div class="footer">
      <div class="foot_link"><?php echo $_smarty_tpl->getSubTemplate ("./_links.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
      <div class="foot_add"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
     
   </div></div>
	</section>
</footer>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


<?php }} ?>
