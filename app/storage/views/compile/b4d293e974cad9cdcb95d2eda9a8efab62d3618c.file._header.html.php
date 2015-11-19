<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:17:45
         compiled from "D:\unify\app\views\templates\GP0015\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:22879564c1809c30067-08325638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4d293e974cad9cdcb95d2eda9a8efab62d3618c' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0015\\_header.html',
      1 => 1447826369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22879564c1809c30067-08325638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1809eb1898_39809637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1809eb1898_39809637')) {function content_564c1809eb1898_39809637($_smarty_tpl) {?>     <div class="header">
         <div class="public">
            <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></a></div>
            <div class="home">
                 <span>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">设为首页</a> |
                     <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">加入收藏</a>
                 </span>
                 <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" class="search">
                        <input class="searchbox" type="text" value="请输入关键字" />
                        <input class="searchbtn" type="submit" value="" />
                 </form>
            </div>                     
         </div>
     </div>

     <div class="menu">
        <ul class="nav">
            <li class="nLi" style="width:<?php echo 100/((count($_smarty_tpl->tpl_vars['navs']->value))+1);?>
%"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></li>
            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> nLi" style="width:<?php echo 100/((count($_smarty_tpl->tpl_vars['navs']->value))+1);?>
%">
                <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                    <ul class="subnav">
                        <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                        <li>|</li>
                        <?php } ?>
                    </ul>
                <?php }?>
            </li>
            <?php } ?>
        </ul>

     </div>        
     <div class="banner">

          <div class="focusBox" style="margin:0 auto">
              <ul class="pic">
                        <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" width="100%" height="379" /></a></li>       
                        <?php } ?>
                      
              </ul>
              <ul class="hd">
                <li></li>
                <li></li>
                <li></li>
              </ul>
          </div>

     <?php echo 100/((count($_smarty_tpl->tpl_vars['navs']->value))+1);?>

     </div><?php }} ?>
