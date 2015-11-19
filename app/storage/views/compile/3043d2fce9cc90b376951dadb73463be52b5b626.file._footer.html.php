<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 08:33:11
         compiled from "D:\unify\app\views\templates\GP0006\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:11281563c65c7029961-74791988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3043d2fce9cc90b376951dadb73463be52b5b626' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_footer.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11281563c65c7029961-74791988',
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
  'unifunc' => 'content_563c65c70624e6_66852754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c65c70624e6_66852754')) {function content_563c65c70624e6_66852754($_smarty_tpl) {?><footer>
	
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
