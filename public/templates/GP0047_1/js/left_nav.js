
 $(document).ready(function($) {
 	 var a=$(".current").children('a')


 	a.click(function() {
 		
 		$(this).next().slideToggle()

 	});
 });
