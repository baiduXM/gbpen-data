<?php /* Smarty version Smarty-3.1.19, created on 2015-11-12 06:04:46
         compiled from "D:\Unify\app\views\templates\GP0016\_gundong.html" */ ?>
<?php /*%%SmartyHeaderCode:85256442bfe9adf50-94215929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f255fa5cda0ac2cc922bbcfde29d3133f9072756' => 
    array (
      0 => 'D:\\Unify\\app\\views\\templates\\GP0016\\_gundong.html',
      1 => 1445593836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85256442bfe9adf50-94215929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'site_url' => 0,
    'search_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56442bfeac2ca0_24119935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56442bfeac2ca0_24119935')) {function content_56442bfeac2ca0_24119935($_smarty_tpl) {?><section>
	<div id="scrollfull" style="position:absolute; right:0px; top:250px;">
<ul>
	<li>
		<a href="tencent://message/?uin=<?php echo $_smarty_tpl->tpl_vars['contact']->value['qq'];?>
&Site=企业咨询&Menu=yes" target="_blank" class="QQ">
        <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/1_03.png" height="37" width="42" class="shows">

	</a>
	</li>
	<li>
		<a href="javascript:void(0)" class="tel">
		<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/2_03.png"  class="shows" />
		 <h3 class="hides hides2"><?php echo $_smarty_tpl->tpl_vars['contact']->value['telephone'];?>
</h3>
	</a>
	</li>
	<li>
		<a href="javascript:void(0)" class="key">
		<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/3_03.png" class="shows" />
		<form action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" class="hides" method="GET">
		    <input type="submit" value="" class="input_key" >
			<input type="text" placeholder="请输入..." class="input_case"  name="s">
			
		</form>
	</a>
	</li>
	<li>
		<a href="javascript:window.scroll(0,0)" onfocus="blur()">
		<img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/4_03.png" height="37" width="42" class="shows"/>
	    <img src="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
images/41-03.png" height="37" width="42"  class="hides hides4" /> 
	</a>
	</li>
</ul>
	
	
	
	
</div>
</section><?php }} ?>
