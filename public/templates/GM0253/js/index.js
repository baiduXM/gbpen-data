$(document).ready(function() {
	
	var menuLiLength=$("ul.menu>li").length;
	if (!menuLiLength%2) {
		$("ul.menu li:first-child").css({display:"none"});
	}
	var menuLi = 1;
	while (menuLi <= menuLiLength) {
		$("ul.menu li:eq("+menuLi+")").addClass('red');
		menuLi++;
		$("ul.menu li:eq("+menuLi+")").addClass('red');
		menuLi+=3;
	};
	// var ul = $("ul.menu");
	// var sumNum = ul.find('li').length;
	// var i = 0;
	// var e = 1;
	// ul.find("li:eq(0)").animate({left:"0%",opacity:1}, 800);
	// var show1 = setInterval(function(){
	// 	i += 2;
	// 	if (i < sumNum) {
	// 		ul.find("li:eq("+i+")").animate({left:"0%",opacity:1}, 800);
	// 	} else {
	// 		clearInterval(show1);
	// 	};
	// }, 800);
	// ul.find("li:eq(1)").animate({right:"0%",opacity:1}, 800);
	// var show2 = setInterval(function(){
	// 	e += 2;
	// 	if (i < sumNum) {
	// 		ul.find("li:eq("+e+")").animate({right:"0%",opacity:1}, 800);
	// 	} else {
	// 		clearInterval(show2);
	// 	};
	// }, 800);

    $('.banner').swiper({pagination: '.page p',paginationClickable: true,autoplay:2500,autoplayDisableOnInteraction:false});


});