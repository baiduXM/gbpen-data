<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:53:47
         compiled from "D:\Unify\app\views\templates\GP0006\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:2517156405f1b561767-67612786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa541232130d54d9600dd01cfb646972ffb3346' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0006\\_header.html',
      1 => 1445481972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2517156405f1b561767-67612786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'search_action' => 0,
    'navs' => 0,
    'litmit' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405f1bad9562_87981376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405f1bad9562_87981376')) {function content_56405f1bad9562_87981376($_smarty_tpl) {?><div class="top2">
                  <div class="logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/></a>
                  </div>
                  <div class="rightop">
                  	<div class="search">
                    	<form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                            <input type="text" name="s" value="" class="txt1" />
    	                    <input type="submit" class="btm1" value="搜索"  />    	
                       </form>     
                    </div>
                    <div class="menu">
                       <ul id="nav" class="nav clearfix">
                        <?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(8, null, 0);?>
                        <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['litmit']->value) {?><?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
                            <li class="nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1)-1;?>
%">
                                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></h3>
                            </li>
                            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
                            <li  class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1);?>
%">
                                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
                                <ul class="sub clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
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
                                    <?php }?>
                                </ul>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['litmit']->value) {?><?php break 1?><?php }?>
                          <?php } ?>
                                          
		              </ul>               
                    </div>
                  </div>
                  <div class="datub">
                    <div id="slideBoxb" class="slideBoxb">
                        <div class="datbg">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/bannbg2.png" />
                        </div>
                        <div class="hd">
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepicsb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepicsb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>                            
                                 <?php } ?>                                
                            </ul>                           
                        </div>
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
		             </div>                  	
                  </div>
                </div>
            <?php }} ?>
