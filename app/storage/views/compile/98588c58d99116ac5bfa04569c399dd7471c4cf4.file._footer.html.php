<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 03:06:21
         compiled from "D:\Unify\app\views\templates\GP0015\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:19225642b0ad97da72-33233703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98588c58d99116ac5bfa04569c399dd7471c4cf4' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0015\\_footer.html',
      1 => 1445591912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19225642b0ad97da72-33233703',
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
  'unifunc' => 'content_5642b0adb672b9_27460448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642b0adb672b9_27460448')) {function content_5642b0adb672b9_27460448($_smarty_tpl) {?>
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
