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
	$(window).load(function() {
		$(".index-wrap").height($(window).height() - $(".fixed").height() - ($(".quickbar-tips").css('display') == 'none' ? 0 : $(".quickbar-tips").height()))
		$(".class-m").height($(".class").outerHeight() - $(".class-top").outerHeight())
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
		$(".logo_bg").height($(".logo_bg").width());
		$(".news_pic").height($(".news_pic").width() * 0.5);
		var w = $(".news_pic").width()
		$(".news_pic").css({
			"border-top-left-radius": w,
			"border-top-right-radius": w
		})
		$(".news_pic1").css({
			"border-bottom-left-radius": w,
			"border-bottom-right-radius": w
		});
		$(".news_content1").height(w * 0.45);
		$(".news_content2").height(w * 0.45);
		$(".news_content2").css("margin-bottom", w * 0.05);
		$(".box-top1:odd").find("b").addClass("rr")
		$(".box-top1:odd").find(".tit1").addClass("rr").css("margin-right", 20);
		$(".box-top1:odd").find("a").addClass("ll")

		$(".box-top1:even").find("b").addClass("ll")
		$(".box-top1:even").find(".tit1").addClass("ll")
		$(".box-top1:even").find("a").addClass("rr")
	}



});