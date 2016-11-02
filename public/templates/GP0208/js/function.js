$(document).ready(function(){

    
  	jQuery(".slideBox").slide({mainCell:".banner ul",autoPlay:true});
    jQuery(".slideBox2").slide({mainCell:".banner2 ul",autoPlay:true});
  	
    // 下拉导航
	$(".navs ul li").hover(function(){   

		$(this).find(".erji").stop(false,true).slideDown(200);
		},function(){ 
		$(this).find(".erji").stop(false,true).slideUp("");
		})

	// 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
    	$("ul.menus>li:eq(0)>a").addClass('in')
    }else{
    	$("ul.menus>li>a[href^='"+index+"']").addClass('in')
    }
	
    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true, });  
    jQuery(".hd").slide({mainCell:"ul",autoPage:true,effect:"left",autoPlay:true,vis:4,prevCell:".up",nextCell:".down",trigger:"click"});
	
    // 返回顶部
    var oBtn=document.getElementById('btn1');
    var bSys=true;
    var timer=null;
    
    //如何检测用户拖动了滚动条
    window.onscroll=function ()
    {
        if(!bSys)
        {
            clearInterval(timer);
        }
        bSys=false;
    };
    
    oBtn.onclick=function ()
    {
        timer=setInterval(function (){
            var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
            var iSpeed=Math.floor(-scrollTop/8);
            
            if(scrollTop==0)
            {
                clearInterval(timer);
            }
            
            bSys=true;
            document.documentElement.scrollTop=document.body.scrollTop=scrollTop+iSpeed;
        }, 30);
    };
    
    
    $(window).scroll(function(){
      if($(document).scrollTop()>250){

        $(".img1").animate({top:"10px"},1400);
        $(".img2").animate({right:"0px",top:"10px"},1300);
        $(".img3").animate({left:"0px"},1200);
        $(".img4").animate({bottom:"0px"},1100);
      }
    });
    $(window).scroll(function(){
      if($(document).scrollTop()>700){
        
        $(".about-img").animate({left:"0px"},1200);
      }
    });
    $(window).scroll(function(){
      if($(document).scrollTop()>1300){
        
        $(".tell").animate({left:"48%"},900);
        $(".mile").animate({left:"16%"},1000);
        $(".adr").animate({left:"40%"},1100);
      }
    });

});	
	
    


	