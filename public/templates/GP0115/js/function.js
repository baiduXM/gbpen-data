$(document).ready(function(){
	// $(".picScroll-left .bd ul li").hover(function(){
	//  $(this).find(".title").stop().animate({
	// 	 bottom:0
	// 	 },{duration: 300, easing:"easeInSine"})
	// },function(){
	//  $(this).find(".title").stop().animate({
	// 	 bottom:-25
	// 	 },{duration: 200, easing:"easeOutSine"})
	// });

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
	
  });
 //  $(".back-top").click(function(){
	// 	$("html,body").animate({scrollTop :0}, 800);
	// 	return false;
	// });