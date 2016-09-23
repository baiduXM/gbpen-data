$(document).ready(function(){

    // banner滚动
  	jQuery(".slideBox").slide({mainCell:".banimg ul",autoPlay:true});
  	
   $(".navs ul li").hover(function(){   

		$(this).find(".erji").stop(false,true).slideDown(200);
		},function(){ 
		$(this).find(".erji").stop(false,true).slideUp("");
		})


   jQuery(".picScroll-left").slide({mainCell:".bd ul",autoPage:true,effect:"left",
               autoPlay:true,vis:1,trigger:"click"});
    
	// 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
    	$("ul.menu>li:eq(0)>a").addClass('in')
    }else{
    	$("ul.menu>li>a[href^='"+index+"']").addClass('in')
    }
});	
	
    


	