$(document).ready(function() {

// 媒体查询
    function recalc(){
        var clientWidth = document.body.clientWidth;
        if(!clientWidth) {var clientWidth = $(window).width()};
        if (clientWidth > 640){clientWidth = 640;}
        document.documentElement.style.fontSize = 10 * (clientWidth / 320) + 'px';
    }
    recalc();
    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ;
    window.addEventListener(resizeEvt,recalc,false);
    document.addEventListener('DOMContentLoaded',recalc,false);


// 内页头部导航
    $('.mainnav').swiper({slidesPerView: 4,freeMode: true,nextButton: '.main-next',prevButton: '.main-prev'});

// 大图滚动
    $('.slidepics').swiper({pagination: '.dotted p',paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});

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
            b.find('i').text("+");
		} else {
			b.addClass('on').siblings("ul").slideDown(300);
            b.find('i').text("-");
		}
		return false;
	});
	var multiple = (document.body.clientWidth/320)*10
	var initial = parseFloat($(".main").css("fontSize"))/multiple;
	$(".size-list li,.news-hd p a").click(function() {
		var num = parseFloat($(".main").css("fontSize"))/multiple;
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
		$(".main").css({fontSize:num + "rem"})
	});

// 分类
    $(".classify").click(function(event) {
        if ($(this).hasClass('on')) {
            $(this).removeClass('on');
            $(".classify-list").slideUp(300);
        } else {
            $(this).addClass('on');
            $(".classify-list").slideDown(300);
        }
        return false;
    });

    $("ul.first a").click(function(event) {
        if ($(this).nextAll("ul").length > 0) {
            var that=$(this);
            if (!that.hasClass("box-on") && !that.hasClass("box-in") && !that.hasClass("box-at")) {
                that.siblings("ul").slideDown(300).parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                var parent = that.parent().parent("ul");
                if (parent.hasClass("first")) {
                    that.addClass("box-on").siblings('i').addClass('in');
                } else if (parent.hasClass("second")) {
                    that.addClass("box-in");
                } else{
                    that.addClass("box-at");
                };
            }else{
                that.removeClass().siblings('ul').slideUp(300).find('a').removeClass().siblings('ul').slideUp(300);
                that.siblings("i").removeClass('in');
            };
            return false;
        };
    });
	
// 产品展示
	if ($(".case img").length>1) {
    	$('.case').swiper({paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
	}

});