$(document).ready(function(){
    
  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    $("#banner").hover(function(){
        $(this).find(".prev,.next").stop(true, true).fadeTo("show",0.5)
    },function(){
        $(this).find(".prev,.next").fadeOut()
    });
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
    // 公司简介
    $(function(){
      $(".ul_list > li > a").click(function(){
         // $(this).addClass("name").parents().siblings().find("a").removeClass("name");
         $(this).parents().siblings().find(".case_det").hide(300);
         $(this).siblings(".case_det").toggle(300);
        });
    });
    $(".prolist .ul_list li:first-child .case_det").css("display","block")
    $(".prolist .ul_list li:last-child").css("margin-right","0px")
    // top出现
    $(window).scroll(function(){

        var scrollCho=$(window).scrollTop();

        if(scrollCho>100){
            $(".scroll-top").css({opacity: '1'});
            $(".scroll-top").addClass("tg_choose_show");
        }else{
            $(".scroll-top").css({opacity: '0'});
            $(".scroll-top").removeClass("tg_choose_show");
        }
    });
    /******滚回头部******/
    $(".scroll-top").click(function(){
        $("html,body").animate({scrollTop:'0px'},800);
    });
    // 产品图片切换
    jQuery(".pros").slide({ titCell:".dot", mainCell:".prolist", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    // 样式
    $(".side .ny_dectil .newlist li:nth-child(2n)").css("margin", "0 0 38px 0");
    $(".side .ny_dectil .textlist li:nth-child(2n)").css("margin-right", "0");
    $(".casebox .cases .caselist li:nth-child(2n)").css("margin", "0 0 30px 0");
    $(".side .newbox .newlist li:nth-child(2n)").css("margin", "20px 0 0 0");
    
   
});
	
    


	