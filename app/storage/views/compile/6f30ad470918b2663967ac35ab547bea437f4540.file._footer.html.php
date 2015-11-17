<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 07:07:48
         compiled from "D:\Unify\app\views\templates\GP0019\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:8763564980c4922630-00780030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f30ad470918b2663967ac35ab547bea437f4540' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0019\\_footer.html',
      1 => 1445592011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8763564980c4922630-00780030',
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
  'unifunc' => 'content_564980c49b6770_90098679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564980c49b6770_90098679')) {function content_564980c49b6770_90098679($_smarty_tpl) {?>
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
