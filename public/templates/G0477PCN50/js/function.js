$(document).ready(function(){
    
  	// 首页banner
    jQuery(".banner").slide({ titCell:".dot", mainCell:".banlist", effect:"left",autoPlay:true, autoPage:true, trigger:"mouseover"});
    $(".banner .dot").css("transform", "translateX(-50%)");
   
    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen})
        
    });
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $("ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $("ul.menu>li>a[href^='"+index+"']").addClass('in')
        }
    // 滚动
    jQuery(".probox").slide({mainCell:".prolist", effect:"left", autoPlay:true,autoPage:true,vis:"1",trigger:"mouseover"});
    jQuery(".txtScroll-top").slide({mainCell:".infoList",autoPage:true,effect:"top",autoPlay:true,vis:2});
        
    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true, });  
    jQuery(".picFocus .hd").slide({mainCell:"ul",autoPage:true,effect:"left",autoPlay:true,vis:4,prevCell:".up",nextCell:".down",trigger:"click"});
   
    
    // 鼠标滚动渐入
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
    
    // $(".nav_ny .ce li ul.er").css({left:-$(".nav_ny .ce").width()+$(".nav_ny .ce li").width()+230});
    $(function(){ 
      $(".nav_ny .ce li").click(function(){
        $(".nav_ny .ce li ul.er").css({left:-$(".nav_ny .ce li").width()*$(this).index()});
      })
    }); 
    


    if($('.side_ny .title i .iconfont').html() == 0){
        $('.side_ny .title i').hide();
    }
});
	
    


	