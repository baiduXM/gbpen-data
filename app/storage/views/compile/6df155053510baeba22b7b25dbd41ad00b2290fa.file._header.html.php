<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:29:37
         compiled from "D:\unify\app\views\templates\GP0009\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:3308563fef244e5f07-37261408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df155053510baeba22b7b25dbd41ad00b2290fa' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0009\\_header.html',
      1 => 1447126175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3308563fef244e5f07-37261408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fef247bb802_14678560',
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
    'foot' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fef247bb802_14678560')) {function content_563fef247bb802_14678560($_smarty_tpl) {?>     <div class="header">
         <div class="public">
            <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" title="返回首页"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
"></a></div>
            <div class="home">
                 <span>
                     <a href="javascript:void(0);" onclick="SetHome(this, window.location)" class="homeico">设为首页</a>
                     <a href="javascript:void(0);" onclick="shoucang(document.title, window.location)">加入收藏</a>
                 </span>
                 <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" class="search">
                        <input class="searchbox" type="text" value="请输入关键字" />
                        <input class="searchbtn" type="submit" value="搜 索" />
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
" width="1423px" height="379" /></a></li>       
                        <?php } ?>
                      
              </ul>
              <ul class="hd">
                <li></li>
                <li></li>
                <li></li>
              </ul>
          </div>

     <?php echo 100/((count($_smarty_tpl->tpl_vars['navs']->value))+1);?>

     </div>
     <div class="genre">
         <div class="getop"></div>
         <div class="gebot"></div>
         <ul class="gecon">
            <?php  $_smarty_tpl->tpl_vars['foot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['footclass']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foot']->key => $_smarty_tpl->tpl_vars['foot']->value) {
$_smarty_tpl->tpl_vars['foot']->_loop = true;
?>
            <li><h2><?php echo $_smarty_tpl->tpl_vars['foot']->value['title'];?>
</h2><a href="<?php echo $_smarty_tpl->tpl_vars['foot']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['foot']->value['image'];?>
" width="322"></a></li>
            <?php } ?>
         </ul>
     </div><?php }} ?>
