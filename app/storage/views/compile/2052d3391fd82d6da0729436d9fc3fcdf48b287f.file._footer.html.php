<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 03:29:37
         compiled from "D:\unify\app\views\templates\GP0009\_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:6325563fef248069b6-35969625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2052d3391fd82d6da0729436d9fc3fcdf48b287f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0009\\_footer.html',
      1 => 1447126175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6325563fef248069b6-35969625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fef248f2118_72433416',
  'variables' => 
  array (
    'global' => 0,
    'flink' => 0,
    'footprint' => 0,
    'contact' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fef248f2118_72433416')) {function content_563fef248f2118_72433416($_smarty_tpl) {?>    <div class="link">
       <div class="linkcon">
            <span>友情链接：</span>
            <?php  $_smarty_tpl->tpl_vars['flink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['flink']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['flink']->key => $_smarty_tpl->tpl_vars['flink']->value) {
$_smarty_tpl->tpl_vars['flink']->_loop = true;
 $_smarty_tpl->tpl_vars['flink']->index++;
?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['flink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['flink']->value['title'];?>
</a>
              <?php if ($_smarty_tpl->tpl_vars['flink']->index+1==8) {?><?php break 1?><?php }?>  ·
            <?php } ?>           
       </div>
        
    </div>
    <div class="foot">
         <div class="public">
             <p><?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
 地址：<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
 电话：<?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
 <br /></p>

             <div class="footr">
                 <a href="javascript:void(0);" onclick="shoucang(document.title, window.location)">
                     点击加入收藏
                     <span>更好的找到我们</span>
                 </a>
                 <div class="tel">
                     <span><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</span>
                     <p>火热加盟热线</p>

                 </div>
             </div>
         </div>
    </div>

<?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
<?php }} ?>
