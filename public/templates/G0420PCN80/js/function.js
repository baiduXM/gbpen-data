$(document).ready(function(){

  	// 焦点图片切换
    jQuery("#banner").slide({ mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    $(".banbox .ser_nav").css("transform", "translateX(-43%)");
    
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $("ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $("ul.menu>li>a[href^='"+index+"']").addClass('in')
        }

     // 内页导航
    $(".ce > .celi").hover(function(){
        $(this).find("ul.er").stop(true, true).slideDown(500);
    },function(){
        $(this).find("ul.er").slideUp(500);
    })

    $(".er > .e_li").hover(function(){
        $(this).find("ul.thr").stop(true, true).slideDown(500);
    },function(){
        $(this).find("ul.thr").slideUp(500);
    })
    $(".dectil .prolist li:nth-child(3n)").css("margin", "0 0 11px 0");
    // 案例展示
    jQuery(".caseleft").slide({mainCell:".caselist",autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click",nextCell:".next",prevCell:".prev"});
    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true, });  
    jQuery(".hd").slide({mainCell:"ul",autoPage:true,effect:"left",autoPlay:true,vis:3,prevCell:".left",nextCell:".down",trigger:"click"});

    
    $(".foot_bot .f_one li:nth-child(5)").css("display", "none");
   
});
	
    


	