$(document).ready(function() {
	TouchSlide({
		slideCell: "#slideBox",
		titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell: ".bd ul",
		effect: "leftLoop",
		autoPage: true, //自动分页
		autoPlay: true,
		interTime: 6000 //自动播放
	});
	$(window).resize(function() {
		$(".class-m").height($(".class").outerHeight() - $(".class-top").outerHeight())
		$(".index-wrap").height($(window).height() - $(".fixed").height())
	})
	$(".tell-icon .close").click(function() {
		$(".tell-icon").removeClass("display-block")
		$(".index-wrap").height($(window).height() - $(".fixed").height())
	})
	$("#share_btn").click(function() {
		$(".share-con").slideToggle(100)
	});
	//隐藏导航跟wrap的切换
	$("#class").click(function() {
		$(".class").addClass("hover")
		$(".wrap").addClass("hover1")
		$(".opacity2").show()
		$(".index-wrap").off('touchmove', disableScroll);
	})
	$(".class-close,.opacity2").click(function() {
		$(".class").removeClass("hover")
		$(".wrap").removeClass("hover1")
		$(".opacity2").hide()
		$("body,html").removeClass("overflow")
	})
	$("#first").click(function() {
		$("#up,#down").toggle()
		$(".hide-class").slideToggle()
		$(".font").slideUp()
	})
	$("#font").click(function() {
		$(".font").slideToggle()
		$(".hide-class").slideUp()
	})

	//幻灯片元素与类"menu_body"段与类"menu_head"时点击
	$(".menu_head .icon").click(function() {
		$(this).parent().toggleClass("cur").next(".menu_body").slideToggle(300).siblings(".menu_body").slideUp("slow");
		$(this).parent().siblings().removeClass("cur");
	});
	//返回定都
	$('.back-top').click(function() {
		$(".index-wrap").animate({
			scrollTop: 0
		}, 800)

	})


	window.onload = function() {
		$(".index-wrap").height($(window).height() - $(".fixed").height() - ($(".quickbar-tips").css('display') == 'none' ? 0 : $(".quickbar-tips").height()))
		$(".class-m").height($(".class").outerHeight() - $(".class-top").outerHeight())
		$(".products ul li:eq(0),.products ul li:eq(1),.products ul li:eq(2),.products ul li:eq(6),.products ul li:eq(7),.products ul li:eq(8)").addClass("pro_three");
		$(".products ul li:eq(3),.products ul li:eq(4),.products ul li:eq(5),.products ul li:eq(9),.products ul li:eq(10),.products ul li:eq(11)").addClass("pro_four");
		$(".swiper-slide .news_cirl").height($(".swiper-slide .news_cirl").width());
		$(".swiper-slide .news_cirl1").height($(".swiper-slide .news_cirl1").width());
		$(".news-list3 li:odd").addClass("news_bg");
	}


	$(".swiper-wrapper .swiper-slide:eq(0),.swiper-wrapper .swiper-slide:eq(4),.swiper-wrapper .swiper-slide:eq(8)").addClass("ss").find(".news_cirl").addClass("public_bg1");
	$(".swiper-wrapper .swiper-slide:eq(1),.swiper-wrapper .swiper-slide:eq(5),.swiper-wrapper .swiper-slide:eq(9)").addClass("xx").find(".news_cirl").addClass("public_bg2");
	$(".swiper-wrapper .swiper-slide:eq(2),.swiper-wrapper .swiper-slide:eq(6),.swiper-wrapper .swiper-slide:eq(10)").addClass("ss").find(".news_cirl").addClass("public_bg3");
	$(".swiper-wrapper .swiper-slide:eq(3),.swiper-wrapper .swiper-slide:eq(7),.swiper-wrapper .swiper-slide:eq(11)").addClass("xx").find(".news_cirl").addClass("public_bg4");
	$(".news-list1 li:odd .news_date").addClass("public_bg3");
	$(".news-list1 li:even .news_date").addClass("public_bg2");
	var hh = $(".swiper-wrapper .swiper-slide .news_cirl").width();
	$(".xx").css("margin-top", hh + 35);
	$(".swiper-slide").height(hh + 10);
	$(".swiper-wrapper").height(hh * 2 + 45);
	$(".menu_hr").css("top", hh + 10)
});