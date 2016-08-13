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
		
	
});