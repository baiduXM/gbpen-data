$(document).ready(function(){
     
    $(".mild ul li").hover(function(){
        $(this).find(".mnav").stop(false,true).css({filter:"Alpha(opacity=0)"}).animate({opacity:"0"},200,function(){
            $(this).next(".hover_div").slideDown(200);
        })
      },function(){ 
        $(this).find(".mnav").stop(false,true).css({filter:"Alpha(opacity=100)"}).animate({opacity:"1"},100,function(){
            $(this).next(".hover_div").slideUp(200);
        })
     }
    )
    

	// 导航当前状态
    var num=window.location.href.split("/").length-1;    
    var index=window.location.href.split("/")[num];

    if(index==null || index==0){
    	$("ul.menus>li:eq(0)>p").addClass('in')
    }else{
    	$("ul.menus>li>p[href^='"+index+"']").addClass('in')
    }

    // 产品图滚动
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0 });
    jQuery(".hd").slide({mainCell:"ul",effect:"top",autoPlay:true,autoPage:true,vis:3,prevCell:".prev",nextCell:".next",trigger:"click"});
   
    // 一张图就隐藏
    if (document.getElementById('myul')) {
        var content=document.getElementById('myul').getElementsByTagName('li').length;
        if(content<2){
            $(".hd").hide()
        }
    };


});	

	