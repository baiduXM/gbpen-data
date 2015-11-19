<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 08:54:58
         compiled from "D:\unify\app\views\templates\GP0005\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2413356405f627163a6-86748226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26d49a7c586e7a7858ffab41ab3290a6ce12cd2' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0005\\index.html',
      1 => 1446795756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2413356405f627163a6-86748226',
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
    'logo' => 0,
    'search_action' => 0,
    'navs' => 0,
    'litmit' => 0,
    'nav' => 0,
    'nav_list' => 0,
    'index' => 0,
    'slidepic' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56405f62ee9ca4_06386698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56405f62ee9ca4_06386698')) {function content_56405f62ee9ca4_06386698($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><script type="text/javascript">
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
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jcarousellite.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
    <div class="wrap">
    	<div class="wap_bg">
            <div class="wapper_middle">
                <div class="top">
                  <div class="logo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/></a>
                  </div>
                  <div class="rightop">
                  	<div class="search">
                       <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                            <input type="text" name="s" value="" class="txt1" />
    	                    <input type="submit" class="btm1" value="搜索"  />    	
                      </form>     
                    </div>
                    <div class="menu">
                      <ul id="nav" class="nav clearfix">
                        <?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(8, null, 0);?>
                        <?php if (count($_smarty_tpl->tpl_vars['navs']->value)<$_smarty_tpl->tpl_vars['litmit']->value) {?><?php $_smarty_tpl->tpl_vars['litmit'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['navs']->value), null, 0);?><?php }?>
                            <li class="nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1)-1;?>
%">
                                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a></h3>
                            </li>
                            <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['nav']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->index++;
?>
                            <li  class="fl<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?> current<?php }?> nLi" style="width:<?php echo 100/($_smarty_tpl->tpl_vars['litmit']->value+1);?>
%">
                                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></h3>
                                <ul class="sub clearfix">
                                <?php if ($_smarty_tpl->tpl_vars['nav']->value['childmenu']) {?>
                                    <?php  $_smarty_tpl->tpl_vars['nav_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav_list']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['childmenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav_list']->key => $_smarty_tpl->tpl_vars['nav_list']->value) {
$_smarty_tpl->tpl_vars['nav_list']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav_list']->key;
?>
                                    <li class="<?php if ($_smarty_tpl->tpl_vars['nav']->value['current']) {?>current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav_list']->value['name'];?>
</a></li>
                                    <?php } ?>
                                    <?php }?>
                                </ul>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['nav']->index+1>=$_smarty_tpl->tpl_vars['litmit']->value) {?><?php break 1?><?php }?>
                          <?php } ?>
                                          
		              </ul>                    
                    </div>
                  </div>
                  <div class="datu">
                     <div id="slideBox" class="slideBox">
                        <div class="datbg">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/bannbg.png" height="331"  />
                        </div>
                        <div class="hd">
                            <ul>
                            <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                             <li><?php echo $_smarty_tpl->tpl_vars['slidepic']->index+1;?>
</li>
                               <?php } ?>                            
                            </ul>
                        </div>
                        <div class="bd">
                            <ul>
                                 <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>                            
                                 <?php } ?>                                
                            </ul>
                        </div>
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
		             </div>                  	
                  </div>
                </div>
                <div class="container">
                    <div class="index">
                    	<div class="cpzx">
                        	<div class="cp_title">
                              <div class="titiea title_family"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
</a></div>
                            </div>
                            <div class="prod_right">
                                <div id="prizes">
					                <div class="photos">                        
                                         <div class="photos-content <?php if (count($_smarty_tpl->tpl_vars['index']->value['pro']['data'])>4) {?> enable<?php }?>" >
                                            <ul>           
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['pro']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                                    <li>
                                                        <div class="zolistw">
                                                          <div class="pings">
                                                              <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
"  height="158" width="190"/></a>
                                                           </div>
                                                           <div class="linell"></div>
                                                           <div class="text">
                                                             <div class="dicpots"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['title'];?>
<b>查看详情</b></a></div>
                                                           </div>
                                                        </div>                                            
                                                    </li>                                                     
                                                <?php endfor; endif; ?>                                                                                                                                                         
                                              </ul>
                                        </div>                
                                    </div>
                                </div>                            
                            </div>                            
                        </div>
                         <div class="aboutnews">
                        	<div class="about fl">
                            	<div class="a_title">
                                	<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['link'];?>
">更多</a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['name'];?>

                                </div>
                                <div class="borders"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['image'];?>
" /><div class="linell"></div>
                                <div class="anputt">
                                    <?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['description'];?>
       
                                    <span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['link'];?>
">[查看详情]</a></span>
                                </div>
                                </div>                                
                            </div>
                            <div class="news fr">
                            	<div class="a_title">
                                	<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['newsedit']['link'];?>
">更多</a></span><?php echo $_smarty_tpl->tpl_vars['index']->value['newsedit']['name'];?>

                                </div>
                                <div class="news_edit">
                                	<ul>
                                       <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['newsedit']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>   
                                    	<li>
                                        	<div class="news_titlaser"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%Y-%m-%d');?>
 </span><b>-</b><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></div>
                                            <div class="news_per">
                                            <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                                            </div>
                                            <div class="ckxq"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">查看详情</a></div>
                                        	
                                        </li>                                       
                            <?php if ($_smarty_tpl->tpl_vars['article']->index+1==2) {?><?php break 1?><?php }?>                                    
                                      <?php } ?>                                       
                                    </ul>
                                </div>                            
                            </div>
                        </div>                       
                    </div>
                </div>                                
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>         
</body>
</html>
















<?php }} ?>
