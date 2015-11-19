<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 09:33:51
         compiled from "D:\unify\app\views\templates\GP0007\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:30797563c73ffaa8667-89420241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ffd271045258e93b5e54b8f82cedc6043903aa' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0007\\_footer.html',
      1 => 1446795795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30797563c73ffaa8667-89420241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'site_url' => 0,
    'navs' => 0,
    'nav' => 0,
    'global' => 0,
    'link' => 0,
    'footprint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c73ffbb9687_54512591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c73ffbb9687_54512591')) {function content_563c73ffbb9687_54512591($_smarty_tpl) {?>        
<div class="foobg">
        	<div class="zhanban">
            	<div class="heiban">
                	<div class="hb_title"><?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
</div>
                    <div class="rexian">服务热线<span><?php echo $_smarty_tpl->tpl_vars['contact']->value['mobile'];?>
</span></div>
                </div>
            </div>
            <div class="zhan2">
            <div class="footmenubg">
            	<div class="flmenu">
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
                        <?php } ?>           
                </div>
                
            </div>
            <div class="foword">
                        友情链接:
                         <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
</a>
                            <?php } ?><br />            
              <?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
     
</div>
            </div>
        </div><?php }} ?>
