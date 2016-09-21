$(document).ready(function() {

	// $("body").click(function(event) {
	// 	alert($(window).scrollTop())
	// });
// 首页字体进入
	$(window).scroll(function(){
		if ($("#top").hasClass('on')) {
			if ($(window).scrollTop()>=900) {
				$("#top h2").css({left:"300px",opacity:0});
    	 		$("#top h3").css({left:"-300px",opacity:0});
    	 		$("#top").removeClass('on');
			};
		} else {
			if ($(window).scrollTop()>0 && $(window).scrollTop()<900){
	           $("#top h2,#top h3").animate({left:"0px",opacity:1}, 2000);
	           $("#top").addClass('on')
	        };
		};
		if ($("#about").hasClass('on')) {
			if ($(window).scrollTop()>=1200) {
				$("#about h2").css({left:"300px",opacity:0});
    	 		$("#about h3").css({left:"-300px",opacity:0});
    	 		$("#about").removeClass('on');
			};
		} else {
			if ($(window).scrollTop()>900 && $(window).scrollTop()<1300){
	           $("#about h2,#about h3").animate({left:"0px",opacity:1}, 2000);
	           $("#about").addClass('on')
	        };
		};
		if ($("#middle").hasClass('on')) {
			if ($(window).scrollTop()>=1820) {
				$("#middle h2").css({left:"300px",opacity:0});
    	 		$("#middle h3").css({left:"-300px",opacity:0});
    	 		$("#middle").removeClass('on');
			};
		} else {
			if ($(window).scrollTop()>1450 && $(window).scrollTop()<1820){
	           $("#middle h2,#middle h3").animate({left:"0px",opacity:1}, 2000);
	           $("#middle").addClass('on')
	        };
		};
		if ($("#smoke").hasClass('on')) {
			if ($(window).scrollTop()>=2365) {
				$("#smoke h2").css({left:"300px",opacity:0});
    	 		$("#smoke h3").css({left:"-300px",opacity:0});
    	 		$("#smoke").removeClass('on');
			};
		} else {
			if ($(window).scrollTop()>2000 && $(window).scrollTop()<2365){
	           $("#smoke h2,#smoke h3").animate({left:"0px",opacity:1}, 2000);
	           $("#smoke").addClass('on')
	        };
		};
        if ($("#bottom").hasClass('on')) {
        	if ($(window).scrollTop()<=3000) {
    	 		$("#bottom h2").css({left:"300px",opacity:0});
    	 		$("#bottom h3").css({left:"-300px",opacity:0});
    	 		$("#bottom").removeClass('on');
        	};
        } else {
        	if ($(window).scrollTop()>3000) {
	        	 $("#bottom h2,#bottom h3").animate({left:"0px",opacity:1}, 2000);
	        	 $("#bottom").addClass('on');
	        };
        };
	});

});