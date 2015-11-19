<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 01:10:25
         compiled from "D:\unify\app\views\templates\GP0016\_pro_right_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:19877564c384e713a28-92076425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bdff05f7468e229b839f44eb33809bd49871258' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0016\\_pro_right_nav.html',
      1 => 1447838987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19877564c384e713a28-92076425',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c384e79e1e0_06062154',
  'variables' => 
  array (
    'site_url' => 0,
    'pagenavs' => 0,
    'nav' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c384e79e1e0_06062154')) {function content_564c384e79e1e0_06062154($_smarty_tpl) {?>


<section>
 <h3 class="about_title tit"><em class="more"><span>当前位置</span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>
  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
  - <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
  <?php } ?>
</em><?php echo $_smarty_tpl->tpl_vars['article']->value['category']['name'];?>
</h3>
</section>


<?php }} ?>
