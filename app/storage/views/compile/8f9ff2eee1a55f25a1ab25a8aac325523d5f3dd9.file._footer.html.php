<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:54:58
         compiled from "D:\unify\app\views\templates\GP0005\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2293856405f62f147b1-79467232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f9ff2eee1a55f25a1ab25a8aac325523d5f3dd9' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0005\\_footer.html',
      1 => 1446795756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2293856405f62f147b1-79467232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'global' => 0,
    'link' => 0,
    'footprint' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405f630e8bd8_29838907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405f630e8bd8_29838907')) {function content_56405f630e8bd8_29838907($_smarty_tpl) {?><div class="footbg">
            	<div class="midfooter">
                  <div class="footer">
                         <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a> |
                        <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a> |
                        <?php } ?><br />  
                        <ul class="links clearfix"><li  class="fl">友情链接：</li>
                            <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
                            <li class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a></li>
                            <?php } ?>
                        </ul>                         
                     <span>
                      版权所有<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 <?php echo $_smarty_tpl->tpl_vars['global']->value['contactusfoot'];?>
</span>
                  </div>
                </div>
            </div>
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>
