<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:04:56
         compiled from "D:\Unify\app\views\templates\GP0015\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:16290564d66883593b4-60119825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a03849db7fed863a826ea1c7957de56bf0f27f' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0015\\_footer.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16290564d66883593b4-60119825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'friend' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d66885c6d00_96036840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d66885c6d00_96036840')) {function content_564d66885c6d00_96036840($_smarty_tpl) {?>
<footer>
<div class="link">
        		<b>友情链接：</b>
  <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['title'];?>
</a> 
		 	<?php } ?>                
        </div>   
<div class="footer">        
            		<div class="fo_con">
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

                  <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 
</div>
            </div>
</footer>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  <?php }} ?>
