<?php /* Smarty version Smarty-3.1.19, created on 2015-11-09 09:29:29
         compiled from "D:\Unify\app\views\templates\GP0009\index.html" */ ?>
<?php /*%%SmartyHeaderCode:143085640677a000fd8-61686618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af0e86d4f72bf7f0f484fded4cc002798b5e62d2' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0009\\index.html',
      1 => 1446530289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143085640677a000fd8-61686618',
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
    'search_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5640677ab26878_40752955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640677ab26878_40752955')) {function content_5640677ab26878_40752955($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="i_bga">
        	<div class="public content">
            	<div class="news fl">
                  <div class="index_title">
                  	<div class="in_ernta"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['nlista']['en_name'];?>
</b><strong><?php echo $_smarty_tpl->tpl_vars['index']->value['nlista']['name'];?>
</strong><span><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sheyingword.png" /></span></div><div class="titlimg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/new_titlbg.jpg" /></div>
                  </div>
                  <div class="newslist_a">
                  	<ul>
                    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['nlista']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>     
                    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                        	<div class="news_timer">
                            	<div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%d');?>
<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%m');?>
</span></div>
                                <div class="n_word">
                                <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                                </div>
                                <div class="morejia">+</div>
                            </div>
                            <div class="newsoword">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                            </div>
                        	</a>
                        </li>  
                         <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
                    <?php } ?>                                                                                                  
                    </ul>
                  </div>
                </div>
                <div class="anougsearch fr">
                	<div class="search">  
                       <form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET">
                            <input type="text" name="s" value="" class="txt1" />
    	                    <input type="submit" class="btm1" value="搜索"  />    	
                      </form>                                        
                    </div>
                    <div class="aboutborder">
                    	<div class="aimg"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['image'];?>
" height="140" width="140" /></div>
                        <div class="a_editright">
                        	<div class="edit_title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['link'];?>
"><div class="titleaer"> <?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['name'];?>
</div><span> <?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['en_name'];?>
</span></a></div>
                            <div class="newsowordb">
                           <?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['description'];?>

                            </div>   
                            <div class="getmore"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['link'];?>
">GET MORE</a></div>                         
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    <div class="i_bgb">
        	<div class="public content">
            	<div class="zuopin">              
                  <div class="index_title">
                  	<div class="in_ernta"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['prolist']['en_name'];?>
</b><strong><?php echo $_smarty_tpl->tpl_vars['index']->value['prolist']['name'];?>
</strong><span><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sheyingword.png" /> </span><div class="morejiab"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['prolist']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more2.png" height="41" width="41" /></a></div></div>
                    <div class="titlimg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/new_titlbg2.jpg" /></div>
                  </div> 
                  
<div class="section">
	<ul class="clearfix">
     <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['prolist']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>   
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
        	<div class="proer_pic">
                <div class="photo"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" width="270" height="180"/></div>
                <div class="rsp"></div>
                <div class="text">
                	<div class="txbger"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</div><span class="ckqxqa">[查看详情]</span>
                </div>
            </div>
            <div class="hier_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
            <div class="timer"><span>+view</span>TIME:<?php echo $_smarty_tpl->tpl_vars['article']->value['pubdate'];?>
</div>
            </a>
		</li> 
          <?php if ($_smarty_tpl->tpl_vars['article']->index+1==8) {?><?php break 1?><?php }?>
                    <?php } ?>     	
	</ul>
	<div class="clear"></div>               
                  </div>               
                </div>
            </div>
        </div>
<div class="i_bga" style="border:none;">
        	<div class="public content">
            	<div class="abnouter">
                  <div class="index_title" style="margin-bottom:0px;">
                  		<div class="in_ernta"><b><?php echo $_smarty_tpl->tpl_vars['index']->value['caseliast']['en_name'];?>
</b><strong><?php echo $_smarty_tpl->tpl_vars['index']->value['caseliast']['name'];?>
</strong><span><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/sheyingword.png" /></span><div class="morejiab"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['caseliast']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/more3.png"  height="46" width="46"/></a></div></div>
                         <div class="titlimg"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/new_titlbg.jpg" /></div>
                  </div>                  
                  <div class="leftabout">
                  	<div class="aimga"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['caseliast']['image'];?>
" width="100%" height="100%" /></div>
                    <div class="newsowordc">
                   <?php echo $_smarty_tpl->tpl_vars['index']->value['caseliast']['description'];?>

                    </div>    
                    <div class="gengduo"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['caseliast']['link'];?>
">[查看更多]</a></div>                 
                  </div> 
                  <div class="rightsrcoll">
<div id="prizes">
					                <div class="photos">                        
                                    <a href="javascript:void(0);" class="photos-button photos-prev"></a>                       
                                         <div class="photos-content <?php if (count($_smarty_tpl->tpl_vars['index']->value['cirlepic']['data'])>3) {?> enable<?php }?>" >
                                            <ul>           
                                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['index']->value['cirlepic']['data']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                                     <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['cirlepic']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['cirlepic']['data'][$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['image'];?>
"/></a>
                                        
                                                    </li>                                                     
                                                <?php endfor; endif; ?>                                                                                                                                                         
                                              </ul>
                                        </div>  
                                        <a href="javascript:void(0);" class="photos-button photos-next"></a>                  
                                    </div>
                                </div>                  
                  </div>               
                </div>
            </div>
       </div>        
     
    <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          
    </div>
</body>
</html>

<?php }} ?>
