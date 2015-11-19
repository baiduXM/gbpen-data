<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:11:06
         compiled from "D:\unify\app\views\templates\GM0052\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:170365640632a9b3662-04317827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33476a46d365ca67f878eb2c23cf3da96ef58e8d' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0052\\_header.html',
      1 => 1446794375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170365640632a9b3662-04317827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'global' => 0,
    'slidepic' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640632aa93732_15301232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640632aa93732_15301232')) {function content_5640632aa93732_15301232($_smarty_tpl) {?><header>
    <div class="top">
        <div class="header">
            <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
        </div>
        <div class="baner">
            <div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul></ul>
                </div>
                <div class="bd">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                        <li>
                            <a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" /></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
      <a class="arrow-left" href="#">&lt;</a>
      <a class="arrow-right" href="#">&gt;</a>
      <div class="nav">
          <div class="swiper-nav swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></span></div>
                  <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                  <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
                  <?php } ?>
              </div>
          </div>
      </div>
    </div>
</header>
<?php }} ?>
