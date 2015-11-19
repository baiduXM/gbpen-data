<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:17:46
         compiled from "D:\unify\app\views\templates\GP0015\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:25717564c180a3b7233-09023859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a03849db7fed863a826ea1c7957de56bf0f27f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0015\\_footer.html',
      1 => 1447826369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25717564c180a3b7233-09023859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footprint' => 0,
    'contact' => 0,
    'global' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c180a50fcd7_59279879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c180a50fcd7_59279879')) {function content_564c180a50fcd7_59279879($_smarty_tpl) {?>     <div class="foot">
         <div class="public">
             <p><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
 电话：<?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
 <br />  <span>技术支持：<a href="http://www.12t.cn/">厦门易尔通网络科技有限公司</a> 人才支持：<a href="http://www.xmrc.com.cn/">厦门人才网</a></span></p>
             <span class="footlink">
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list1']['name'];?>
</a> |
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list2']['name'];?>
</a> |
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list3']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list3']['name'];?>
</a> |
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list4']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list4']['name'];?>
</a> |
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list5']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list5']['name'];?>
</a>
             </span>
         </div>
     </div>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>
