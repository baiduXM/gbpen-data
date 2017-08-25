/**
 * Created by Administrator on 2017/7/10.
 */
$(function(){
    $('.sliderBan').bxSlider({
        mode: 'fade',
        slideWidth: ""
       // auto: true
    });
    $('.slider2').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });
    $(".product").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        autoPage: true,
        //effect: "left",
        autoPlay: true,
        // vis: 3,
        trigger: "click"
    });

    //link
    $(".link li").hover(function(){
        $(this).find("ul").slideDown();
    },function(){
        $(this).find("ul").slideUp();
    });

    /*内页nav*/
    $(".d-nav li.nav-li").hover(function () {
        $(this).find("ul").slideDown();
    }, function () {
        $(this).find("ul").slideUp();
    });

    /**********左侧nav**************/
    $("ul.one a").click(function (event) {
        if ($(this).siblings("ul").length > 0) {
            var a = $(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                        break;
                    case "three":
                        a.addClass("box-in");
                        break;
                }
            } else {
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('in');
            };
            return false;
        };
    });

    var indexH=$("#index-bg").height();
    $(".index-rt").height(indexH-70+'px');
});