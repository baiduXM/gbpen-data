<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 03:15:38
         compiled from "D:\unify\app\views\templates\GM0077\_top_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:186615649981f4ec393-93094197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '138d6356db2c199041458f0c67579a5485aca04b' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0077\\_top_nav.html',
      1 => 1447728847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186615649981f4ec393-93094197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649981f577444_17023498',
  'variables' => 
  array (
    'list' => 0,
    'pagenavs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649981f577444_17023498')) {function content_5649981f577444_17023498($_smarty_tpl) {?><div class="top_nav">
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
