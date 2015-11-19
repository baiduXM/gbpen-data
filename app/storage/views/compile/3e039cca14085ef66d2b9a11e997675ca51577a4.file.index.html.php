<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 08:33:10
         compiled from "D:\unify\app\views\templates\GP0006\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5788563c65c673ef22-34670614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e039cca14085ef66d2b9a11e997675ca51577a4' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0006\\index.html',
      1 => 1446795773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5788563c65c673ef22-34670614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'title' => 0,
    'headscript' => 0,
    'index' => 0,
    'article' => 0,
    'lnav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c65c7056e36_98797253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c65c7056e36_98797253')) {function content_563c65c7056e36_98797253($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- 调试代码 End -->
    <script type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
      if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
      }

    <?php }?>
    </script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
 <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />

<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
     <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         <div class="txtScroll-left w">
        <div class="bd">
           <h3>通知公告：</h3>
            <ul class="infoList">
               <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['roll']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    <li><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                
              <?php } ?>
            </ul>
        </div>
    </div> 
     <div class="contant">
        <div class="kjdh w_p">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['image'];?>
" alt="" /><p><span><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['icon'];?>
</span><?php echo $_smarty_tpl->tpl_vars['index']->value['list1']['name'];?>
</p></a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['image'];?>
" alt="" /><p><span><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['icon'];?>
</span><?php echo $_smarty_tpl->tpl_vars['index']->value['list2']['name'];?>
</p></a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['image'];?>
" alt="" /><p><span><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['icon'];?>
</span><?php echo $_smarty_tpl->tpl_vars['index']->value['list3']['name'];?>
</p></a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['image'];?>
" alt="" /><p><span><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['icon'];?>
</span><?php echo $_smarty_tpl->tpl_vars['index']->value['list4']['name'];?>
</p></a></li>                                 
            </ul>
        </div>
        <div class="c_t w ">
           <div class="c_t_l f_l w_a">
            <h3 class="c_tit p_r"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['list5']['link'];?>
"></a><span class="p_a"><?php echo $_smarty_tpl->tpl_vars['index']->value['list5']['en_name'];?>
</span><?php echo $_smarty_tpl->tpl_vars['index']->value['list5']['name'];?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['index']->value['list5']['description'];?>
</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['list5']['image'];?>
" alt="" />
           </div>
           <div class="c_t_r f_r w_a">
               <ul>
                   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['list6']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    <li><span><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['title']);?>
" /></a><div class="xq"><a class="ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a><p><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</p></div></li>
                    <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                    <?php } ?>
               </ul>
           </div>
        </div>
        <div class="c_b w">
             <div class="c_b_l f_l ">
             <h3 class="c_tit p_r"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['left_nav']['link'];?>
"></a><span class="p_a"><?php echo $_smarty_tpl->tpl_vars['index']->value['left_nav']['en_name'];?>
</span><?php echo $_smarty_tpl->tpl_vars['index']->value['left_nav']['name'];?>
</h3>
             <ul class="clearfix">
                            <?php  $_smarty_tpl->tpl_vars['lnav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lnav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['left_nav']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lnav']->key => $_smarty_tpl->tpl_vars['lnav']->value) {
$_smarty_tpl->tpl_vars['lnav']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['lnav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['lnav']->value['name'];?>
</a></li>
                            <?php } ?>
             </ul>
             </div>
             <div class="c_b_r f_r">
                        <div id="prizes">
                            <div class="photos">
                               <!--  <a href="javascript:void(0);" class="photos-button photos-prev"></a> -->
                                <div class="photos-content w_p ">
                                    <ul id="MarqueeDiv1">
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['pro']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = ((int) 2) == 0 ? 1 : (int) 2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total']);
?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
" width="174" height="131" />
                                                <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['title'];?>
</h2></a>
                                        </li>
                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['key']['rownum']>2) {?><?php break 1?><?php }?> <?php endfor; endif; ?>
                                    </ul>
                                </div>
                                <div class="photos-content w_p photo2 <?php if (count($_smarty_tpl->tpl_vars['index']->value['pro']['data'])>4) {?> enable<?php }?>">
                                    <ul id="MarqueeDiv2">
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['pro']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = ((int) 2) == 0 ? 1 : (int) 2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total']);
?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
" width="174" height="131" />
                                                <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['title'];?>
</h2></a>
                                        </li>
                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['key']['rownum']>1) {?><?php break 1?><?php }?> <?php endfor; endif; ?>
                                    </ul>
                                </div>
                              <!--   <a href="javascript:void(0);" class="photos-button photos-next"></a> -->
                            </div>
                        </div>
             </div>
        </div>
     </div>
     <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
	  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
              <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/MSClass.js"></script>
	  <script id="jsID" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>

      
</body>
</html>

<?php }} ?>
