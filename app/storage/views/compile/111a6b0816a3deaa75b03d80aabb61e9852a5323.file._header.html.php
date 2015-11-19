<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 09:08:33
         compiled from "D:\unify\app\views\templates\GM0064\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:313865640634c64cdf3-11825290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111a6b0816a3deaa75b03d80aabb61e9852a5323' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0064\\_header.html',
      1 => 1447298628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313865640634c64cdf3-11825290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640634c6d3fb4_56846294',
  'variables' => 
  array (
    'global' => 0,
    'slidepic' => 0,
    'site_url' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640634c6d3fb4_56846294')) {function content_5640634c6d3fb4_56846294($_smarty_tpl) {?><div class="header">
    <div class="baner">
        <div id="slideBox" class="slideBox">
          <div class="hd">
            <ul>
            </ul>
          </div>
          <div class="bd">
            <ul>
            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
              <li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" title="640*316" /></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="baner_bg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/baner_bg.png"></div>
      <div class="home"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首 页</a></div>
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
    <div class="header_menu" ><a href="#" id="header_menu">导 航</a></div>
    </div>
	
	
	<?php }} ?>
