<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:06:35
         compiled from "D:\Unify\app\views\templates\GP0011\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:107745642f70bb105b3-31450797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14fa5c3bb723fd47b8588c8c8978eba98d348c1b' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0011\\_footer.html',
      1 => 1445591871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107745642f70bb105b3-31450797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642f70bc133f9_62384685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642f70bc133f9_62384685')) {function content_5642f70bc133f9_62384685($_smarty_tpl) {?><div id="footer_bg">
    <div id="footer" class="wrapper">
        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> | <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> | <?php } ?>
        <br /> <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

<?php }} ?>
