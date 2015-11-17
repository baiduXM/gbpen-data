<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 01:50:14
         compiled from "D:\Unify\app\views\templates\GP0010\list-imagetext.html" */ ?>
<?php /*%%SmartyHeaderCode:219056414d56590d83-54851896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed97cab8138b753f1a2dbe4b59adec3ec690d016' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0010\\list-imagetext.html',
      1 => 1445482106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219056414d56590d83-54851896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_another_url' => 0,
    'keywords' => 0,
    'description' => 0,
    'title' => 0,
    'site_url' => 0,
    'global' => 0,
    'posnavs' => 0,
    'nav' => 0,
    'list' => 0,
    'list1' => 0,
    'page_links' => 0,
    'near_page' => 0,
    'near_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56414d56bd0377_19017517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56414d56bd0377_19017517')) {function content_56414d56bd0377_19017517($_smarty_tpl) {?><!DOCTYPE html>
<html>
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

    <meta http-equiv="x-ua-compatible" content="ie=8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
css/css.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jsScroller.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jsScrollbar.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jsScrollShow.js"></script>    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/function.js"></script>

</head>
<body>
    <div class="wrap">
        <!-- 导入头部文件 -->
        <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div class="content">
            <div class="ny-sidelt fl">

                <?php echo $_smarty_tpl->getSubTemplate ('./_pagenavs_sub3.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <div class="contact">
               <!--      <h2>CONTACT US</h2> -->
                    <div class="contactbox">

                        <?php echo $_smarty_tpl->tpl_vars['global']->value['contact_us'];?>

                    </div>
                    <div class="idea">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['global']->value['yijian']['link'];?>
">
                            <h3><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['global']->value['yijian']['name'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</h3>
                            <span><?php echo $_smarty_tpl->tpl_vars['global']->value['yijian']['en_name'];?>
</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="ny-sidert fr">
                <div class="location">
                    当前位置：<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">首页</a>  
                    <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posnavs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                     - <a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
                    <?php } ?>
                </div>
                <div class="ny-main">
                    <div class="ny_scoll">    
                       <div id="Scroller-1">
                         <div class="Scroller-Container">
                           <div class="ny_show">
                              <div class="module_edit">
                                    <ul class="news">
                                       <?php  $_smarty_tpl->tpl_vars['list1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list1']->key => $_smarty_tpl->tpl_vars['list1']->value) {
$_smarty_tpl->tpl_vars['list1']->_loop = true;
?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['list1']->value['link'];?>
">
                                                <h2 class="news-tit"><?php echo $_smarty_tpl->tpl_vars['list1']->value['title'];?>
</h2>
                                                <div class="news-pic"><img src="<?php echo $_smarty_tpl->tpl_vars['list1']->value['image'];?>
" alt=""><h3><?php echo $_smarty_tpl->tpl_vars['list1']->value['title'];?>
</h3></div>
                                                <div class="news-dec">
                                                    <?php echo $_smarty_tpl->tpl_vars['list1']->value['description'];?>

                                                </div>
                                                <span class="news-more">全文 >></span>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>  
 

                                    <div class="paging">
                                       <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['first_link'];?>
">首 页</a>
                                       <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['prev_link'];?>
">上一页</a>

                                       <?php  $_smarty_tpl->tpl_vars['near_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['near_link']->_loop = false;
 $_smarty_tpl->tpl_vars['near_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['page_links']->value['nears_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['near_link']->key => $_smarty_tpl->tpl_vars['near_link']->value) {
$_smarty_tpl->tpl_vars['near_link']->_loop = true;
 $_smarty_tpl->tpl_vars['near_page']->value = $_smarty_tpl->tpl_vars['near_link']->key;
?>
                                          <?php if ($_smarty_tpl->tpl_vars['near_page']->value==$_smarty_tpl->tpl_vars['page_links']->value['current_page']) {?>
                                          <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
" class="paging-cur"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
                                          <?php } else { ?>
                                          <a href="<?php echo $_smarty_tpl->tpl_vars['near_link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['near_page']->value;?>
</a>
                                          <?php }?>
                                       <?php } ?>
                                       <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['next_link'];?>
">下一页</a>
                                       <a href="<?php echo $_smarty_tpl->tpl_vars['page_links']->value['last_link'];?>
">尾 页</a>

                                    </div>

                              </div>
                           </div>  
                         </div> 
                         <div id="Scrollbar-Container">        
                           <div class="Scrollbar-Track"> <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/scrollbar_handl.png" height="15" width="15" class="Scrollbar-Handle" /> </div>
                         </div>
                        </div>
                    </div>               
               </div>

            </div>            
    
            <!-- 导入底部文件 -->
            <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
        </div>
        

    </div>
</body>
</html>
<?php }} ?>
