<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 01:31:51
         compiled from "D:\unify\app\views\templates\GP0008\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:12389563fec111ae2e1-73441589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e302db361effe6bec9ad85cfac38dd3394c81fe3' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0008\\_footer.html',
      1 => 1447119107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12389563fec111ae2e1-73441589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fec1123fea3_98740576',
  'variables' => 
  array (
    'footprint' => 0,
    'global' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fec1123fea3_98740576')) {function content_563fec1123fea3_98740576($_smarty_tpl) {?>     <div class="foot">
         <div class="public">
         	<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

             <span class="footlink">
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['name'];?>
</a> |
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['name'];?>
</a>
             </span>
         </div>
     </div>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>
