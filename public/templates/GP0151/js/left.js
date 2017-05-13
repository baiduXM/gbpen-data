
		$(document).ready(function($) {

		 	$(".listbg>li>a").click(function() {
		 		$(this).next(".second").slideToggle(300);	
		 	});


		 	$(".second>li>a").click(function() {
		 		$(this).next('.third').slideToggle(300);
		 	
		 	});
		 
		 });






 // $(document).ready(function(){
 //    $(".listbg li a").click(function () {
 //        $(this).parent().siblings().find(".second").slideUp()
 //        $(this).siblings(".second").slideToggle()
 //    }) ;

 //    $(".second li a").click(function () {
 //        $(this).parent().siblings().find(".third").slideUp()
 //        $(this).siblings(".third").slideToggle()
 //    }) 
 //    });
