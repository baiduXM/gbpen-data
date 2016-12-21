$(document).ready(function() {

// 媒体查询
    function recalc(){
        var clientWidth = document.body.clientWidth;
        if(!clientWidth) {var clientWidth = $(window).width()};
        if (clientWidth > 640){clientWidth = 640;}
        document.documentElement.style.fontSize = 20 * (clientWidth / 320) + 'px';
    }
    recalc();
    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ;
    window.addEventListener(resizeEvt,recalc,false);
    document.addEventListener('DOMContentLoaded',recalc,false);

//隐藏导航跟wrap的切换
    $("#home").click(function(){
        $("#quickbar-navs").removeClass("page-prev").addClass("page-in");
        $("#quickbar-wrap").removeClass("page-active").addClass("page-next page-in")
        $(".quickbar-opacity2").show()
    });

// 大图滚动
    $('.slidepics').swiper({pagination: '.dotted p',paginationClickable: true,autoplay:2500,autoplayDisableOnInteraction:false});

// 回到顶部
	$(".totop").click(function(){
		$("#quickbar-wrap-body,#wrapper").animate({scrollTop:0},600);
		return false;
	});

// 字体大小
	$(".size .fontsize").click(function() {
        var $this = $(this);
		var b = $(this).find('.tria');
        $this.toggleClass('on');
        b.toggleClass('on');
		if (!$this.hasClass('on')) {
            $this.siblings("ul").slideUp(300);
		} else {
            $this.siblings("ul").slideDown(300);
		}
		return false;
	});
	var multiple = (document.body.clientWidth/320)*20;
	var initial = parseFloat($(".main").css("fontSize"))/multiple;
	$(".size-list li,.news-hd p a").click(function() {
		var num = parseFloat($(".main").css("fontSize"))/multiple;
		var id = $(this).attr('id');
		switch (id) {
			case "largen":
				num += 0.05;
				if (num>1.4) {num=1.4}
				break;
			case "diminish":
				num -= 0.05;
				if (num<0.4) {num=0.4}
				break;
			default:
				num =initial
				break;
		}
		$(".main").css({fontSize:num + "rem"})
	});

// 分类
    $(".classify").click(function(event) {
        var $that = $(this).find('.tria');
        var classifyList = $(".classify-list");
        if ($that.hasClass('on')) {
            $that.removeClass('on');
            classifyList.slideUp(300);
        } else {
            $that.addClass('on');
            classifyList.slideDown(300);
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
                    that.addClass("box-on").siblings('.symbol').addClass('in');
                } else if (parent.hasClass("second")) {
                    that.addClass("box-in").siblings('.symbol').addClass('in');
                } else{
                    that.addClass("box-at");
                };
            }else{
                that.removeClass().siblings('ul').slideUp(300).find('a').removeClass().siblings('ul').slideUp(300).siblings(".symbol").removeClass('in');
                that.siblings(".symbol").removeClass('in');
            };
            return false;
        };
    });
	
// 产品展示
	if ($(".case img").length>1) {
    	$('.case').swiper({paginationClickable: true,spaceBetween: 30,autoplay:2500,autoplayDisableOnInteraction:false});
	}

});