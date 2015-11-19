<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 07:14:17
         compiled from "D:\unify\app\views\templates\GM0065\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:38495642db835fdea5-91216971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ee9599fd1ede6e6ef07d812d79f5b72e408ad5' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0065\\_header.html',
      1 => 1447226053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38495642db835fdea5-91216971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642db836d2f10_92907066',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642db836d2f10_92907066')) {function content_5642db836d2f10_92907066($_smarty_tpl) {?><header>
    <div class="header">
      <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
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
" title="500*245" /></a></li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="menulist">
        <div class="navlist"> <a class="arrow-left" href="#">&lt;</a> <a class="arrow-right" href="#">&gt;</a>
          <div class="swiper-nav swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">本站首页</a></span></div>
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
    </div>
  </header>
	
	
	<?php }} ?>
