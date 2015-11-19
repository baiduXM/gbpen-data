<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:07:48
         compiled from "D:\unify\app\views\templates\GM0056\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2459456403e4fca85b9-57073775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '785fad13199dde544dda08cf772385b0784a759d' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0056\\_header.html',
      1 => 1447056465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2459456403e4fca85b9-57073775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56403e4fdbc6f1_70587727',
  'variables' => 
  array (
    'global' => 0,
    'slidepic' => 0,
    'logo' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403e4fdbc6f1_70587727')) {function content_56403e4fdbc6f1_70587727($_smarty_tpl) {?>  <div class="top_conts">
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
                    <li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
                <?php } ?>
            </ul>
          </div>	
		 </div>
       </div>      
     <div class="headmenu">     
        <div class="heaer">
            <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" width="100%"></div>
        </div>      
        <div class="menu">
           <div class="nav">
              <a class="arrow-left" href="#">&lt;</a> 
              <a class="arrow-right" href="#">&gt;</a>
              <div class="swiper-nav swiper-container">
                <div class="swiper-wrapper">
                   <div class="swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.html">网站首页</a></span></div>
                        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                          <div class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?> swiper-slide"><span><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></span></div>
                        <?php } ?>                                  
                    </div>
             </div>
          </div>
        </div> 
    </div>
  </div>    <?php }} ?>
