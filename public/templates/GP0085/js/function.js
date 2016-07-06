$(document).ready(function(){
	$(".picScroll-left .bd ul li").hover(function(){
	 $(this).find(".title").stop().animate({
		 bottom:0
		 },{duration: 300, easing:"easeInSine"})
	},function(){
	 $(this).find(".title").stop().animate({
		 bottom:-25
		 },{duration: 200, easing:"easeOutSine"})
	});
  
  jQuery("#nav").slide({ 
		type:"menu",
		titCell:".nLi", 
		targetCell:".sub", 
		effect:"slideDown", 
		delayTime:300 , 
		triggerTime:0, 
		returnDefault:true 
	});

  jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});

  //多图时轮播
    jQuery(".slideBox3").slide({  mainCell:".bds ul", effect:"left", delayTime:1000, autoPlay:true, autoPage:true, trigger:"click",
    mouseOverStop:false,/* 鼠标移到容器层继续播放*/
    /* 控制进度条 */
      startFun:function(){
        var timer = jQuery(".slideBox3 .timer");
        timer.stop(true,true).animate({ "width":"0%" },0).animate({ "width":"100%" },1000);
      }
    });

	$("#menu li a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	$("#menu li a").each(function(){
		$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	});

	$("#menu li a").hover(function(){
		$(".out",this).stop().animate({'top':'38px'},250);
		$(".over",this).stop().animate({'top':'0px'},250);
		$(".bg",this).stop().animate({'top':'0px'},120);
	},function(){
		$(".out",this).stop().animate({'top':'0px'},250);
		$(".over",this).stop().animate({'top':'-38px'},250);
		$(".bg",this).stop().animate({'top':'-38px'},120);
	});

	$("#menu2 li a").wrapInner('<span class="out"></span>');
	$("#menu2 li a").each(function(){
		$('<span class="over">' + $(this).text() + '</span>').appendTo(this);
	});

	$("#menu2 li a").hover(function(){
		$(".out",this).stop().animate({'top':'38px'},200);
		$(".over",this).stop().animate({'top':	'0px'},200);
	},function(){
		$(".out",this).stop().animate({'top':'0px'},200);
		$(".over",this).stop().animate({'top':'-38px'},200);
	});

	$(".back-top").click(function(){
		$("html,body").animate({scrollTop :0}, 800);
		return false;
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

	var speed=30;
var colee2=document.getElementById("colee2");
var colee1=document.getElementById("colee1");
var colee=document.getElementById("colee");
colee2.innerHTML=colee1.innerHTML; //¿ËÂ¡colee1Îªcolee2
function Marquee1(){
//µ±¹ö¶¯ÖÁcolee1Óëcolee2½»½çÊ±
if(colee2.offsetTop-colee.scrollTop<=0){
colee.scrollTop-=colee1.offsetHeight; //coleeÌøµ½×î¶¥¶Ë
}else{
colee.scrollTop++
}
}
var MyMar1=setInterval(Marquee1,speed)//ÉèÖÃ¶¨Ê±Æ÷
//Êó±êÒÆÉÏÊ±Çå³ý¶¨Ê±Æ÷´ïµ½¹ö¶¯Í£Ö¹µÄÄ¿µÄ
colee.onmouseover=function() {clearInterval(MyMar1)}
//Êó±êÒÆ¿ªÊ±ÖØÉè¶¨Ê±Æ÷
colee.onmouseout=function(){MyMar1=setInterval(Marquee1,speed)}


//限制字符个数
    $(".kz").each(function(){
    var maxwidth=parseInt($(this).attr("data-limit"));
    if($(this).text().length>maxwidth){
    $(this).text($(this).text().substring(0,maxwidth));
    $(this).html($(this).html()+'...');
    }
    });


});
  

