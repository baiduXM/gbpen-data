<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 01:55:24
         compiled from "D:\Unify\app\views\templates\GP0014\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:24164564d2c0c3aa010-59129733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e8853157121c98127c6f8a3f3fc0b208857fdf7' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0014\\_header.html',
      1 => 1447833038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24164564d2c0c3aa010-59129733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'contact' => 0,
    'limit' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d2c0c949fe1_35708081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d2c0c949fe1_35708081')) {function content_564d2c0c949fe1_35708081($_smarty_tpl) {?>      <div class="header">
          <div class="fl logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" /></a></div>
            <div class="search">

<form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
  <input type="text" name="s" value="" style="width:86px;" />
  <input type="submit" value="搜索" />
</form>

            </div>
            <div class="tell">咨询热线：<span class="num"><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></div>
        </div>
        <div class="menu">
          <ul class="nav">
               <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(5, null, 0);?>
               <li class="nLi"  style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
                  <li class="nLi <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>on<?php }?>" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
                    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                      <ul class="sunav">
                        <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                        <?php } ?>
                      </ul>
                    <?php }?>
                  </li>
                  <?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
                <?php } ?>
                     
            </ul>
        </div>
        <!-- banner -->
        <div class="baner">
      <div class="focusBox" style="margin:0 auto">
      <ul class="pic">
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" width="988" height="254" /></a></li>
                    
                <?php } ?>
              
      </ul>
            <ul class="hd">
            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
              <li></li>
            <?php } ?>
      </ul>
  </div>

    </div><?php }} ?>
