<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 00:43:37
         compiled from "D:\unify\app\views\templates\GP0008\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:29328563fec39c6f624-84545417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f8701af5a65fd484d1529f908c9aa128740b7f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0008\\_header.html',
      1 => 1447029715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29328563fec39c6f624-84545417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fec39dcef12_56737817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fec39dcef12_56737817')) {function content_563fec39dcef12_56737817($_smarty_tpl) {?>     <div class="header">
         <div class="public">
             <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></a></div>      
             <div class="menu">
              <ul class="nav">
                  <li><h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></h3></li>
                    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                      <li class="nLi <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>">
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
                        <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                          <ul class="subnav">
                            <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                            <?php } ?>
                          </ul>
                        <?php }?>
                      </li>
                    <?php } ?>
                         
                </ul>
             </div>
         </div>
     </div>
     <div class="ny-banner">
            <div><img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['banner']['image'];?>
" height="304px"></div>
     </div><?php }} ?>
