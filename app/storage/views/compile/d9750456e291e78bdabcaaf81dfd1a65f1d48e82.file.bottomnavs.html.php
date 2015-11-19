<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:04:45
         compiled from "D:\Unify\app\views\templates\GM0015\bottomnavs.html" */ ?>
<?php /*%%SmartyHeaderCode:1255564d667d95fd42-42236627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9750456e291e78bdabcaaf81dfd1a65f1d48e82' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0015\\bottomnavs.html',
      1 => 1447833037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1255564d667d95fd42-42236627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'global' => 0,
    'bottom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d667db3dbc1_28183459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d667db3dbc1_28183459')) {function content_564d667db3dbc1_28183459($_smarty_tpl) {?>      <div class="opacity2"></div>
      <div class="PathInner" id="PathMenu">
        <div class="PathMain" onclick="PathRun();">
          <span class="pathbox2">
            <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/G.png" width="33" height="33"></span>
        </div>
        <?php  $_smarty_tpl->tpl_vars['bottom'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bottom']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['bottom_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['bottom']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['bottom']->key => $_smarty_tpl->tpl_vars['bottom']->value) {
$_smarty_tpl->tpl_vars['bottom']->_loop = true;
 $_smarty_tpl->tpl_vars['bottom']->index++;
?>
        <div class="PathItem">
          <span class="item">
          <?php if ($_smarty_tpl->tpl_vars['bottom']->value['icon']) {?><div class="icon"><i class="iconfont"><?php echo $_smarty_tpl->tpl_vars['bottom']->value['icon'];?>
</i></div><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['bottom']->value['image'];?>
" height="20"><?php }?>
            <dt class="title"><?php echo $_smarty_tpl->tpl_vars['bottom']->value['name'];?>
</dt>
          </span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['bottom']->index==2) {?><?php break 1?><?php }?>
        <?php } ?>
        <div class="PathItem" onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
'">
          <dl class="item">
            <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
icon/f_i2.png" height="20">
            <dt class="title">首页</dt>
          </dl>
        </div>
      </div>

<?php }} ?>
