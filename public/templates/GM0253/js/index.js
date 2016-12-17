$(document).ready(function() {
	
	var li=$("ul.menu li").length;
	var height=Math.ceil(li/2)*53;
	$("ul.menu").css({height:height});
	for (var j = 0; j < li; j++) {
		if (j%2==0) {
			var b=(j/2)*53;
			$("ul.menu li:eq("+j+")").css({left:"150%",top:b});
		} else {
			var c=Math.floor(j/2)*53;
			$("ul.menu li:eq("+j+")").css({right:"150%",top:c});
		}
	};
	var i=1;
	while (i<=li) {
		$("ul.menu li:eq("+i+")").addClass('menu_on');
		i++;
		$("ul.menu li:eq("+i+")").addClass('menu_on');
		i+=3;
	};

	var ul = $("ul.menu");
	var sumNum = ul.find('li').length;
	var i = 0;
	var e = 1;
	ul.find("li:eq(0)").animate({left:"0%",opacity:1}, 800);
	var show1 = setInterval(function(){
		i += 2;
		if (i < sumNum) {
			ul.find("li:eq("+i+")").animate({left:"0%",opacity:1}, 800);
		} else {
			clearInterval(show1);
		};
	}, 800);
	ul.find("li:eq(1)").animate({right:"0%",opacity:1}, 800);
	var show2 = setInterval(function(){
		e += 2;
		if (i < sumNum) {
			ul.find("li:eq("+e+")").animate({right:"0%",opacity:1}, 800);
		} else {
			clearInterval(show2);
		};
	}, 800);

    $('.banner').swiper({pagination: '.page',paginationClickable: true,autoplay:2500,autoplayDisableOnInteraction:false});


});