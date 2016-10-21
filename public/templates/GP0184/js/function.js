$(document).ready(function(){

    // banner滚动
  	jQuery(".slideBox").slide({mainCell:".banimg ul",autoPlay:true});
  	jQuery(".nslideBox").slide({mainCell:".nbanimg ul",autoPlay:true});
  	

   jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,
           effect:"left",autoPlay:true,vis:1,trigger:"click"});
    
        // nav显示隐藏
		  $("#show").click(function(){
		  	$(".menu_nav").show(100);
	      });
	      $("#hide").click(function(){
		 	$(".menu_nav").hide(100);
		  });
                   
      // 点击任何地方  让left隐藏 bus_select出现
  		$(document).click(function(){   $(".menu_nav").hide(); $("#show").show();   });
  		// 点击left 阻拦(让left隐藏 bus_select出现)(stopPropagation阻拦click事件冒泡) 及实现了 点击left之外的任何地方  让left隐藏 bus_select出现
  		$("#show").click(function(event){  event.stopPropagation();  });
  		// 点击bus_select之后 left出现  bus_select隐藏
  		$(".menu_nav").click(function(event){ 
  		       $(".menu_nav").hide();
  		       $("#show").show(); 
  		       event.stopPropagation();
  		 });		  	 	     
    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left",autoPlay:true, });	
	  jQuery(".hd").slide({mainCell:"ul",autoPage:true,effect:"left",
               autoPlay:true,vis:3,trigger:"click"});
      
    // 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
    	$("ul.menus>li:eq(0)>a").addClass('in')
    }else{
    	$("ul.menus>li>a[href^='"+index+"']").addClass('in')
    }

    

});	
	
    


	