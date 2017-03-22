jQuery(document).ready(function($) {
    $(".class_main>li>a").click(function(){		
		$(this).parent().siblings().find(".second").slideUp()
	    $(this).siblings(".second").slideToggle()
		// return false;
	})	
	$(".second>li>a").click(function () {
	    $(this).parent().siblings().find(".third").slideUp()
	    $(this).siblings(".third").slideToggle()
	})
	if ($(".module_PhotoScroll").length>0) {
		jQuery(".module_PhotoScroll").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
	};

});

    