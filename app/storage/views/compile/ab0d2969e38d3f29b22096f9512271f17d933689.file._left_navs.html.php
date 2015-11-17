<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:23:26
         compiled from "D:\Unify\app\views\templates\GM0001\_left_navs.html" */ ?>
<?php /*%%SmartyHeaderCode:30020564057fedbb114-32591703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab0d2969e38d3f29b22096f9512271f17d933689' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GM0001\\_left_navs.html',
      1 => 1446795347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30020564057fedbb114-32591703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    'nav_listht' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564057ff345da9_17708528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564057ff345da9_17708528')) {function content_564057ff345da9_17708528($_smarty_tpl) {?><div class="class page-prev">
  <h2 class="class-top">
    <!-- <span class="class-close">×</span> -->
    快捷导航
  </h2>
  <nav>
  <div class="nav">
  <ul class="mtree">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首 页</a></li>
    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
      <li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?><?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
      <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
          <ul>
            <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
              <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?><?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a>
               <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>
                  <ul>
                    <?php  $_smarty_tpl->tpl_vars['nav_listsec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listsec']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listsec']->key => $_smarty_tpl->tpl_vars['nav_listsec']->value) {
$_smarty_tpl->tpl_vars['nav_listsec']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listsec']->key;
?>
                    <li>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
</a>
                      <?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['childmenu']) {?>
                      <ul>
                        <?php  $_smarty_tpl->tpl_vars['nav_listht'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_listht']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_listsec']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_listht']->key => $_smarty_tpl->tpl_vars['nav_listht']->value) {
$_smarty_tpl->tpl_vars['nav_listht']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_listht']->key;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listht']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listht']->value['name'];?>
</a></li>
                        <?php } ?>
                      </ul> 
                     <?php }?>   


                    </li>
                    <?php } ?>
                  </ul> 
                 <?php }?>                                             
              </li>
            <?php } ?>
          </ul>
          <?php }?>                            
      </li>
      <?php } ?>          
  </ul>
  </div>
  </nav>
</div><?php }} ?>
