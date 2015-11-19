<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:05:39
         compiled from "D:\unify\app\views\templates\GP0014\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:3400564c15337b7c32-11608183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e9690a6de250146a3464ec13d775cc75ac2603' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0014\\_footer.html',
      1 => 1447826347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3400564c15337b7c32-11608183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'footprint' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c153395a540_91680715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c153395a540_91680715')) {function content_564c153395a540_91680715($_smarty_tpl) {?>  <div class="footes">
        	<div class="mid_ft">
            	<div class="flink">

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
</a> | 
				<a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['list6']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['list6']['name'];?>
</a> 


               <!--  <a href="#">网站首页</a> | <a href="#">关于我们</a> | <a href="#">新闻中心</a> | <a href="#">产品中心</a> | <a href="#">案例展示</a> | <a href="#">联系方式</a> -->
                </div>
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
  地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
<br />
             
            </div>
        </div>     
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
  <?php }} ?>
