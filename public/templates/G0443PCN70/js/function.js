$(document).ready(function(){

  	// 焦点图片切换
    jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    $("#banner .dot").css("transform", "translateX(-50%)");
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
    //栏目随滚动条位置变化
    $(window).scroll(function(){
      if($(document).scrollTop()>250){

        $(".nav1").animate({top:"0px"},1400);
        $(".nav2").animate({right:"0px",top:"0px"},1300);
        $(".nav3").animate({left:"0px",bottom:"0px"},1200);
        $(".nav4").animate({right:"0px",bottom:"0px"},1100);
      }
    });
    
    $(".sidebox .prolist ul li:nth-child(4n)").css("margin", "0 0 6px 0");
    $(".side3 .newlist ul li:nth-child(2n+1)").css("margin-right", "40px");
    $(".side_right .prolist ul li:nth-child(3n)").css("margin", "0 0 6px 0");
    
    // 产品图片切换
    jQuery(".pros").slide({ titCell:".dot", mainCell:".prolist", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover"});
    
    // 字数限制
    // var oBox=document.getElementById('demo');
     
    // var demoHtml = oBox.innerHTML.slice(0,10)+'...';

    // oBox.innerHTML = demoHtml;
   
});
	
    


	