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
		$(window).load(function(){
	$(".class-m").height($(".class").outerHeight()-$(".class-top").outerHeight())
	$(".index-wrap").height($(window).height() - $(".fixed").height() - ($(".quickbar-tips").css('display') == 'none' ? 0 : $(".quickbar-tips").height()))
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
	function foulpage(){
  	var scope = ($(".scope").height() < ($(".index-wrap").height()-$(".foot").height()) ? ($(".index-wrap").height()-$(".foot").height()) : $(".scope").height());
  	if ($(".scope").height() != scope) {$(".scope").height(scope);}
  }
  foulpage();
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

		var www = $('.box-top1 .floor').width()
		$('.box-top1 .floor').height(www).css('line-height', www + 'px')
		$('.box-top1 .floor_bor').width(www * 1.2).height(www * 1.2).css({
			'line-height': www * 1.1 + 'px',
			'top': -www * 0.1 + 'px',
			'left': -www * 0.1 + 'px'
		})
		$('.tit_zh').css('margin-top', www * 0.35)
		$('.news-list2 li:odd').addClass('public_bg4').find('.fang').addClass('public_bg1').find('span').addClass('public_bg4 public_color')
		$('.news-list2 li:even').addClass('public_bg1').find('.fang').addClass('public_bg4').find('span').addClass('public_bg1 public_color2')
		$('.news-list2 li:odd').find('.news_con h3,.news_con p').addClass('public_color')
		$('.news-list2 li:even').find('.news_con h3,.news_con p').addClass('public_color2')

		var w1 = $('ul.news-list2 li a .fang').width()
		var w2 = $('ul.news-list2 li').height()
		$('ul.news-list2 li a span').width(w1 * 0.8).height(w1 * 0.8).css({
			'line-height': w1 * 0.8 + "px",
			"margin-top": w1 * 0.1 + "px",
			"margin-left": w1 * 0.1 + "px"
		})
		$('ul.news-list2 li a .fang').height(w1).css({
			'line-height': w1 + "px",
			"margin-top": (w2 - w1) * 0.5 + "px"
		})


		var w = $('.nav').width();

		$('.swiper-slide a.xx').width(w * 0.2).height(w * 0.2).css('line-height', w * 0.2 + "px");
		$('.swiper-wrapper').height(w * 0.2)
		$('.swiper-slide').height(w * 0.2 + 8)
		$('.swiper-slide').each(function(i) {
			var a = i % 3;
			if (a == 1) {
				$(this).find('a.xx').addClass("public_bg1")
			}
			if (a == 2) {
				$(this).find('a.xx').addClass("public_bg2")
			}
			if (a == 0) {
				$(this).find('a.xx').addClass("public_bg3")
			}
		})

		$('.products ul li').each(function(i) {
			var b = i % 3;
			if (b == 1) {
				$(this).find('img').addClass("public_bor")
			}
			if (b == 2) {
				$(this).find('img').addClass("public_bor1")
			}
			if (b == 0) {
				$(this).find('img').addClass("public_bor2")
			}
		})

	}



});