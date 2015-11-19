<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 09:33:50
         compiled from "D:\unify\app\views\templates\GP0007\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25463563c73fee68ac6-17650505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4336ac8877d7e0aa3aad5c42098f180bc3126662' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0007\\index.html',
      1 => 1446795795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25463563c73fee68ac6-17650505',
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
    'contact' => 0,
    'caselist' => 0,
    'footscript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c73ff596544_89430053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c73ff596544_89430053')) {function content_563c73ff596544_89430053($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

        <div class="container">
        	<div class="index">
            	<div class="topcpmgter">
                	<div class="lefeimg"><div class="cas_title"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['prolist']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/cpzs_title.png" /></a></div>
                    <div class="m-slide" style="margin:0 auto">
			           <ul class="img">
                           <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['prolist']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>   
                                <li>
                                   <div class="cimgaer"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" /></div>
                                    <div class="prolist">
                                            <dl>
                                                <dd><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></dd>
                                                <dd class="company"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 </a></dd>
                                                <dd><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
 </a></dd>
                                            </dl>
                                        </div>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>                
                          <?php } ?>
                        </ul>
			            <ul class="tab polipic">
                           <div class="prodtitle">
                           <span>products</span><div class="cncp"><b><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['prolist']['link'];?>
">更多 &gt;&gt;</a></b><?php echo $_smarty_tpl->tpl_vars['index']->value['prolist']['name'];?>
</b></div>
                          </div>      
                           <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['prolist']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>                                                 
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                                    <div class="proslist"><div class="probg"></div>
                                        <div class="pronum">0<?php echo $_smarty_tpl->tpl_vars['article']->index+1;?>
</div>
                                        <div class="proimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="58" width="86" /></div>
                                    </div>
                                </a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['article']->index+1==4) {?><?php break 1?><?php }?>
                             <?php } ?>
			            </ul>
	                </div>                    
                  </div>    
                    <div class="knowleages fr">
                            <div class="prodtitleb">
                               <div class="titleb"><b><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['knowleages']['link'];?>
">更多 &gt;&gt;</a></b><?php echo $_smarty_tpl->tpl_vars['index']->value['knowleages']['name'];?>
</div>
                               <div class="entitle"><?php echo $_smarty_tpl->tpl_vars['index']->value['knowleages']['en_name'];?>
</div>
                            </div>
                            <div class="newslist">
                            	<ul>
                                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['knowleages']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->index++;
?>                
                                	<li>
                                    	<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
">
                                        	<div class="nimg"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" height="86" width="81" /><div class="lborder"></div></div>
                                            <div class="nword">
                                            	<div class="newtitle"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</div>
                                                <div class="huiyi_edit">
                                                <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                                                </div>                                             
                                            </div>
                                             <div class="more">》</div>
                                        </a>
                                    </li>
                                   <?php if ($_smarty_tpl->tpl_vars['article']->index+1==3) {?><?php break 1?><?php }?>
                                 <?php } ?>                                                                                     
                                </ul>
                            </div>
                        </div>                
                </div> 
                <div class="secoconmer">
<div class="caselist fl">
<div class="focusBoxb">
                            <ul class="pic">
                             <?php  $_smarty_tpl->tpl_vars['caselist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['caselist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['caselists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['caselist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['caselist']->key => $_smarty_tpl->tpl_vars['caselist']->value) {
$_smarty_tpl->tpl_vars['caselist']->_loop = true;
 $_smarty_tpl->tpl_vars['caselist']->index++;
?>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['caselist']->value['link'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['caselist']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['caselist']->value['title'];?>
" /></a></li>                            
                             <?php } ?> 
                            </ul>
                            <div class="txt-bg"></div>
                            <div class="txt">
                                <ul>
                                 <?php  $_smarty_tpl->tpl_vars['caselist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['caselist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['caselists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['caselist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['caselist']->key => $_smarty_tpl->tpl_vars['caselist']->value) {
$_smarty_tpl->tpl_vars['caselist']->_loop = true;
 $_smarty_tpl->tpl_vars['caselist']->index++;
?>
                                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['caselist']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['caselist']->value['title'];?>
</a></li>                            
                                 <?php } ?>                                     
                                </ul>
                            </div>
                
                            <ul class="num">
                           <?php  $_smarty_tpl->tpl_vars['caselist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['caselist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['caselists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['caselist']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['caselist']->key => $_smarty_tpl->tpl_vars['caselist']->value) {
$_smarty_tpl->tpl_vars['caselist']->_loop = true;
 $_smarty_tpl->tpl_vars['caselist']->index++;
?>
                             <li><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['caselist']->index+1;?>
</a><span></span></li>
                           <?php } ?> 
                           
                            </ul>
                    </div>                    
                    </div>   
<div class="about fr">
                      <div class="prodtitleb ahoutitle">
                               <div class="titleb"><b><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['link'];?>
">更多 &gt;&gt;</a></b><?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['name'];?>
</div>
                               <div class="entitle"><?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['en_name'];?>
</div>
                            </div>   
                      <div class="aboutbg">
                      	<div class="about_leftimg"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['image'];?>
" height="92" width="63" /></div>
                        <div class="about_word">
                        	<div class="titlaer"><?php echo $_smarty_tpl->tpl_vars['contact']->value['company'];?>
 </div>
                                <div class="anputt">
<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['description'];?>
<span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['aboutedit']['link'];?>
">[查看详情]</a></span>
                                </div>                            
                        </div>
                      </div>                 
                    </div>                                 
                </div>             
            </div>
       </div>         
        <?php echo $_smarty_tpl->getSubTemplate ("./_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->tpl_vars['footscript']->value;?>

    </div>  
</body>
</html>
















<?php }} ?>
