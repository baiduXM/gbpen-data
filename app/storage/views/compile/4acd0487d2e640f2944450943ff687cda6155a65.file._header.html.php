<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 08:33:10
         compiled from "D:\unify\app\views\templates\GP0006\_header.html" */ ?>
<?php /*%%SmartyHeaderCode:9272563c65c6be56a6-54895422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4acd0487d2e640f2944450943ff687cda6155a65' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\_header.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9272563c65c6be56a6-54895422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'search_action' => 0,
    'limit' => 0,
    'navs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    '_header' => 0,
    'slidepic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c65c6ec0316_56042211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c65c6ec0316_56042211')) {function content_563c65c6ec0316_56042211($_smarty_tpl) {?><header class="p_r">
  <div class="head_outsidl p_a w_o">
    <div class="head">
        <h2 class="logo f_l">
          <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" height="128" max-width="387" class="logoimg"/>
          </a>
        </h2>
        <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" class="hides f_r ">
           <input type="text" placeholder="请输入搜索关键词" class="input_case" name="s">
           <input type="submit" value="" class="input_key">
        </form>
    </div>
    <div class="menu">
            <ul class="nav clearfix" id="nav">
                <?php $_smarty_tpl->tpl_vars['limit'] = new Smarty_variable(8, null, 0);?>
                <li class="nLi" style="width: <?php echo 100/($_smarty_tpl->tpl_vars['limit']->value+1);?>
%"><h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">网站首页</a></h3>
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
    <div id="slideBox" class="slideBox w p_r">
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
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
    </div>
     
</header>
<?php }} ?>
