
 $(document).ready(function($) {
 	 var a=$(".current").children('a')
jQuery(".pimgw").slide({mainCell:"ul",autoPlay:true,effect:"left"});

 	$(".about_l li>a").click(function() {
 		
 		$(this).next().slideToggle()

 	});
 });
