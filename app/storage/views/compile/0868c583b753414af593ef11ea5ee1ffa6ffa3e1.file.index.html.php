<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 01:00:26
         compiled from "D:\unify\app\views\templates\GM0073\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1056156444e274ca481-39340303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0868c583b753414af593ef11ea5ee1ffa6ffa3e1' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0073\\index.html',
      1 => 1447635605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056156444e274ca481-39340303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56444e27a91a96_73703781',
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'headscript' => 0,
    'global' => 0,
    'slidepic' => 0,
    'mIndexCats' => 0,
    'mIndexCat' => 0,
    'article' => 0,
    'footprint' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56444e27a91a96_73703781')) {function content_56444e27a91a96_73703781($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
	<head>
		<!-- 实时预览调试代码，模板开发完成后删除 -->
		
		<!-- 调试代码 End -->
		<script type="text/javascript">
		// 跳转PC页面
		<?php if ($_smarty_tpl->tpl_vars['site_another_url']->value) {?>
			if (!navigator.userAgent.match(/AppleWebKit.*Mobile.*/)) {
				location.href = '<?php echo $_smarty_tpl->tpl_vars['site_another_url']->value;?>
';
			}
		<?php }?>
		</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0, maximum-scale=1.5,user-scalable=no,minimal-ui">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />        
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta content="telephone=no, email=no" name="format-detection">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/reset.css" /> 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/public.css" /> 
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/swipe.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/TouchSlide.1.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/share.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper-2.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/idangerous.swiper.3dflow-2.0.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/simple-app.js"></script>
<script type="text/javascript">
	window.addEventListener('load', function(){
   setTimeout(function(){ window.scrollTo(0, 1); }, 100);
});//safari浏览器可以通过此代码来隐藏地址栏
</script>
	<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>

        <div class="index-wrap">
          <div class="wrap-bg">
           <?php echo $_smarty_tpl->getSubTemplate ("./_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
           <div class="topxzb"></div>
           <div class="baner">
	<div id="slideBox" class="slideBox">
    <div class="hd">
            <ul></ul>
              </div>
	<div class="bd">
		<ul>
  <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                    <li><a class="pic" href="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidepic']->value['title'];?>
" /></a></li>
                <?php } ?>
		</ul>
	</div>
    </div>
            
   </div>  
           <div class="index_edit">
           <?php  $_smarty_tpl->tpl_vars['mIndexCat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mIndexCat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['mIndexCat']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['mIndexCat']->key => $_smarty_tpl->tpl_vars['mIndexCat']->value) {
$_smarty_tpl->tpl_vars['mIndexCat']->_loop = true;
 $_smarty_tpl->tpl_vars['mIndexCat']->index++;
?>
           <?php if ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==4) {?> 
               <div class="about_p">
                 <div class="leftaimg">
                 	<div class="aimg_tu">
                    	<div class="topxzc"></div>
                        <div class="aimg"><span><img src="images/aimg.jpg" width="100%"></span></div>
                    </div>
                    <div class="left_name">
                    	<div class="topxzc"></div>
                        <div class="name_title"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
</div>
                    </div>
                    <div class="left_name">
                    	<div class="topxzc"></div>
                        <div class="name_title name_title_d"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</div>                    
                    </div>
                 </div>
                 <div class="right_edit">
                   <div class="topxzc"></div>
                   <div class="rbger">
					<div class="rbger_edit"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['description'];?>
<span><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['link'];?>
'">[查看更多]</a></span> </div>   
                    <div class="a_tuxing"></div>               
                   </div>
                 </div>
               </div>  
                <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==2) {?>
               <div class="prod_p">
                   <div class="pro_title">
                     <div class="topxzd"></div>
                     <div class="title_a"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
 · <b><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</b></div>
                   </div>
                   <div class="pro_bg">
                     <div class="topxzd"></div>
                     <div class="prodshow">
<div id="picScroll<?php echo $_smarty_tpl->tpl_vars['mIndexCat']->index+1;?>
" class="picScroll">				
				<div class="bd">
                <?php  $_smarty_tpl->tpl_vars['articleb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articleb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articleb']->key => $_smarty_tpl->tpl_vars['articleb']->value) {
$_smarty_tpl->tpl_vars['articleb']->_loop = true;
?>
						<ul>
                        <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>
							<li><a onclick="javascript:window.location.href='<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
'"><div class="prsilimg"><img _src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /><div class="pri_titles"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div></div></a></li>
                           <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                        <?php } ?>
                   
						</ul>   
				<?php } ?>                                      
                                                                


				</div>
<div class="hd">
						<span class="next"></span>
						<ul>
                <?php  $_smarty_tpl->tpl_vars['slidepic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidepic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['global']->value['slidepics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slidepic']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidepic']->key => $_smarty_tpl->tpl_vars['slidepic']->value) {
$_smarty_tpl->tpl_vars['slidepic']->_loop = true;
 $_smarty_tpl->tpl_vars['slidepic']->index++;
?>
                 <li><?php echo $_smarty_tpl->tpl_vars['slidepic']->index+1;?>
</li>
                   <?php } ?>                        
                        </ul>
						<span class="prev"></span>
				</div>                
			</div>                     
                     </div>  
                     <div class="prbtm">
                      <div class="topxzd"></div> 
                      <div class="cpb"></div>                	
                      </div>
                   </div>   
               </div>
               <?php } elseif ($_smarty_tpl->tpl_vars['mIndexCat']->value['type']==1) {?>
               <div class="news_p">
                   <div class="pro_title">
                     <div class="topxzd"></div>
                     <div class="title_a"><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['name'];?>
 · <b><?php echo $_smarty_tpl->tpl_vars['mIndexCat']->value['en_name'];?>
</b></div>
                   </div> 
                   <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mIndexCat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>   
                   <div class="new_list">
                   	 <div class="news_data">
                       <div class="topxzb"></div>
                       <div class="data">
                       <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%y');?>
.<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%m');?>
<b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['pubtimestamp'],'%d');?>
</b>
                       </div>
                     	
                     </div>
                     <div class="news_word">
                       <div class="topxzb"></div>
                   <div class="rbgerb">
					<div class="rbger_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div> 
                    <div class="rbger_editb">
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                    </div> 
                     </div>
                   </div>           
               </div> 
                <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
               <?php } ?>
           </div>
                <?php }?>
            <?php } ?> 
<div class="dfoot">
               	 <div class="top">∧</div>
               	 <div class="midfot">
                   <div class="topxzc"></div>
                   <div class="dibu">
<?php echo $_smarty_tpl->tpl_vars['footprint']->value;?>
                   
                   </div>
                 </div>
               </div>               
        </div>
           
         </div>   
          
        
        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>
              
        </div>


</body>
</html>
<?php }} ?>
