$(document).ready(function(){
    
   
  	// 焦点图片切换
    jQuery("#banner").slide({ mainCell:".picture", effect:"left",interTime:"6000", mouseOverStop:false, delayTime:500,autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    if($(".wrap_l .title span").size()>0){
      var str=$(".wrap_l .title span").html();
      var target="<i>"+str.substring(0,1)+"</i>";
      $(".wrap_l .title span").html(target+str.substr(1));
    }
    jQuery(".news").slide({titCell:".dot", mainCell:".newlist", effect:"top", autoPlay:true,autoPage:true,vis:"3",trigger:"mouseover"});
    $(".news .dot").css("transform", "translateX(-50%)");

    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen-1})
    });
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $(".navs ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $(".navs ul.menu>li>a[href^='"+index+"']").addClass('in')
        }
    

    if($('.posnav .pos_name span').html() == 0){
        $('.posnav .pos_name span').hide();
    }
    // 样式
    $(".pros ul li:nth-child(2n)").css("margin", "0 0 30px 0");

    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true, });  
    jQuery(".picFocus .hd").slide({mainCell:"ul",autoPage:true,effect:"left",autoPlay:true,vis:4,prevCell:".left",nextCell:".down",trigger:"click"});
   
   
    
   
});
	
    


	