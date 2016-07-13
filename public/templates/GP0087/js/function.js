$(document).ready(function(){
	
  
  jQuery("#nav").slide({ 
		type:"menu",
		titCell:".nLi", 
		targetCell:".sub", 
		effect:"slideDown", 
		delayTime:300 , 
		triggerTime:0, 
		returnDefault:true 
	});

  jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});

  //多图时轮播
    jQuery(".slideBox3").slide({  mainCell:".bd ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
    mouseOverStop:false,/* 鼠标移到容器层继续播放*/
    /* 控制进度条 */
      startFun:function(){
        var timer = jQuery(".slideBox3 .timer");
        timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
      }
    });

	/*内页三级菜单下拉*/
    jQuery(".secondul").slide({
      titCell:".sub2", //鼠标触发对象
      targetCell:".sub2 ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
      effect:"slideDown", //targetCell下拉效果
      delayTime:300 , //效果时间
      triggerTime:0, //鼠标延迟触发时间（默认150）
      defaultPlay:false,//默认是否执行效果（默认true）
      });
    jQuery(".firstul").slide({
      titCell:".sub1", //鼠标触发对象
      targetCell:".secondul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
      effect:"slideDown", //targetCell下拉效果
      delayTime:300 , //效果时间
      triggerTime:0, //鼠标延迟触发时间（默认150）
      defaultPlay:false,//默认是否执行效果（默认true）
      });

	
//限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
      $(this).text($(this).text().substring(0,maxwidth));
      $(this).html($(this).html()+'...');
    }
    });

    

    $(window).load(function(){
      $("#product .img").css("position","relative");
      $("#product ul li").each(function(){
      $(this).find(".line").width($(this).find("span").innerWidth()-6);
      });
      $("#product .line").height($("#product .inner span").height()-6);
    });


    

});
  

