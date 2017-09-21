$(document).ready(function(){
    
  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    $("#banner .dot").css("transform", "translateX(-50%)");
   
    // $("#banner").hover(function(){
    //     $(this).find(".prev,.next").stop(true, true).fadeTo("show",0.5)
    // },function(){
    //     $(this).find(".prev,.next").fadeOut()
    // });
    
    jQuery(".probox").slide({ mainCell:".prolist", effect:"left",autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    // 导航
    $(function(){
        
        $(".three_nav>li").hover(function(){
            $(this).find("ul.nav_list").stop(true, true).slideDown(500);
        },function(){
            $(this).find("ul.nav_list").slideUp(500);
        })
        
    });
    // 导航当前状态
        var num=window.location.href.split("/").length-1;    
        var index=window.location.href.split("/")[num];

        if(index==null || index==0){
            $("ul.menu>li:eq(0)").addClass('in')
        }else{
            $("ul.menu>li[href^='"+index+"']").addClass('in')
        }
    // 内页导航
    $(function(){
        $(".nav_ny .ce li").hover(function(){
            $(this).find("ul.er").stop(true, true).slideDown(500);
            $(this).find("ul.er").parent().parent().next(".er_bg").stop(true, true).slideDown(500);
        },function(){
            $(this).find("ul.er").stop(true, true).delay(50).slideUp(500);
            $(this).find("ul.er").parent().parent().next(".er_bg").stop(true, true).delay(100).slideUp(500);
        })

    });
    
    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true,prevCell:".left",nextCell:".down",trigger:"click" });  
    jQuery(".picFocus .hd").slide({mainCell:"ul",autoPage:true,effect:"left",autoPlay:true,vis:3});
   
    // 样式
    // $(".side_ny .nybox .newbox .prolist ul li:nth-child(4n)").css("margin", "0 0 44px 0");
    
});
	
    


	