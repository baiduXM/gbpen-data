$(document).ready(function(){
    
   

    $("span.wxbtn").click(function(){
        $(".ewm").toggleClass("ewmon");
    });
  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",interTime:"3500",autoPlay:true, autoPage:true, trigger:"mouseover"});
    $("#banner .dot").css("transform", "translateX(-50%)");
   
    $("#banner").hover(function(){
        $(this).find(".prev,.next").stop(true, true).fadeTo("show",0.5)
    },function(){
        $(this).find(".prev,.next").fadeOut()
    });
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
            $("ul.menu>li:eq(0)>a").addClass('in')
        }else{
            $("ul.menu>li>a[href^='"+index+"']").addClass('in')
        }
    
    $(".nav_btn,.navbox").hover(function(){
        $(".navbox").addClass("navbox_h");
    },function(){
        $(".navbox").removeClass("navbox_h");
    })
    

    $(".chos_pro ul li:nth-child(4n)").css("margin", "20px 0 20px 0"); 
    $(".prolist li:nth-child(3n)").css("margin", "20px 0 20px 0"); 
    // 产品图片切换
    jQuery(".pros").slide({ titCell:".dot", mainCell:".prodt", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    if($('ul.prodt').children("li").length == 1){
        $(".prev,.next").hide();
    }
    
   // 鼠标滚动渐入
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
    
   
});
	
    


	