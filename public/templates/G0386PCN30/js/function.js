$(document).ready(function(){

  	// 焦点图片切换
    jQuery(".pic-left").slide({titCell:".dot",mainCell:".menu",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click",nextCell:".next",prevCell:".prev"});
    
    // 导航
    $(function(){
        var ulWidth=$("ul.nmenu").width();//得到ul宽度
        var liLen=$("ul.nmenu>li").length;//得到li的个数
        $("ul.nmenu>li").css({width:ulWidth/liLen})

    });
    // 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
        $("ul.nmenu>li:eq(0)>a").addClass('in')
    }else{
        $("ul.nmenu>li>a[href^='"+index+"']").addClass('in')
    }
   
    // 案例展示
    jQuery(".pros").slide({mainCell:".picList",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",nextCell:".next",prevCell:".prev"});
    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true, });  
    jQuery(".hd").slide({mainCell:"ul",autoPage:true,effect:"left",autoPlay:true,vis:3,prevCell:".left",nextCell:".down",trigger:"click"});
    
    
   
});
	
    


	