<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:00:45
         compiled from "D:\Unify\app\views\templates\GP0008\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1185564060bd748e41-40379240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f6cab8b4df2e0e3718bea86e3268545253585d' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0008\\_footer.html',
      1 => 1445481994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1185564060bd748e41-40379240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'naver' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564060bd87b201_21848749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564060bd87b201_21848749')) {function content_564060bd87b201_21848749($_smarty_tpl) {?>
  <div class='footersbg'>  
   <div class="public">
   <ul class='navs h_o'>
			<?php  $_smarty_tpl->tpl_vars['naver'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['naver']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['global']->value['second_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['naver']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['naver']->key => $_smarty_tpl->tpl_vars['naver']->value) {
$_smarty_tpl->tpl_vars['naver']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['naver']->key;
 $_smarty_tpl->tpl_vars['naver']->index++;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['naver']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['naver']->value['name'];?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['naver']->index+1==8) {?><?php break 1?><?php }?>
			<?php } ?>
		</ul>
    <span class="footer_li"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</span>
	</div>
 </div>
<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>
