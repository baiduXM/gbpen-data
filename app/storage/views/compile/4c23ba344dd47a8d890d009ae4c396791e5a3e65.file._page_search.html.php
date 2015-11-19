<?php /* Smarty version Smarty-3.1.19, created on 2015-11-10 05:42:21
         compiled from "D:\unify\app\views\templates\GM0063\_page_search.html" */ ?>
<?php /*%%SmartyHeaderCode:1649563c57c9978801-75739082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c23ba344dd47a8d890d009ae4c396791e5a3e65' => 
    array (
      0 => 'D:\\unify\\app\\views\\templates\\GM0063\\_page_search.html',
      1 => 1447122771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649563c57c9978801-75739082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563c57c998e268_15125085',
  'variables' => 
  array (
    'search_action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c57c998e268_15125085')) {function content_563c57c998e268_15125085($_smarty_tpl) {?><div class="page_right page_search">
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
