<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:32:09
         compiled from "D:\Unify\app\views\templates\GM0002\_zdcustom.html" */ ?>
<?php /*%%SmartyHeaderCode:2126756405a09b4adc7-04384357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc80a576a8658503f0d1c914086682ab5eaecf5' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0002\\_zdcustom.html',
      1 => 1446624331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126756405a09b4adc7-04384357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'global' => 0,
    'bottomnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405a09d96793_36086274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405a09d96793_36086274')) {function content_56405a09d96793_36086274($_smarty_tpl) {?>﻿      <div class="opacity2"></div>
      <div class="PathInner" id="PathMenu">
        <div class="PathMain" onclick="PathRun();">
          <span class="pathbox2">
            <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/G.png" width="33" height="33"></span>
        </div>
         <?php  $_smarty_tpl->tpl_vars['bottomnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bottomnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['bottom_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['bottomnav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['bottomnav']->key => $_smarty_tpl->tpl_vars['bottomnav']->value) {
$_smarty_tpl->tpl_vars['bottomnav']->_loop = true;
 $_smarty_tpl->tpl_vars['bottomnav']->index++;
?>
        <div class="PathItem">
          <span class="item">
          <div class="icon"><?php if ($_smarty_tpl->tpl_vars['bottomnav']->value['icon']) {?><li class="iconfont"><?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['icon'];?>
</li><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['image'];?>
" width="30"><?php }?></div>
            <dt class="title"><?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['name'];?>
</dt>
          </span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['bottomnav']->index==2) {?><?php break 1?><?php }?>
        <?php } ?>
        <div class="PathItem" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'">
          <dl class="item">
            <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/f_i2.png" height="20">
            <dt class="title">首页</dt>
          </dl>
        </div>
      </div><?php }} ?>
