<?php /* Smarty version Smarty-3.1.19, created on 2015-11-19 03:16:34
         compiled from "D:\unify\app\views\templates\GP0017\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:765564c1c8ddf6b10-36475028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a059a9414a64a0e5c86e2a51888828d53d123f0' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0017\\_header.html',
      1 => 1447829782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '765564c1c8ddf6b10-36475028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c1c8e1c60e9_33771835',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c1c8e1c60e9_33771835')) {function content_564c1c8e1c60e9_33771835($_smarty_tpl) {?>
      <div class="headerbg">
              <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="112" width="710" /></a></div>
              <div class="home"><span><a href="#">联系我们</a> | <a href="#">会员中心</a></span></div>    
        </div> 
<!-- <div class='nav-box'>
    <ul id="nav" class="nav clearfix">
      <li class="nLi on">
        <h3><a href="#" target="_blank">网站首页</a></h3>
      </li>

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
      <?php } ?>
                                                    
    </ul>

</div> -->


        <div class="menu" id="menu">    
            <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
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
      <?php } ?>

            
           <!--  <li><a href="#">关于我们</a></li>
            <li><a href="#">新闻中心</a></li>
            <li><a href="#">课程介绍</a></li>
            <li><a href="#">精彩瞬间</a></li>            
            <li><a href="#">合作伙伴</a></li>
            <li><a href="#">招商加盟</a></li>
            <li><a href="#">下载中心</a></li>                
            <li><a href="#">人才招聘</a></li>                
            <li><a href="#">意见反馈</a></li>   -->                                      
            </ul>               
        </div> 


    <!--     
        <div class="menu" id="menu">    
            <ul>
            <li><a href="#">首页</a></li>


            
            <li><a href="#">关于我们</a></li>
            <li><a href="#">新闻中心</a></li>
            <li><a href="#">课程介绍</a></li>
            <li><a href="#">精彩瞬间</a></li>            
            <li><a href="#">合作伙伴</a></li>
            <li><a href="#">招商加盟</a></li>
            <li><a href="#">下载中心</a></li>                
            <li><a href="#">人才招聘</a></li>                
            <li><a href="#">意见反馈</a></li>                                        
            </ul>               
        </div> -->
      <div class="banners">
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
" /></a></li>
                    
          <?php } ?>
      </ul>
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>
                <ul class="hd">        
<?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                      <li></li>
                    
          <?php } ?>
                </ul>

      </div>        
      </div>      
   <?php }} ?>
