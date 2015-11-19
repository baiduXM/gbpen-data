<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 08:00:22
         compiled from "D:\unify\app\views\templates\GM0003\list_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:28961564598969f2896-57930419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '729b206f9088c462943f13ef5d50fe422fe8ef05' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0003\\list_nav.html',
      1 => 1446792852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28961564598969f2896-57930419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56459896bd3434_93864428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56459896bd3434_93864428')) {function content_56459896bd3434_93864428($_smarty_tpl) {?>﻿<!-- 二级栏目列表（展示到三级子栏目） -->
<div class="hide-class">
    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
    <dl  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
      <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
      <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
      <ul class="second">
        <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>">
          <a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
          <ul class="third">
            <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>current<?php }?>">
              <a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a>
            </li>
            <?php } ?>
          </ul>
          <?php }?>
        </li>
        <?php } ?>
      </ul>
      <?php }?>
    </dl>
    <?php } ?>
</div><?php }} ?>
