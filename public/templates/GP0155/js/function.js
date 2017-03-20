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
	// 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
        $("ul.menus>li:eq(0)>a").addClass('in')
    }else{
        $("ul.menus>li>a[href^='"+index+"']").addClass('in')
    }
});	
	
    


	