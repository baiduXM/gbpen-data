$(document).ready(function() {
	TouchSlide({
		slideCell: "#slideBox",
		titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
		mainCell: ".bd ul",
		effect: "leftLoop",
		autoPage: true, //自动分页
		autoPlay: 400,
		interTime: 3000 //自动播放
	});
	TouchSlide({
		slideCell: "#img",
		mainCell: "#img ul",
		effect: "leftLoop",
		autoPlay: 400,
		interTime: 3000 //自动播放
	});

	$(window).load(function() {
		$(".main").height($(window).height() - $(".fixed").height() - ($(".quickbar-tips").css('display') == 'none' ? 0 : $(".quickbar-tips").height()) - $(".state").height());
	});

	// resize();
	$(window).resize(function() {
		resize();
	});

	function resize() {
		$(".nav-menu").height($(window).outerHeight() - $(".nav-caption").outerHeight());
		$(".main").height($(window).height() - $(".fixed").height() - $(".state").height());
	}
	/*导航菜单下拉*/
	var holdPosition = 0;
	var menuswiper = $('nav .swiper-container').swiper({
		mode: 'vertical',
		scrollContainer: true,
		mousewheelControl: true,
		freeModeFluid: true,
		calculateHeight: true
	});
	//幻灯片元素与类"menu_body"段与类"menu_head"时点击
	$(".nav-menu .drop-down").click(function() {
		var obj = $(this).parent().next();
		if (obj.is(":hidden")) {
			$('.nav-menu li ul.second').slideUp(200);
			obj.slideDown(200, function() {
				swiper();
			});
			$('.nav-menu .drop-down').html('+');
			$(this).html('-');
		} else {
			obj.slideUp(200, function() {
				swiper();
			});
			$(this).html('+');
		}

		function swiper() {
			$('nav').find('.swiper-wrapper').css({
				'transform': 'translate3d(0px, 0px, 0px)',
				'-webkit-transform': 'translate3d(0px, 0px, 0px)',
				'transition': '0.3s'
			});
			menuswiper.reInit();
		}
	});


	$('.nav-menu .drop-down').click(function() {
		var obj = $(this).parent().next();
		if (obj.is(":hidden")) {
			$('.nav-menu li dl').slideUp(200);
			obj.slideDown(200);
			$('.nav-menu .drop-down').html('+');
			$(this).html('-');
			resize();
		}
	});

	//赖加载
	$("img.lazy").lazyload({
		placeholder: "images/loading.gif",
		container: $(".main"),
		effect: "slideDown",
		threshold: 140
	});


	$(".main").height($(".wrap").height() - $("footer").height() - $(".tel").height())
	$(".tel .close").click(function() {
		$(".tel").css('display', 'none');
		$(".main").height($(window).height() - $("footer").height() - $(".state").height())
		return false;
	})

	//隐藏导航跟wrap的切换
/*	$(".slide-nav").click(function() {
		$("nav,.wrap").addClass("slide");
		$(".shadow").show();
	})*/
	$(".nav-close,.shadow").on('touchstart click', function() {
		$("nav,.wrap").removeClass("slide");
		$(".shadow").hide();
		return false;
	})

	$("#share_btn,.share-cancel").click(function() {
		$(".share-wrap").slideToggle($('.share-wrap').height());
	});


	$('.forword').click(function() {
		window.history.go(-1);
	});

	(function() {
		$('.type').click(function() {
			$('.type-list').slideToggle(200);
			$('.font-sel').slideUp(200);
		})
	})();

	$('.font-set').click(function() {
		$('.font-list').slideToggle(200);
		$('.type-list').slideUp(200);
	});

	$('.font-list .big').click(function() {
		fontSet('16px');
	});

	$('.font-list .small').click(function() {
		fontSet('14px');
	});

	$('.font-list .normal').click(function() {
		fontSet('15px');
	});

	function fontSet(size) {
		$('.content-bd').css('font-size', size);
		$('.font-sel').slideUp();
	}

	//返回顶部
	$('.backtop').click(function() {
		$('.main').animate({
			'scrollTop': 0
		});

	})
});