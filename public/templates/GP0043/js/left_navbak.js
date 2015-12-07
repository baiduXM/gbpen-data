 $(document).ready(function($) {
 	 var a=$(".current").children('a')
jQuery(".pimgw").slide({mainCell:"ul",autoPlay:true,effect:"left"});

 	a.click(function() {
 		
 		$(this).next().slideToggle()

 	});
 });
