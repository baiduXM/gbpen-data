<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 08:06:35
         compiled from "D:\Unify\app\views\templates\GP0011\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:294895642f70b613e39-69447205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5606bead8a7b9a338c54708069ca0d9190083605' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0011\\_header.html',
      1 => 1445591871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294895642f70b613e39-69447205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'title' => 0,
    'search_action' => 0,
    'contact' => 0,
    'navs' => 0,
    'limit' => 0,
    'site_url' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642f70baf4e68_49491912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642f70baf4e68_49491912')) {function content_5642f70baf4e68_49491912($_smarty_tpl) {?><div id="header_bg"> 
    <div id="header" class="wrapper">
        <div id="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></div>
        <div id="search">
            <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                <input type="text" name="s" value="" class="sa" />
                <input type="submit" class="bta" />
            </form>
        </div>
        <div id="tel"><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</div>
    </div>
</div>



<div id="nav_bg">
    <div id="nav" class="wrapper">
        <ul>
            <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(7, null, 0);?>
            <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['limit']->value) {?><?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
            <li class="aa" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
                <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
            <li class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> aa" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
                <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                <ul class="sub clearfix">
                    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?> <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> cc"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                    <?php } ?> <?php }?>
                </ul>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
            <?php } ?>
        </ul>
    </div>
</div>






<div id="banner" class="wrapper">
    <div class="focusBox" style="margin:0 auto">
        <ul class="pic">
            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a>
            </li>
            <?php } ?>
        </ul>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
        <ul class="hd">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>
<?php }} ?>
