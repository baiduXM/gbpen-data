<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:29:31
         compiled from "D:\Unify\app\views\templates\GP0009\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:110105640677b2476f3-94091868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31cbeddeec032a3b7911b41648524296d38bb0a' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0009\\_footer.html',
      1 => 1446530289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110105640677b2476f3-94091868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'contact' => 0,
    'global' => 0,
    'QQ' => 0,
    'navs' => 0,
    'nav' => 0,
    'link' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640677b516e66_62301626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640677b516e66_62301626')) {function content_5640677b516e66_62301626($_smarty_tpl) {?>    <div class="footbg">
       <div class="middtop">
           <div class="topaer">
               <a href="javascript:goTop();"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/topip.png" /></a>
           </div>
      </div>
      <div class="fon_top">
        <div class="mif_footer">
          <div class="telnum">
              <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/fobimg1.jpg" height="89" width="45" />
              <span><b>服务热线：</b><?php echo $_smarty_tpl->tpl_vars['contact']->value['mobile'];?>
</span>
          </div>
          <div class="qqimg">                
              <?php  $_smarty_tpl->tpl_vars['QQ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['QQ']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['QQ']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['QQ']->key => $_smarty_tpl->tpl_vars['QQ']->value) {
$_smarty_tpl->tpl_vars['QQ']->_loop = true;
?>
                   <a target="_blank" href="http://wpa.qq.com/msgrd?V=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['QQ']->value['title'];?>
&amp;Site=QQ客服&amp;Menu=yes"><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['QQ']->value['image'];?>
"></a>
              <?php } ?>    
                              
          </div>
          <div class="address">
              <?php echo $_smarty_tpl->tpl_vars['global']->value['contactusfoot'];?>

          </div>
       </div>
      </div>
        <div class="fotdibu">
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
            <?php } ?>   <br />
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
    <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
       <?php }} ?>
