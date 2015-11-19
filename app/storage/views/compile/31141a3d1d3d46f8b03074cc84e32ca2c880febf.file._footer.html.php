<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 07:38:26
         compiled from "D:\unify\app\views\templates\GP0011\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:18392564c2af22cf840-19967554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31141a3d1d3d46f8b03074cc84e32ca2c880febf' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0011\\_footer.html',
      1 => 1447401406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18392564c2af22cf840-19967554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'global' => 0,
    'contact' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c2af238d097_34607194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c2af238d097_34607194')) {function content_564c2af238d097_34607194($_smarty_tpl) {?><footer>    
        
<DIV class="foobgt">
        	<div class="mid_foters">
<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> |
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> |
    <?php } ?><br />                
            <?php echo $_smarty_tpl->tpl_vars['global']->value['contactusfoot'];?>
<br /> <?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>

            </div>
        </DIV>           
     
</footer>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  
<?php }} ?>
