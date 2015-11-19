<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 02:08:01
         compiled from "D:\unify\app\views\templates\GP0006\_share.html" */ ?>
<?php /*%%SmartyHeaderCode:49115640000152aee8-92851392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efafb8bc15ad577e83f94cbb7013162ef55780be' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_share.html',
      1 => 1446795774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49115640000152aee8-92851392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564000015a3178_49973380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564000015a3178_49973380')) {function content_564000015a3178_49973380($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.truncate.php';
?><section>
	<?php echo PrintController::createShare(array('shareText'=>smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content'], ENT_QUOTES)),140,"…"),'sharePic'=>$_smarty_tpl->tpl_vars['article']->value['image']),$_smarty_tpl);?>

</section><?php }} ?>
