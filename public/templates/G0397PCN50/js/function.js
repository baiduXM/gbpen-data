$(document).ready(function(){

  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen})

        $(".menu>li").hover(function(){
            $(this).find("ul.nav_list").stop(true, true).slideDown(500);
        },function(){
            $(this).find("ul.nav_list").slideUp(500);
        })
    });
    // 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
        $("ul.menu>li:eq(0)>a").addClass('in')
    }else{
        $("ul.menu>li>a[href^='"+index+"']").addClass('in')
    }
    // 导航下划线滚动
   // $(".nav ul li a").mouseenter(function(){
   //      var parent=$(this).parent();
   //      left=parent.position().left;

   //      $(".back").stop(true,true).animate({left:left,width:"112px"}, "fast");
   //  })
   //      $(".nav ul").mouseleave(function(){
   //      $(".back").stop(true,true).animate({left:"0px",width:"112px"},"fast");

   //  })
    // 产品推荐
    jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:30});
    // 公司简介
    $(function(){
      $(".ab_list > li > a").click(function(){
         // $(this).addClass("name").parents().siblings().find("a").removeClass("name");
         $(this).parents().siblings().find(".name_det").hide(300);
         $(this).siblings(".name_det").toggle(300);
        });
    });
    
    $("#banner .dot").css("transform", "translateX(-50%)");
    $(".about_r .ab_list li:first-child .name_det").css("display","block")
    $("#footer .foot .gz .ewm .wx:first-child").css("margin-right","40px")
    // 产品图滚动
    jQuery(".protop").slide({mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0,}); 
    jQuery(".hd").slide({mainCell:"ul",autoPage:true,autoPlay:true,effect:"top",vis:3,trigger:"mouseover",trigger:"click",});
   
    
   
});
	
    


	