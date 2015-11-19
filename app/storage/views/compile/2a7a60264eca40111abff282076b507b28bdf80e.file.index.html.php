<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 07:38:25
         compiled from "D:\unify\app\views\templates\GP0011\index.html" */ ?>
<?php /*%%SmartyHeaderCode:14154564c2af1812e88-20724402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a7a60264eca40111abff282076b507b28bdf80e' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0011\\index.html',
      1 => 1447401406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14154564c2af1812e88-20724402',
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
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c2af1ea2dc8_24362658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c2af1ea2dc8_24362658')) {function content_564c2af1ea2dc8_24362658($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <div class="containers">
         <div class="line2"></div>
        	<div class="prodbg">
            	<div class="pro1">
                	<div class="pro_titles">
                       <div class="le_a"><?php echo $_smarty_tpl->tpl_vars['index']->value['prizesa']['name'];?>
 | <b><?php echo $_smarty_tpl->tpl_vars['index']->value['prizesa']['en_name'];?>
</b></div>
                        <div class="le_ats">
                          <ul id="navlist" class="navlist clearfix">
                          <li class="nLi">
                                                <h3><a href="#">查看<?php echo $_smarty_tpl->tpl_vars['index']->value['prizesa']['name'];?>
分类</a></h3>
                                                <ul class="sub">
                                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['prizesa']['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>
</a></li> 
                                                  <?php } ?>   
                                                </ul>
                                        </li>                   

                                    </ul>  
                                  
                                                        
                       </div>                       
                    	<div class="moreaa"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['prizesa']['link'];?>
">更多&gt;&gt;</a></div>
                    </div>
<div id="prizes">
  <div class="photos">
    <a href="javascript:void(0);" class="photos-button photos-prev"></a>
    <div class="photos-content <?php if (count($_smarty_tpl->tpl_vars['index']->value['prizesa']['data'])>4) {?> enable<?php }?>">
      <ul>
                   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['prizesa']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"  width="174" height="131"/><h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2></a></li>                    
                    <?php } ?>         
  
        

      </ul>
    </div>    
    <a href="javascript:void(0);" class="photos-button photos-next"></a>
  </div>

                
                </div>                    
                </div>
            </div>
            <div class="gywom_ta">
            	<div class="about_ta">
                	<div class="pro_titles2"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutlist']['link'];?>
">更多>></a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['aboutlist']['name'];?>
  | <b><?php echo $_smarty_tpl->tpl_vars['index']->value['aboutlist']['en_name'];?>
</b></div>
<div class="border"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutlist']['image'];?>
" height="177" width="159" />
                      <div class="anputt">
                        <?php echo $_smarty_tpl->tpl_vars['index']->value['aboutlist']['description'];?>
<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutlist']['link'];?>
">[了解更多]</a></span>
                      </div>
                   </div>                   
                	
                </div>
                <div class="news_list">
                	<div class="pro_titles3">
                       <?php echo $_smarty_tpl->tpl_vars['index']->value['newslist']['name'];?>
 | <b><?php echo $_smarty_tpl->tpl_vars['index']->value['newslist']['en_name'];?>
</b>
                    	<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['newslist']['link'];?>
">更多&gt;&gt;</a></span>
                    </div>  
<div class="border2">
<div class="news_deta3">
                          <ul> 
   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['newslist']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>   
   <?php if ($_smarty_tpl->tpl_vars['article']->index==0) {?>                          
                        <div class="n_tu">
                         	<div class="n_img"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="110" width="138"/></div>
                            <div class="n_word">
                            	<div class="n_title"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></div>
                                <div class="huiyi_edit">
                                  <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
<Span><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">[详情]</a></Span>
                                </div>   
                                <div class="data">发表日期：<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</div>  
                                                            
                            </div>
                         </div>
	  <?php } elseif ($_smarty_tpl->tpl_vars['article']->index>0) {?>
                   
                    
                           <li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span class="date"><time class="fr" datetime="<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
" pubdate="pubdate"><?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</time></span><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></li>
                             <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                             <?php }?>
                        <?php } ?>                   
                          </ul>  
                       </div>			                                  
                     </div>                                  
                </div>
            </div>
            <div class="prodbg2">
            	<div class="pro_titles4"><span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['casesa']['link'];?>
">更多>></a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['casesa']['name'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['index']->value['casesa']['en_name'];?>
</b></div>
<div id="prizesb">
  <div class="photos">
    <a href="javascript:void(0);" class="photos-button photos-prev"></a>
    <div class="photos-content <?php if (count($_smarty_tpl->tpl_vars['index']->value['prizesa']['data'])>4) {?> enable<?php }?>">
      <ul>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['casesa']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['casesa']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
" target="_blank"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['index']->value['casesa']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
"  width="174" height="131"/><h2><?php echo $_smarty_tpl->tpl_vars['index']->value['casesa']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['title'];?>
</h2></a></li>
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
