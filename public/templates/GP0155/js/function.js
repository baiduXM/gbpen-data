$(document).ready(function(){


  	jQuery(".slideBox").slide({mainCell:".banner ul",autoPlay:true});
  	jQuery(".slideBox2").slide({mainCell:".banner ul",autoPlay:true});

	$(".navs ul li").hover(function(){   

		$(this).find(".erji").stop(false,true).slideDown(200);
		},function(){ 
		$(this).find(".erji").stop(false,true).slideUp("");
		})
    jQuery(".picScroll-left").slide({mainCell:".picList",autoPage:true,effect:"left",
               autoPlay:true,vis:4,trigger:"click"});
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });
	jQuery(".hd").slide({mainCell:"ul",autoPage:true,effect:"left",
               autoPlay:true,vis:4,trigger:"click"});
});	
	
    


	