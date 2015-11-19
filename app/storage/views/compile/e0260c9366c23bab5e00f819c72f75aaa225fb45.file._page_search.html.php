<?php /* Smarty version Smarty-3.1.19, created on 2015-11-06 06:59:18
         compiled from "D:\unify\app\views\templates\GM0015\_page_search.html" */ ?>
<?php /*%%SmartyHeaderCode:8640563c4fc6f3d4b3-11501565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0260c9366c23bab5e00f819c72f75aaa225fb45' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0015\\_page_search.html',
      1 => 1446793127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8640563c4fc6f3d4b3-11501565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c4fc7012d69_50669963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c4fc7012d69_50669963')) {function content_563c4fc7012d69_50669963($_smarty_tpl) {?><div class="page_right page_search">
      <div class="top_nav">
        <h2>搜索</h2>
        <a href="javascript:;" class="to_page">返回</a>          
        <a class="font_btn" href="javascript:;">字</a>
        <div class="font">
          <span class="big">大</span>
          <span class="normal">中</span>
          <span class="small">小</span>
        </div>          
        
      </div>

      <div class="search">
        <span>搜索：</span>
        <form id="form" class="fm clearfix" name="f" action="<?php echo $_smarty_tpl->tpl_vars['search_action']->value;?>
" method="GET" >
          <span class="s_ipt_w">
            <input type="text" placeholder="请输入关键字" name="s" id="">
          </span>
          <span class="s_btn_w">
            <input type="submit" name="" id="smt" class="gb_btn" value="">
          </span>
        </form>
      </div>
    </div><?php }} ?>
