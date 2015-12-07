
 $(document).ready(function($) {
 	$(".list li a").click(function(){		
		$(this).next(".second").slideToggle(300).siblings(".second").slideUp("slow");
		})	
	$(".second li a").click(function () {
        $(this).parent().siblings().find(".third").slideUp()
        $(this).siblings(".third").slideToggle()
    })
 });