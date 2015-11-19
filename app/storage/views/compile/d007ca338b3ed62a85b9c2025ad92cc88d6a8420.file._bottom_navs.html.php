<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 07:33:23
         compiled from "D:\unify\app\views\templates\GM0001\_bottom_navs.html" */ ?>
<?php /*%%SmartyHeaderCode:26575563c515b07a662-78448602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd007ca338b3ed62a85b9c2025ad92cc88d6a8420' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0001\\_bottom_navs.html',
      1 => 1446795163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26575563c515b07a662-78448602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c515b16e729_72658477',
  'variables' => 
  array (
    'global' => 0,
    'bottomnav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c515b16e729_72658477')) {function content_563c515b16e729_72658477($_smarty_tpl) {?>
<div class="footer">

  <ul class="clearfix bottom_menu_ul">
    <li class="bottom_menu" id="bottom_menu">
      <a href="javascript:;">
        <span class="icon"><i class="icon iconfont">&#xe603;</i></span>
        <span class="title">导航</span>
      </a>     
    </li>
    <?php  $_smarty_tpl->tpl_vars['bottomnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bottomnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['bottom_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['bottomnav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['bottomnav']->key => $_smarty_tpl->tpl_vars['bottomnav']->value) {
$_smarty_tpl->tpl_vars['bottomnav']->_loop = true;
 $_smarty_tpl->tpl_vars['bottomnav']->index++;
?>
      <li class="<?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['type'];?>
">
        <a href="<?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['data'];?>
" target="_blank">
          <span class="icon">
            <?php if ($_smarty_tpl->tpl_vars['bottomnav']->value['icon']) {?><i class="iconfont"><?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['icon'];?>
</i><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['image'];?>
" width="30"><?php }?>
          </span>
          <span class="title"><?php echo $_smarty_tpl->tpl_vars['bottomnav']->value['name'];?>
</span>
        </a>     
      </li>
      <?php if ($_smarty_tpl->tpl_vars['bottomnav']->index==2) {?><?php break 1?><?php }?>
    <?php } ?>
  </ul>

</div><?php }} ?>
