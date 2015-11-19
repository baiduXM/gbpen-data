<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 03:11:16
         compiled from "D:\unify\app\views\templates\GP0018\_index_pic.html" */ ?>
<?php /*%%SmartyHeaderCode:23749564d3dd4a2df90-86223857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a7ea2da09de020fc0b634b3b9e0a3daed71f0e0' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0018\\_index_pic.html',
      1 => 1447826418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23749564d3dd4a2df90-86223857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d3dd4ac1e73_62375444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d3dd4ac1e73_62375444')) {function content_564d3dd4ac1e73_62375444($_smarty_tpl) {?><section>

      <div class="picMarquee">
				<ul class="picList">
					<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list4']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                         <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"  height="95" width="189" /></a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a>
                         </li>
                    <?php } ?>
				</ul>
                 <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>       
		</div>
</section><?php }} ?>
