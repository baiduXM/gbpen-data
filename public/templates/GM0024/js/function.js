$(document).ready(function() {
	TouchSlide({
		slideCell: "#slideBox",
		titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell: ".bd ul",
		effect: "leftLoop",
		autoPage: true, //自动分页
		autoPlay: 1000,
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

		var h = $(".logo").height() * 0.5;
		$(".slideBox .bd li a").css("margin-top", h);
		// $(".main").css("margin-top",$(".pic img").height()*0.5);
		// $(".baner  .public_bg2").css("top",$(".pic img").height()*0.5);
	//	$(".baner").height($(".baner").height()+$(".pic img").height()*0.5);
		var w = $('.menu .swiper-slide').width();
		$(".menu .swiper-slide").css({
			"height": w * 1.3,
			"margin-top": w * 0.05 + "px"
		});
		$(".menu .swiper-slide span").css({
			"width": w * 0.8,
			"height": w * 0.8
		});
		$(".menu .swiper-slide span a").css({
			"width": w * 0.8 - 5,
			"height": w * 0.8 - 5
		});
		$(".menu .swiper-slide span a p").css({
			"width": w * 0.8 - 5,
			"height": w * 0.8 - 5,
			"line-height": w * 0.8 - 5 + "px"
		});
		$('.arrow-right').css({
			"height": w * 1.2 + "px",
			"line-height": w * 1.2 + "px"
		});
		$('.arrow-left').css({
			"height": w * 1.2 + "px",
			"line-height": w * 1.2 + "px"
		});
		$(".menu B").css({
			"width": w * 0.8
		});
		$(".swiper-wrapper").css("height", w * 1.2);
		var w1 = $(".about_right img").height();
		var w2 = $(".about_right img").width();
		// $(".about_right").css({
		// 	"height": w1 * 1.3,
		// 	"padding-top": w1 * 0.06,
		// 	"padding-left": w2 * 0.07
		// });

		var w2 = $(".products ul li span").width()
		$(".products ul li span").css({
			"height": w2
		});

		$(".news-list1 .news_img:even").addClass("left_img");
		$(".news-list1 .news_img:odd").addClass("right_img");

		$(".news-list1 .news_tra:even").addClass("left_tr");
		$(".news-list1 .news_tra:odd").addClass("right_tr");

		$(".news-list1 .news_content:even").addClass("left_con");
		$(".news-list1 .news_content:odd").addClass("right_con");

		$(".news-list3 li:odd").addClass("news_bg");





	
	$('.public_bg').each(function () {
		var ar = $(this).find("#about_right");
		var risrc = $(this).find("#about_right img").attr("src");
		if(risrc){
			var img = new Image();
			img.src = risrc;
			if(img.width/img.height > 1){
				ar.removeClass().addClass("about_right_x");
				$(this).find("#about_right img").removeClass().addClass("about_right_img_x");
				$(this).find('.about_left').css("width","90%");
			}
		}
		
		

	  
	})




	}
});