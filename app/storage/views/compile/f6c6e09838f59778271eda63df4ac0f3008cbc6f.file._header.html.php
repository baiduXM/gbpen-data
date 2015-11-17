<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 02:01:40
         compiled from "D:\Unify\app\views\templates\GM0001\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2662756454484811061-94421638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c6e09838f59778271eda63df4ac0f3008cbc6f' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0001\\_header.html',
      1 => 1446795347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2662756454484811061-94421638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56454484859724_01034584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56454484859724_01034584')) {function content_56454484859724_01034584($_smarty_tpl) {?><header class="header page_h">
  <div class="header_menu" id="header_menu"><i class="icon iconfont">&#xe603;</i></div>
  <h1 class="logo"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h1>
  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="to_home"><i class="icon iconfont">&#xe620;</i></a>
</header>
<?php }} ?>
