<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:33:44
         compiled from "D:\unify\app\views\templates\GP0004\fixed_nav.html" */ ?>
<?php /*%%SmartyHeaderCode:416356403a705944d1-00217339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a56ca1f9c236632381c99d8eba23c677164b521b' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0004\\fixed_nav.html',
      1 => 1447062379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416356403a705944d1-00217339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56403a70a11f69_54144154',
  'variables' => 
  array (
    'site_url' => 0,
    'logo' => 0,
    'title' => 0,
    'posnavs' => 0,
    'global' => 0,
    'index' => 0,
    'nav' => 0,
    'search_action' => 0,
    'contact' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56403a70a11f69_54144154')) {function content_56403a70a11f69_54144154($_smarty_tpl) {?><div class="fixed_nav">         
    <div class="top_fix_wp">
      <h1><a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a></h1>
    </div>
    <nav>
      <ul id="nav">
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['posnavs']->value)-1, null, 0);?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['global']->value['about']['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['about']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['about']['name'];?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['global']->value['news']['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['news']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['news']['name'];?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['global']->value['products']['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['products']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['products']['name'];?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['global']->value['case']['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['case']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['case']['name'];?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['global']->value['feedback']['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['feedback']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['feedback']['name'];?>
</a></li>
        <li class="<?php if ($_smarty_tpl->tpl_vars['global']->value['contact_us']['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us']['name'];?>
</a></li>


        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['fixed_navs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>          
          <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['name']==$_smarty_tpl->tpl_vars['posnavs']->value[$_smarty_tpl->tpl_vars['index']->value]['name']) {?>cur<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
          </li>              
        <?php } ?>
      </ul>
    </nav>


    <div class="search">
      <form id="form" class="fm" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" name="fm">
        <span class="s_ipt_wr">
          <input type="text" id="kw" name="s" class="s_ipt" placeholder=""/>
        </span>
        <span class="s_btn_wr">
          <input type="submit" class="s_btn" id="submit" value="">
        </span>
      </form>
    </div>
  
    <p class="hot_phone">服务热线:<span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></p>
    <div class="copyright"><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
</div>
</div><?php }} ?>
