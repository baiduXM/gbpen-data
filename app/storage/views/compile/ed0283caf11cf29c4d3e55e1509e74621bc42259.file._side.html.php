<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 06:47:31
         compiled from "D:\unify\app\views\templates\GP0003\_side.html" */ ?>
<?php /*%%SmartyHeaderCode:17277564007a1f18589-34191266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed0283caf11cf29c4d3e55e1509e74621bc42259' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0003\\_side.html',
      1 => 1447060949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17277564007a1f18589-34191266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564007a257e742_60634530',
  'variables' => 
  array (
    'pagenavs' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'nav_listsec' => 0,
    '_side' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564007a257e742_60634530')) {function content_564007a257e742_60634530($_smarty_tpl) {?><div class="side clearfix">
	<div class="side_inner">
		


<?php if ($_smarty_tpl->tpl_vars['pagenavs']->value) {?>
<h4><?php echo $_smarty_tpl->tpl_vars['posnavs']->value[0]['name'];?>
</h4>
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
<h4><?php echo $_smarty_tpl->tpl_vars['_side']->value['pagenavs']['name'];?>
</h4>
<nav>
	
	<ul class="mtree">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_side']->value['pagenavs']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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

</div>
</div><?php }} ?>
