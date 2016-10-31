$(document).ready(function() {

// 首页字体进入
	$(window).scroll(function(){
		if ($("#top").hasClass('on')) {
			if ($(window).scrollTop()>=800) {
				$("#top h2").css({left:"300px",opacity:0});
    	 		$("#top h3").css({left:"-300px",opacity:0});
    	 		$("#top").removeClass('on');
			};
		} else {
			if ($(window).scrollTop()>0 && $(window).scrollTop()<800){
	           $("#top h2,#top h3").animate({left:"0px",opacity:1}, 2000);
	           $("#top").addClass('on')
	        };
		};
	});

});