<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:11:33
         compiled from "D:\Unify\app\views\templates\GP0001\_pagenavs_sub3.html" */ ?>
<?php /*%%SmartyHeaderCode:269756405a2562e291-97412545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aafcdef0a0cb906ca2644cb4cb79ab633efaa37' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0001\\_pagenavs_sub3.html',
      1 => 1447061030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269756405a2562e291-97412545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405a262092d7_84122433',
  'variables' => 
  array (
    'pagenavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    '_pagenavs_sub3' => 0,
    'global' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405a262092d7_84122433')) {function content_56405a262092d7_84122433($_smarty_tpl) {?><div class="side">
	
<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<nav>
<ul class="mtree">
	<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagenavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
    <li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
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
            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
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
                  <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
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
</nav>
<?php } else { ?>	<!-- 让客服自己选择，如果当前无子栏目 展现的目标栏目 -->
<nav>
	<!-- $_pagenavs_sub3.pagenavs.childmenu -->
	<ul class="mtree">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_pagenavs_sub3']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li  class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
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
	            <li class="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_list']->value['selected']) {?>selected<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['nav_list']->value['childmenu']) {?>javascript:;<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
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
	                  <li class="<?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['current']) {?>mtree-open<?php }?> <?php if ($_smarty_tpl->tpl_vars['nav_listsec']->value['selected']) {?>selected<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_listsec']->value['name'];?>
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
</nav>
<?php }?>

<div class="link1"><?php echo $_smarty_tpl->tpl_vars['global']->value['link1']['icon'];?>
<h5><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['link1']['link'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['global']->value['link1']['name'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['global']->value['link1']['en_name'];?>
</span></a></h5><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['link1']['link'];?>
" class="more"></a></div>
<div class="link2"><?php echo $_smarty_tpl->tpl_vars['global']->value['link2']['icon'];?>
<h5><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['link2']['link'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['global']->value['link2']['name'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['global']->value['link2']['en_name'];?>
</span></a></h5><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['link2']['link'];?>
" class="more"></a></div>
<div class="tel"><?php echo $_smarty_tpl->tpl_vars['global']->value['link3']['icon'];?>
<div><p>TEL:<span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span></p><p>有什么疑问或建议请联系我们</p></div></div>

</div><?php }} ?>
