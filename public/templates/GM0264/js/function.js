$(document).ready(function(){


  	jQuery(".slideBox").slide({mainCell:".banner ul",autoPlay:true});
  	

	$(".navs ul li").hover(function(){   

		$(this).find(".erji").stop(false,true).slideDown(200);
		},function(){ 
		$(this).find(".erji").stop(false,true).slideUp("");
		})

	$(".nav2 li").hover(function(){   

		$(this).find(".erji2").stop(false,true).slideDown(200);
		},function(){ 
		$(this).find(".erji2").stop(false,true).slideUp("");
		})
    // 产品图向左滚动
    jQuery(".picScroll-left").slide({mainCell:".picList",autoPage:true,effect:"left",
               autoPlay:true,vis:1,trigger:"click"});
    
    
    // 文字列表向上滚动
    jQuery(".txtScroll-top").slide({mainCell:".infoList",autoPage:true,effect:"top",autoPlay:true,vis:1});

    // 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
    	$("ul.menu>li:eq(0)>a").addClass('in')
    }else{
    	$("ul.menu>li>a[href^='"+index+"']").addClass('in')
    }
	
});	
	
    


	