<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 09:10:10
         compiled from "D:\unify\app\views\templates\GM0004\list_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1963656445772cfd276-38427642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef8905619b465e2d6a58f2da87d0521309ca001' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0004\\list_nav.html',
      1 => 1446792883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1963656445772cfd276-38427642',
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
  'unifunc' => 'content_56445772ec83c1_13170270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56445772ec83c1_13170270')) {function content_56445772ec83c1_13170270($_smarty_tpl) {?>﻿<!-- 二级栏目列表（展示到三级子栏目） -->
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
