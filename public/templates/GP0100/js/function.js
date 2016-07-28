jQuery(document).ready(function($) {
	
    jQuery("#nav").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});

    jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:300});

	    $(".first li a").click(function(){
	      $(this).parent().siblings().find(".second").slideUp()
	      $(this).siblings(".second").slideToggle()
	    })
	    $(".second li a").click(function(){
	      $(this).parent().siblings().find(".third").slideUp()
	      $(this).siblings(".third").slideToggle()
	    })  

	    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
	
});