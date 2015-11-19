<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:42:38
         compiled from "D:\Unify\app\views\templates\GP0019\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:29397564d6f5e15dc23-16536790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57fb9ae1f1985bfc0b0595eb5444dd54e163e8fa' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0019\\_footer.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29397564d6f5e15dc23-16536790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d6f5e1e7427_63971344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d6f5e1e7427_63971344')) {function content_564d6f5e1e7427_63971344($_smarty_tpl) {?>
  <div class='footersbg'>
            
            <div class="public">
            <img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['ftlogo']['image'];?>
">
            <span class="footer_li"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</span>

        <?php echo $_smarty_tpl->getSubTemplate ("./_links.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            
                
        </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>
