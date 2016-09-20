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
    
	
});	
	
    


	