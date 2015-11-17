<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 01:00:54
         compiled from "D:\Unify\app\views\templates\GP0010\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:16625564141c6c5a021-18433214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd357154b764fc65f8f169fdc90909d27f33c48d1' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0010\\_header.html',
      1 => 1445482106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16625564141c6c5a021-18433214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'search_action' => 0,
    'title' => 0,
    'logo' => 0,
    'navs' => 0,
    'nav' => 0,
    'global' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564141c7044337_53907838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564141c7044337_53907838')) {function content_564141c7044337_53907838($_smarty_tpl) {?>    	<div class="header">
           <div class="topleft">
               <a id="animation" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" title="返回首页"></a>
           </div>  
           <div class="search">
                <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                  <input class="searchbox fl" type="text" name="s" value="关键字搜索" />
                  <input class="searchbtn fl" type="submit" value="" />
                </form>               
           </div>

           <div class="menu">
                    <h1 class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt=""></a></h1>
                    <nav>
                        <ul class="clearfix">
                            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->index>2) {?>fr<?php } else { ?>fl<?php }?><?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>


                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['nav']->index+1==6) {?><?php break 1?><?php }?>
                            <?php } ?>
                        </ul>




                    </nav>      
           </div>





        </div>

        <div class="banner">
            <div class="banner-shd"></div>
            <div id="slideBox" class="slideBox">
                <div class="hd">
                    <ul>
                       <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
?>
                        <li></li>
                       <?php } ?>
                    </ul>
                </div>
                <div class="bd">
                    <ul>
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
                </div>

                <!-- 下面是前/后按钮代码，如果不需要删除即可 -->

                <a class="prev" href="javascript:void(0)"></a>
                <a class="next" href="javascript:void(0)"></a>


            </div>            
        </div><?php }} ?>
