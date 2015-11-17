<?php /* Smarty version Smarty-3.1.19, created on 2015-11-11 03:06:20
         compiled from "D:\Unify\app\views\templates\GP0015\index.html" */ ?>
<?php /*%%SmartyHeaderCode:82925642b0ac8fd576-39991417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc6a3db783cdc8b8cac8c47a7be000d2febd075f' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0015\\index.html',
      1 => 1445591911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82925642b0ac8fd576-39991417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'site_url' => 0,
    'favicon' => 0,
    'title' => 0,
    'headscript' => 0,
    'index' => 0,
    'contact' => 0,
    'article' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5642b0ad39c1a6_48158052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642b0ad39c1a6_48158052')) {function content_5642b0ad39c1a6_48158052($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery1.42.min.js"></script>
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
		<!-- 头部 -->
		<?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- 最新产品 -->
            <div class="container">
            
            		<div class="ctn_top">
                    		<div class="vdeo">
								<embed src="<?php echo $_smarty_tpl->tpl_vars['index']->value['video'];?>
" allowFullScreen="true" quality="high" width="225" height="158" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>                            
                            </div>
                            <div class="atn_about about_width">
                            		<h3 class="atn_title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['atnabout']['link'];?>
" class="more"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.png" /></a><?php echo $_smarty_tpl->tpl_vars['index']->value['atnabout']['name'];?>
<i><?php echo $_smarty_tpl->tpl_vars['index']->value['atnabout']['en_name'];?>
</i></h3>
                                    <div class="atn_eadit"> <b><?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
</b><?php echo $_smarty_tpl->tpl_vars['index']->value['atnabout']['description'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['atnabout']['link'];?>
">【查看详情】</a>   </div>
                            </div>

                             <div class="atn_about news_width">
                            		<h3 class="atn_title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['newswidtha']['link'];?>
" class="more"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.png" /></a><?php echo $_smarty_tpl->tpl_vars['index']->value['newswidtha']['name'];?>
<i><?php echo $_smarty_tpl->tpl_vars['index']->value['newswidtha']['en_name'];?>
</i></h3>
                                    <ul class="news_list">
                       <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['newswidtha']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                           <li class="nli"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                             <?php if ($_smarty_tpl->tpl_vars['article']->index+1==5) {?><?php break 1?><?php }?>
                        <?php } ?>                                               
                                    </ul>
                            </div>
                            <div class="contact">
                            		<h3 class="atn_title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['contact']['link'];?>
" class="more"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more.png" /></a>联系我们<i>CONTACT US</i></h3>
                                    <div class="atn_eadit">
                                    	<p class="con_tel "><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</p>
                                        <p class="con_add "><?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
</p>
                                        <p class="con_more_01  "><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['rczprec']['link'];?>
" class="border_rg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/hr_bg.jpg" /><?php echo $_smarty_tpl->tpl_vars['global']->value['rczprec']['name'];?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['feedback']['link'];?>
" class="border_rg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/veo_bg.jpg" /><?php echo $_smarty_tpl->tpl_vars['global']->value['feedback']['name'];?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['dowload']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/xz_bg.jpg" /><?php echo $_smarty_tpl->tpl_vars['global']->value['dowload']['name'];?>
</a></p>
                                   	</div>
                            </div>                            
                            

                            
                    </div>
<div class="prizesa">
<div id="prizes">
  <div class="photos">
    <a href="javascript:void(0);" class="photos-button photos-prev"></a>
    <div class="photos-content <?php if (count($_smarty_tpl->tpl_vars['index']->value['prizesa']['data'])>4) {?> enable<?php }?>" >
      <ul>        
<!--                 <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['prizesa']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="174" height="131" /></a></li>
                    
                  <?php } ?>-->
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['prizesa']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
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
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['prizesa']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
" target="_blank"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['index']->value['prizesa']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
"/></a></li>
                    <?php endfor; endif; ?>                  
                  
      </ul>
    </div>    
    <a href="javascript:void(0);" class="photos-button photos-next"></a>
  </div>

                
                </div>        
        </div>                    
                    
                    
		
        
        
</div>                      
		<!-- 热门产品 -->

		<!-- 底部 -->
		<?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
	</body>
</html>
<?php }} ?>
