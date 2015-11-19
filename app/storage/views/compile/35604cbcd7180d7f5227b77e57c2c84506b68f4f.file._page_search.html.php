<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 03:17:04
         compiled from "D:\unify\app\views\templates\GM0080\_page_search.html" */ ?>
<?php /*%%SmartyHeaderCode:5433564bec6f897446-85227679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35604cbcd7180d7f5227b77e57c2c84506b68f4f' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0080\\_page_search.html',
      1 => 1447816616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5433564bec6f897446-85227679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564bec6f8b0076_16050618',
  'variables' => 
  array (
    'search_action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564bec6f8b0076_16050618')) {function content_564bec6f8b0076_16050618($_smarty_tpl) {?><div class="page_right page_search">
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
