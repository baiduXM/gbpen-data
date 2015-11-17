<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:51:16
         compiled from "D:\Unify\app\views\templates\GP0005\_share.html" */ ?>
<?php /*%%SmartyHeaderCode:1251556405e84c042b1-79084414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee36735f860318c9616c1c4714049f15954b74ed' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0005\\_share.html',
      1 => 1445481959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1251556405e84c042b1-79084414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405e84cd1667_92385147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405e84cd1667_92385147')) {function content_56405e84cd1667_92385147($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><section>
	<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

</section><?php }} ?>
