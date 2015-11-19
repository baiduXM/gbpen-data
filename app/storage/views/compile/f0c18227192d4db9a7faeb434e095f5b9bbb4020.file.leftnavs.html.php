<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 06:04:45
         compiled from "D:\Unify\app\views\templates\GM0015\leftnavs.html" */ ?>
<?php /*%%SmartyHeaderCode:8870564d667d5572a9-17429519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0c18227192d4db9a7faeb434e095f5b9bbb4020' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0015\\leftnavs.html',
      1 => 1447833037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8870564d667d5572a9-17429519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'left_navs' => 0,
    'left_child' => 0,
    'left_grandson' => 0,
    'left_grandson_next' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564d667d945335_64363215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d667d945335_64363215')) {function content_564d667d945335_64363215($_smarty_tpl) {?>    <div class="class page-prev">
      <h1 class="class-top">
        <span class="class-close">×</span>
        快捷导航
      </h1>
      <div class="class-m">
        <div class="swiper-container scroll-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <ul class="class-list">
                <li>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首 页</a>
                </li>
                <?php  $_smarty_tpl->tpl_vars['left_navs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_navs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['left_navs']->key => $_smarty_tpl->tpl_vars['left_navs']->value) {
$_smarty_tpl->tpl_vars['left_navs']->_loop = true;
?>
                <li class="menu_head">
                  <?php if ($_smarty_tpl->tpl_vars['left_navs']->value['childmenu']) {?>
                  <dl class="icon"></dl>
                  <?php }?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['left_navs']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['left_navs']->value['name'];?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['left_navs']->value['childmenu']) {?>
                <li class="menu_body">
                  <?php  $_smarty_tpl->tpl_vars['left_child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_navs']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['left_child']->key => $_smarty_tpl->tpl_vars['left_child']->value) {
$_smarty_tpl->tpl_vars['left_child']->_loop = true;
?>
                  <dl>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['left_child']->value['link'];?>
">
                      <span class="icon_body"></span>
                      <?php echo $_smarty_tpl->tpl_vars['left_child']->value['name'];?>

                    </a>
                  </dl>
                  <?php if ($_smarty_tpl->tpl_vars['left_child']->value['childmenu']) {?>
                  <?php  $_smarty_tpl->tpl_vars['left_grandson'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_grandson']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_child']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['left_grandson']->key => $_smarty_tpl->tpl_vars['left_grandson']->value) {
$_smarty_tpl->tpl_vars['left_grandson']->_loop = true;
?>
                  <dl>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['left_grandson']->value['link'];?>
">
                      <span class="icon_body"></span>
                      &nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['left_grandson']->value['name'];?>

                    </a>
                  </dl>
                  <?php if ($_smarty_tpl->tpl_vars['left_grandson']->value['childmenu']) {?>
                  <?php  $_smarty_tpl->tpl_vars['left_grandson_next'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['left_grandson_next']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['left_grandson']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['left_grandson_next']->key => $_smarty_tpl->tpl_vars['left_grandson_next']->value) {
$_smarty_tpl->tpl_vars['left_grandson_next']->_loop = true;
?>
                  <dl>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['left_grandson_next']->value['link'];?>
">
                      <span class="icon_body"></span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['left_grandson_next']->value['name'];?>

                    </a>
                  </dl>
                  <?php } ?>
                <?php }?>
                  <?php } ?>
                  <?php }?>
                  <?php } ?>
                </li>
                <?php }?>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><?php }} ?>
