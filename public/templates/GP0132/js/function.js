$(document).ready(function(){


  	jQuery(".slideBox").slide({mainCell:".banner ul",autoPlay:true});

	/*$(".nav ul li").hover(function(){   

		$(this).find(".erji").stop(false,true).slideDown(200);
		},function(){ 
		$(this).find(".erji").stop(false,true).slideUp("");
		})*/
    jQuery(".picScroll-left").slide({mainCell:".bd ul",autoPage:true,effect:"left",
               autoPlay:true,vis:1,trigger:"click"});
	
});	
	
    


	