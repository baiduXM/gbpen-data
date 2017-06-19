$(document).ready(function(){

  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    // 导航
    $(function(){
        var ulWidth=$("ul.menu").width();//得到ul宽度
        var liLen=$("ul.menu>li").length;//得到li的个数
        $("ul.menu>li").css({width:ulWidth/liLen})
        
        // 求ul.nav_list的left
        // var differ=($(".menu li").width()-$(".nav_list,.nav_list2").width())/2;
        // $(".nav_list,.nav_list2").css({left:differ});

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
    
    $(".detil .prolist li:nth-child(4n)").css("margin", " 18px 0px 18px 0");
    // 产品图滚动
    jQuery(".protop").slide({mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0,}); 
    jQuery(".hd").slide({mainCell:"ul",autoPage:true,autoPlay:true,effect:"top",vis:3,trigger:"mouseover",trigger:"click",});
   
});
	
    


	