$(document).ready(function() {

  //隐藏导航跟wrap的切换
	$("#home").click(function(){
		$("#quickbar-navs").removeClass("page-prev").addClass("page-in");
		$("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
		$(".quickbar-opacity2").show()
	});

// 回到顶部
	$(".totop").click(function(){
		$("#quickbar-wrap-body,#wrapper").animate({scrollTop:0},600);
		return false;
	});

// 字体大小
	$(".size b").click(function() {
		var b=$(this);
		if (b.hasClass('on')) {
			b.removeClass('on').siblings("ul").slideUp(300);
		} else {
			b.addClass('on').siblings("ul").slideDown(300);
		}
		return false;
	});
	var multiple = (document.body.clientWidth/320)*10
	var initial = parseFloat($("#wrap").css("fontSize"))/multiple;
	$(".size-list li,.news-hd p a").click(function() {
		var num = parseFloat($("#wrap").css("fontSize"))/multiple;
		var id = $(this).attr('id');
		switch (id) {
			case "largen":
				num += 0.1;
				if (num>2.4) {num=2.4}
				break;
			case "diminish":
				num -= 0.1;
				if (num<0.8) {num=0.8}
				break;
			default:
				num =initial
				break;
		}
		$("#wrap").css({fontSize:num + "rem"})
	});

// 分类
	$("#topnav ul").addClass('swiper-wrapper')
	$("#topnav ul li").addClass('swiper-slide tc')
	if ($("ul.first>li").length>2) {
		$('.nav').swiper({slidesPerView: 2,freeMode: true});
	}

    var secnddata = new Array(); 
	$("ul.first>li").each(function(q, se) {
		if ($(this).children('ul').length > 0) {
			secnddata[q] = $(this).children('ul').html();
		}
		return secnddata[q];
	});

	$("ul.first>li").click(function(event) {
		if ($(this).children('ul').length > 0) {
			if ($(this).hasClass('box-on')) {
				$(this).removeClass('box-on').parents("#topnav").stop(true, true).animate({height:"5.6rem"}, 200);
				$(".nav-list").find('ul.second').remove();
			} else{
				$(this).siblings().removeClass('box-on');
				$(this).addClass('box-on').parents("#topnav").animate({height:"10.4rem"}, 300);
				var i = $(this).index("ul.first>li");
				$(".nav-list").html('<ul class="second swiper-wrapper">'+ secnddata[i] + '</ul>');
				if ($("ul.second>li").length>2) {
					$('.nav-list').swiper({slidesPerView: 3,freeMode: true});
				}
				// 三级顶部导航
				$("ul.second>li").click(function(event) {					
					if ($(this).children('ul').length > 0) {
						if ($(this).hasClass('box-in')) {
							$(this).removeClass('box-in').parents("#topnav").stop(true, true).animate({height:"10.4rem"}, 200);
						} else{
							$(this).siblings().removeClass('box-in');
							$(this).addClass('box-in').parents("#topnav").animate({height:"14.4rem"}, 300);
							var thirddata = $(this).find("ul.clone-third").html();
							$(".nav-last").html('<ul class="third swiper-wrapper">'+ thirddata + '</ul>');
							if ($("ul.third>li").length>3) {
								$('.nav-last').swiper({slidesPerView: 4,freeMode: true});
							}
						}
						return false;
					};
				});
			}
			return false;
		};
	});
	
// 产品展示
	if ($(".case img").length>1) {
    	$('.case').swiper({pagination: '.dotted p',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
	}

});