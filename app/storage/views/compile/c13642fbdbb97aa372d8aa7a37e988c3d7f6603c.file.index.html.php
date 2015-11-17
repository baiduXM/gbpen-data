<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 01:00:54
         compiled from "D:\Unify\app\views\templates\GP0010\index.html" */ ?>
<?php /*%%SmartyHeaderCode:152564141c62e6a63-89161992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13642fbdbb97aa372d8aa7a37e988c3d7f6603c' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0010\\index.html',
      1 => 1445482106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152564141c62e6a63-89161992',
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
    'headscript' => 0,
    'index' => 0,
    'new' => 0,
    'global' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564141c6c2ded9_83206612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564141c6c2ded9_83206612')) {function content_564141c6c2ded9_83206612($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Unify\\vendor\\dark\\smarty-view\\src\\Dark\\SmartyView\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
js/function.js"></script>
    <?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>
<body>
    <div class="wrap">
        <!-- 导入头部文件 -->
        <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="content">
        	<div class="side-left fl">
                <div class="side-tit">
                    <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['name'];?>
</h2><span><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['en_name'];?>
</span><i></i><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
" class="more"></a>
                </div>
                <div class="about">
                    <dl>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['description'];?>

                        </a>
                    </dl>
                    <dt><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['image'];?>
" alt=""></a></dt>
                </div>
            </div>
            <div class="side-middle fl">
                <div class="side-tit"><h2><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
</h2><span><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['en_name'];?>
</span><i></i><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
" class="more"></a></div>


                <ul class="newlist">
                    <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?>
                    <?php if ($_smarty_tpl->tpl_vars['new']->index==0) {?>                      
                    <div class="firstnew">
                        <div class="firstnew-pic"><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['new']->value['image'];?>
" alt=""></a></div>
                        <div class="firstnew-dep">
                            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</a></h2>
                            <span class="firstnew-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['pubtimestamp'],'%Y-%m-%d');?>
</span>
                            <span class="firstnew-dep-desc">
                                <?php echo $_smarty_tpl->tpl_vars['new']->value['description'];?>

                            </span>
                        </div>

                    </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['new']->index>0) {?>                                                 

                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
"><h2><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
 </h2><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['new']->value['pubtimestamp'],'%Y-%m-%d');?>
</span></a></li>
                                
                    <?php }?>
                           
                    <?php } ?>                   
                 </ul>

            </div>
            <div class="side-right fr">
                <div class="contact">
                    <h2>CONTACT US</h2>
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
            <div class="pro">
                <div class="side-tit"><h2><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
</h2><span><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['en_name'];?>
</span><i></i><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
" class="more"></a></div> 
                <div id="prizes">
                    <div class="photos">
                        <a href="javascript:void(0);" class="photos-button photos-prev"></a>
                        <div class="photos-content <?php if (count($_smarty_tpl->tpl_vars['index']->value['pro']['data'])>4) {?>enable<?php }?>">
                            <ul>
                               <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
                                   <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['pro']->value['link'];?>
" class="choose">
                                       <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
" />
                                       <h2><?php echo $_smarty_tpl->tpl_vars['pro']->value['title'];?>
</h2>
                                    </a>
                                   </li>
                                  
                                <?php } ?>
                            </ul>
                        </div>
                        <a href="javascript:void(0);" class="photos-button photos-next"></a>
                    
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
