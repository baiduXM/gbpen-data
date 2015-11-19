<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 08:46:59
         compiled from "D:\unify\app\views\templates\GM0012\_pagenavs_sub4.html" */ ?>
<?php /*%%SmartyHeaderCode:453656499803333a05-20732852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee4da38862b9d8c830fb06c8a0639bcfcfec1438' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0012\\_pagenavs_sub4.html',
      1 => 1446793053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '453656499803333a05-20732852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649980352c4e2_89613393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649980352c4e2_89613393')) {function content_5649980352c4e2_89613393($_smarty_tpl) {?><!-- 二级栏目列表（展示到三级子栏目） -->
<div class="content-hd">
  <h2 class='tit'>
    <span class='type'>类别</span>
    <?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>

    <span class='font-set'>字+</span>
  </h2>
  <ul class='type-list'>
    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
    <li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
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
    </li>
    <?php } ?>
  </ul>
  <ul class='font-list font-sel'>
    <li>
      <a href='###' class='big'>大</a>
    </li>
    <li>
      <a href='###' class='normal'>中</a>
    </li>
    <li>
      <a href='###' class='small'>小</a>
    </li>
  </ul>
</div><?php }} ?>
