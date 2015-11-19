<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 02:08:01
         compiled from "D:\unify\app\views\templates\GP0006\_news_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:23822564000014b5a98-83736316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ae54d13aaa04c5dbb92f57e93e360ecd816c95' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_news_xq.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23822564000014b5a98-83736316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56400001518120_35391851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56400001518120_35391851')) {function content_56400001518120_35391851($_smarty_tpl) {?><section><h1 class="module_news_Details"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 </h1>
  <h3 class="t">发布日期：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
  <a href="javascript:window.history.back()">[返回列表]</a></h3>
   <div class="ny_text"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div></section><?php }} ?>
