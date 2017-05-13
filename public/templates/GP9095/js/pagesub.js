jQuery(document).ready(function($) {
	   $(".first li a").click(function () {
        $(this).parent().siblings().find(".second").slideUp()
        $(this).siblings(".second").slideToggle()
    })  
    $(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    }) 
		jQuery(".dtBox").slide({mainCell:".bd ul",autoPlay:true});
});