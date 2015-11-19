<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 05:42:10
         compiled from "D:\unify\app\views\templates\GP0009\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25503563fef23e58c14-23363367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7df3ad9a3a350940c973ef42f322c25b8a0b6dae' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GP0009\\index.html',
      1 => 1447126174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25503563fef23e58c14-23363367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563fef244c25c5_31238433',
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
    'new' => 0,
    'pronum' => 0,
    'fullnum' => 0,
    'num' => 0,
    'pro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563fef244c25c5_31238433')) {function content_563fef244c25c5_31238433($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="http://common.mn.sina.com.cn/public/resource/lib/jquery.jcarousellite.js">
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/global.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
js/index.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headscript']->value;?>

</head>

<body>
<div class="wrap">
<!-- 导入头部文件 -->
    <?php echo $_smarty_tpl->getSubTemplate ('./_header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="content">
         <div class="row">
             <div class="about fl">
                 <h1 class="title ico1"><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['name'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">点击查看更多</a></h1>
                 <div class="about-nr">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['link'];?>
">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['image'];?>
" width="67" height="152">
                       <h2><?php echo $_smarty_tpl->tpl_vars['index']->value['about_us']['description'];?>
<span></span></h2>
                     </a>
                 </div>
             </div>
             <div class="news fl">
                 <h1 class="title ico2"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['name'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['link'];?>
">点击查看更多</a></h1>
                 <div class="newstop">
                     <dl><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['image'];?>
"></a></dl>
                     <dt><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['title'];?>
</a></dt>
                     <dd><?php echo $_smarty_tpl->tpl_vars['index']->value['news']['data'][0]['description'];?>
</dd>
                 </div>
                 <ul>
                 <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['news']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['new']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['new']->index++;
?><?php if ($_smarty_tpl->tpl_vars['new']->index+1==1) {?><?php continue 1?><?php }?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['link'];?>
" class="clearfix"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
<span><?php echo $_smarty_tpl->tpl_vars['new']->value['pubdate'];?>
</span></a></li>
                 
                 
                 <?php } ?>
                 </ul>
                   
             </div>
             <div class="contact fr">
                 <h1 class="title ico3">联系方式</h1>
                 
                 <div class="contact-con">
                   <b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
                    <?php echo $_smarty_tpl->tpl_vars['index']->value['contact_us'];?>

                 </div>
                
             </div>
         </div>
         <div class="pro">
            <div class="protit"><?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['name'];?>
 <span>\<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['en_name'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value['pro']['link'];?>
"></a></div>
            <div id="prizes">
                <div class="photos">
                    <a href="javascript:void(0);" class="photos-button photos-prev"></a>
                    <div class="photos-content">
                        <ul>
                        <?php $_smarty_tpl->tpl_vars['pronum'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['index']->value['pro']['data']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable(1, null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['fullnum'] = new Smarty_variable(5, null, 0);?>
                        <?php while (($_smarty_tpl->tpl_vars['pronum']->value<$_smarty_tpl->tpl_vars['fullnum']->value)) {?>
                            <?php $_smarty_tpl->tpl_vars['pronum'] = new Smarty_variable($_smarty_tpl->tpl_vars['pronum']->value%$_smarty_tpl->tpl_vars['fullnum']->value, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['fullnum'] = new Smarty_variable($_smarty_tpl->tpl_vars['fullnum']->value-$_smarty_tpl->tpl_vars['pronum']->value, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_variable($_smarty_tpl->tpl_vars['num']->value+1, null, 0);?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['item']->step = 1;$_smarty_tpl->tpl_vars['item']->total = (int) ceil(($_smarty_tpl->tpl_vars['item']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['item']->step));
if ($_smarty_tpl->tpl_vars['item']->total > 0) {
for ($_smarty_tpl->tpl_vars['item']->value = 1, $_smarty_tpl->tpl_vars['item']->iteration = 1;$_smarty_tpl->tpl_vars['item']->iteration <= $_smarty_tpl->tpl_vars['item']->total;$_smarty_tpl->tpl_vars['item']->value += $_smarty_tpl->tpl_vars['item']->step, $_smarty_tpl->tpl_vars['item']->iteration++) {
$_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->iteration == 1;$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;?>
                                   <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['index']->value['pro']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
                                       <li><a href="<?php echo $_smarty_tpl->tpl_vars['pro']->value['link'];?>
" class="choose"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
" width="89" height="117" /><h2 class="xu_word"><?php echo $_smarty_tpl->tpl_vars['pro']->value['title'];?>
</h2></a></li>
                                    <?php } ?>
                        <?php }} ?>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" class="photos-button photos-next"></a>
                
                </div>
            </div>

         </div>
 
     </div>
     <?php echo $_smarty_tpl->getSubTemplate ('./_footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
</body>
</html>
<?php }} ?>
