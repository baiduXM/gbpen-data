jQuery(document).ready(function($) {
    jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
	
	    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
	    $(".first li a").click(function(){
	      $(this).parent().siblings().find(".second").slideUp()
	      $(this).siblings(".second").slideToggle()
	    })
	    $(".second li a").click(function(){
	      $(this).parent().siblings().find(".third").slideUp()
	      $(this).siblings(".third").slideToggle()
	    })  
	// 	//实例一
	// $("#menu li a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	// $("#menu li a").each(function(){
	// 	$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	// });

	// $("#menu li a").hover(function(){
	// 	$(".out",this).stop().animate({'top':'38px'},250);
	// 	$(".over",this).stop().animate({'top':'0px'},250);
	// 	$(".bg",this).stop().animate({'top':'0px'},120);
	// },function(){
	// 	$(".out",this).stop().animate({'top':'0px'},250);
	// 	$(".over",this).stop().animate({'top':'-38px'},250);
	// 	$(".bg",this).stop().animate({'top':'-38px'},120);
	// });

	// //实例一
	// $("#menu2 li a").wrapInner('<span class="out"></span>');
	// $("#menu2 li a").each(function(){
	// 	$('<span class="over">' + $(this).text() + '</span>').appendTo(this);
	// });

	// $("#menu2 li a").hover(function(){
	// 	$(".out",this).stop().animate({'top':'38px'},200);
	// 	$(".over",this).stop().animate({'top':	'0px'},200);
	// },function(){
	// 	$(".out",this).stop().animate({'top':'0px'},200);
	// 	$(".over",this).stop().animate({'top':'-38px'},200);
	// });

});
