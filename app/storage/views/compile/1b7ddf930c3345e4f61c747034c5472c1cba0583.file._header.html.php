<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:04:46
         compiled from "D:\Unify\app\views\templates\GP0016\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:1305356442bfead8454-41820681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7ddf930c3345e4f61c747034c5472c1cba0583' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0016\\_header.html',
      1 => 1445593836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1305356442bfead8454-41820681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'limit' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    '_header' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56442bff11b702_15629972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442bff11b702_15629972')) {function content_56442bff11b702_15629972($_smarty_tpl) {?><header>
<section>
  <div class="head_outside">
  <div class="banck"></div>
    <div class="head">
        <h2 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="73" max-width="377" class="logoimg"/></a></h2>
       

<div class="header_menu">
          <ul class="nav clearfix" id="nav">
              <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(5, null, 0);?>
              <li class="nLi" style="width: <?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%"><h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></h3>
               <h4 style="display: none; opacity: 1"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">HOME</a></h4>
              </li>
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
                  <li class="nLi <?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>" style="width: <?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%">
                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
                    <h4 style="display: none; opacity: 1"><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['en_name'];?>
</a></h4>
                    <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                      <ul class="sub">
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
                  <?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['limit']->value) {?><?php break 1?><?php }?>
                <?php } ?>
                     
            </ul>

 </div>
    </div>
  </div>    
</section>

<section>
 <div class="banners">
    <div id="slideBox" class="slideBox">
        <div class="hd">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_header']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['slidepic']->index+1;?>
</li>
                <?php } ?>
            </ul>
        </div>
        <div class="bd">
            <ul>
               <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_header']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
               <?php } ?>
            </ul>
        </div>
    </div>
 </div>

</section>
</header>
<?php }} ?>
