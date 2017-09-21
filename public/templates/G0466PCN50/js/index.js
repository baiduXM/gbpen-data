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
    $('.slider').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });
    $('.slider-pro').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });


    /*首页选项卡*/
    $(".m2-list li:first-child").addClass("on");
    $(".m2-tab  li").click(function () {
        $(this).addClass("on").siblings().removeClass("on");
        var m2Index=$(this).index();
        $(".m2-list li").eq(m2Index).addClass("on").siblings().removeClass("on");
    });

    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
});
