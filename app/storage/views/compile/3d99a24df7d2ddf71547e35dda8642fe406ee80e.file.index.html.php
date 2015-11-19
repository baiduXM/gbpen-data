<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 06:05:39
         compiled from "D:\unify\app\views\templates\GP0014\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17210564c15330150c9-00955045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d99a24df7d2ddf71547e35dda8642fe406ee80e' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0014\\index.html',
      1 => 1447826347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17210564c15330150c9-00955045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'favicon' => 0,
    'site_url' => 0,
    'title' => 0,
    'headscript' => 0,
    'index' => 0,
    'global' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c153353e359_02868250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c153353e359_02868250')) {function content_564c153353e359_02868250($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
    // 跳转手机页面
    <?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
      if (!!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
        location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
      }
    <?php }?>
</script>   

<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-CN">
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
	<div class="wappers">
        <!-- 头文件引入 -->
        <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="containers">
        	 <div class="ind_left">

                <div class="about_t">
                    <h3><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">更多&gt;&gt;</a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['name'];?>
</h3>
<div class="border"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['image'];?>
" height="116" width="178"/>                    
                    <div class="about_p">
                      <?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['description'];?>

                      <span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">【了解更多】</a></span>            
                    </div>                	
                    </div>
                </div>   
<div class="prod_t">
                    <h3><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
">更多&gt;&gt;</a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
</h3>
<div id="prizes">
  <div class="photos">
    <a href="javascript:void(0);" class="photos-button photos-prev"></a>
    <div class="photos-content photo1" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 728px;height: 156px;">
      <ul>

        
                       <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['pro']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = 1;
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
                           <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
" width="174" height="131" /><h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['title'];?>
</h2></a></li>
                          
                        <?php endfor; endif; ?>
      </ul>
    </div>
    <div class="photos-content photo2" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 728px;height: 156px;">
      <ul>

        
                       <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['pro']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = (int) 8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = 1;
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
                           <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
" width="174" height="131" /><h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['title'];?>
</h2></a></li>
                          
                        <?php endfor; endif; ?>
      </ul>
    </div>
    <a href="javascript:void(0);" class="photos-button photos-next"></a>
  </div>

                </div>
                </div>                            
             </div>
             
             <div class="right_index">
             	<div class="contct">
                	<h3><span><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_img']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/inbgw_06.jpg" height="22" width="55" /></a></span>联系我们<b>CONTACT</b></h3>
      <div class="limg"><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_img']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['global']->value['contact_img']['image'];?>
" height="89" width="219" /></a></div>
                    <div class="lxw2">       
                    <?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us'];?>
          
                    </div>
                </div>
             	<div class="xwzx">
                	<h3><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/inbgw_06.jpg" height="22" width="55" /></a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
<b><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</b></h3>
			            <div class="news_deta1">
                          <ul>
                              <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a></li>

                              <?php } ?>
                                                  
                          </ul>  
                       </div>                       
                    </div>                
             </div>
        </div> 
      <!-- footer inport -->
      <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div> 
</body>
</html>
















<?php }} ?>
