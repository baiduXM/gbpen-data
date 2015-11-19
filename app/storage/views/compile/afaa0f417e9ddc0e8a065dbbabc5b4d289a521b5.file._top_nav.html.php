<?php /* Smarty version Smarty-3.1.19, created on 2015-11-13 09:30:45
         compiled from "D:\unify\app\views\templates\GM0076\_top_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:1739556459eeea540f6-39092129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afaa0f417e9ddc0e8a065dbbabc5b4d289a521b5' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0076\\_top_nav.html',
      1 => 1447407000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1739556459eeea540f6-39092129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56459eeead9fb7_68197915',
  'variables' => 
  array (
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56459eeead9fb7_68197915')) {function content_56459eeead9fb7_68197915($_smarty_tpl) {?><div class="top_nav">
  <h2><span class="en"><?php echo $_smarty_tpl->tpl_vars['list']->value['en_name'];?>
</span><span class="zh"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span></h2>
  <a class="classify_btn" href="javascript:;">分类</a>
  
  <nav>
    <ul class="nav up">
      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
      <?php } ?>
    </ul>
  </nav>
  <a class="font_btn left" href="javascript:;">字</a>
  <div class="font left">
    <span class="big">大</span>
    <span class="normal">中</span>
    <span class="small">小</span>
  </div>             
</div><?php }} ?>
