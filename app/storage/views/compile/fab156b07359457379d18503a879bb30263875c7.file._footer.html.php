<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:40:12
         compiled from "D:\Unify\app\views\templates\GP0005\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:336456405bec3f74f1-74045805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab156b07359457379d18503a879bb30263875c7' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_footer.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336456405bec3f74f1-74045805',
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
  'unifunc' => 'content_56405bec4610c7_26487552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405bec4610c7_26487552')) {function content_56405bec4610c7_26487552($_smarty_tpl) {?><footer>
	
	<section>

	 <div class="w footer">
      <div class="foot_link"><?php echo $_smarty_tpl->getSubTemplate ("./_links.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
      <div class="foot_add"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
     
   </div>
	</section>
</footer>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>


<?php }} ?>
