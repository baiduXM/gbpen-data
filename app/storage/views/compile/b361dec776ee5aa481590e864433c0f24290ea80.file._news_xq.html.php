<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:51:16
         compiled from "D:\Unify\app\views\templates\GP0005\_news_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:2075456405e84b527a1-51066412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b361dec776ee5aa481590e864433c0f24290ea80' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_news_xq.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075456405e84b527a1-51066412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405e84beec74_67563220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405e84beec74_67563220')) {function content_56405e84beec74_67563220($_smarty_tpl) {?><section><h1 class="module_news_Details"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 </h1>
  <h3 class="t">发布日期：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
  <a href="javascript:window.history.back()">[返回列表]</a></h3>
   <div class="ny_text"><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES);?>
</div></section><?php }} ?>
