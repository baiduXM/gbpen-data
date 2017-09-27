/**
 * Created by Administrator on 2017/7/10.
 */
$(function(){
    /*导航下拉*/
    $(".nav li.nav-li").hover(function () {
        $(this).find("ul").slideDown();
    }, function () {
        $(this).find("ul").slideUp();
    });
    /*左侧nav*/
    $("ul.one a").click(function (event) {
        if ($(this).siblings("ul").length > 0) {
            var a = $(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                // a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        // a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-on");
                        break;
                    case "three":
                        a.addClass("box-on");
                        break;
                }
            } else {
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                // a.siblings("i").removeClass('in');
            };
            return false;
        };
    });


    /*首页轮播*/
    $('.sliderBan').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });

    /*首页头部二维码*/
    $(".icon-top li.weixin ").hover(function () {
        $(this).find("a").addClass("on");
        $(this).find("div").slideDown();
    },function () {
        $(this).find("div").slideUp();
        $(this).find("a").removeClass("on");
    });

    /*首页选项卡*/
    $(".m3-list ul:first-child").addClass("on");
    $(".m3-tab ul li").click(function () {
        $(this).addClass("on").siblings().removeClass("on");
        var m3Index=$(this).index();
        $(".m3-list ul").eq(m3Index).addClass("on").siblings().removeClass("on");
    });

    jQuery(".product").slide({ mainCell:".bd ul",effect:"left",pnLoop:true,autoPlay:true });

});
