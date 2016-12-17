$(document).ready(function() {

	// 定位头部底部高度
	var hd = $("#header").height();
	var ft = $("#footer").height();
	var hg = window.screen.height-(hd+ft);
	$(".content").css({height:hg,marginTop:hd,marginBottom:ft});
	var nav_height = $(".warp_nav").height()-48;
	$(".nav").height(nav_height);
	$(".inside>.main").css({minHeight:hg - 21});
	var wd = window.screen.width;
	if (wd>600) {
		$(".page").css({textAlign:"center",textAlignLast:"center"})
	}
	var newheight = parseInt(($(".news_list").siblings('i').height()-29)/15);
	$(".news_list p").height(newheight*15);
	// 横竖屏切换事件
	window.addEventListener("orientationchange", function() {
		// 重新定位content高度
		var hd = $("#header").height();
		var ft = $("#footer").height();
		var hg = window.screen.height-(hd+ft);
		$(".content").css({height:hg,marginTop:hd,marginBottom:ft});
		var nav_height = $(".warp_nav").height()-48;
		$(".nav").height(nav_height);
		$(".inside>.main").css({minHeight:hg - 21});
		var wd = window.screen.width;
		if (wd>600) {
			$(".page").css({textAlign:"center",textAlignLast:"center"})
		};
		var newheight = parseInt(($(".news_list").siblings('i').height()-30)/15);
		$(".news_list p").height(newheight*15);
	}, false);
	// 浏览器大小变化时
	$(window).resize(function() {
		var hd = $("#header").height();
		var ft = $("#footer").height();
		var hg = window.screen.height-(hd+ft);
		$(".content").css({height:hg,marginTop:hd,marginBottom:ft});
		var nav_height = $(".warp_nav").height()-48;
		$(".nav").height(nav_height);
		$(".inside>.main").css({minHeight:hg - 21});
		var wd = window.screen.width;
		if (wd>600) {
			$(".page").css({textAlign:"center",textAlignLast:"center"})
		};
		var newheight = parseInt(($(".news_list").siblings('i').height()-30)/15);
		$(".news_list p").height(newheight*15);
	});

// 页脚
	if ($(".foot_nav li").length > 4) {
		$('.foot_nav').swiper({slidesPerView: 4,freeMode: true});
	}


// 侧边导航切换
	$("a.menu").click(function() {
		$(".warp").animate({left:"70%"}, 300);
		$(".warp_shade").addClass('on').show(0);
		return false;
	});
	$(".warp_shade").click(function(event) {
		$(".warp").animate({left:"0%"}, 300);
		$(".warp_shade").removeClass('on').hide(0);
	});

	// 左侧导航栏
	for (var i = 0; i <= $(".left_menu>li").length; i++) {
		if($(".left_menu>li:eq("+i+")").find('ul').length > 0){
			$(".left_menu>li:eq("+i+")>i").addClass('add');
		}
	}
	$(".left_menu>li>i").click(function(){
		if ($(this).next("ul.menu_list").length > 0) {
			var a=$(this);
			a.parent().siblings().find("ul").slideUp(300).prev("i").removeClass("cut");
			 if( a.hasClass('cut') ){
			 	a.removeClass("cut").next('ul').slideUp(300);
			 } else{
			 	a.addClass("cut").next("ul").slideDown(300);
			 }
			 return false;
		}
		
	});

// 字体大小
	$(".size>a").click(function() {
		var b=$(this);
		if (b.hasClass('on')) {
			b.removeClass('on').next("ul").slideUp(300);
		} else {
			b.addClass('on').next("ul").slideDown(300);
		}
		return false;
	});
	var initial = parseFloat($(".middle").css("fontSize"));
	$(".size_list li a").click(function() {
		var num = parseFloat($(".middle").css("fontSize"));
		var id = $(this).attr('id');
		switch (id) {
			case "size_big":
				num += 2;
				if (num>22) {
					num=22;
				}
				break;
			case "size_small":
				num -= 2;
				break;
			default:
				num =initial
				break;
		}
		$(".middle").css({fontSize:num/10 + "rem"})
		return false;
	});

// 分类编辑框
	$(".boxa>a").click(function(event) {
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
			$(".first").slideUp(300);
		} else {
			$(this).addClass('on');
			$(".first").slideDown(300);
		}
		return false;
	});
	
	$("ul.first a").click(function() {
		var c=$(this);
		if (c.next("ul").length > 0) {
			c.parent().siblings().find("ul").slideUp(300).prev("a").removeClass();

			if (c.hasClass('box_on')) {
				c.removeClass().next('ul').slideUp(300);
				c.next('ul').find('a').removeClass().next('ul').slideUp(300);

			} else {
				c.addClass('box_on').next("ul").slideDown(300);

			};
			return false;
		};
	});

});