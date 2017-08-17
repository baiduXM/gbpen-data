/**
 * Created by Administrator on 2017/5/3.
 */
$(function(){
    $("#demo").xb_scroll();

    var banner=$(window).width();
    var mainH=$("body").height();
    var bannerH=$("#header").height();
    var had=$("#header").width();
    var about=$(".about").width();

    /*****index*******/
    $(".index #header").height(100+"%");
    var indexH=$(".index #header").height();
    $("#banner").width((banner-had)+"px");
    $("#banner img").height(indexH);
    $(".index ul.child").height(indexH-195);


    /****about*****/
    $(".page").width((banner-had-about)+"px");
    $(".page img,.page").height(bannerH);
    $(".about").height(bannerH);
    $(" ul.child").height(bannerH-195);
    /*******list********/
    $(".list #header").height(mainH);
    $(".det-product").height(bannerH);
    var bdBox=$(".pro-slide").width();
    $(".hdBox").width(bdBox);
    $(".list ul.child").height(mainH-195);

    $(window).resize(function () {
        /**content-product***/
        var bdBox=$(".pro-slide").width();
        $(".hdBox").width(bdBox);

        var banner=$(window).width();
        var had=$("#header").width();
        var about=$(".about").width();
        /*****index*******/
        $("#banner").width((banner-had)+"px");
        /****about*****/
        $(".page").width((banner-had-about)+"px");
    });




    jQuery(".pro-slide").slide({ mainCell:".bd ul",effect:"left" });
    /**********内页nav**************/
    $("ul.navD a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
               // a.siblings("i").removeClass('current');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "navD":
                        a.addClass("box-on");
                        break;
                    case "navD-child":
                        a.addClass("box-on");
                     //   a.siblings('i').addClass('current');
                        break;
                    case "navD-three":
                        a.addClass("box-on");
                        break;
                }
            }else{
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('current');
            };
            return false;
        };
    });
    $('.banner').bxSlider({
        infiniteLoop: false,
        auto:true,
        slideWidth: ""});

    jQuery(".product").slide({mainCell:".bd ul",effect:"left",autoPlay:true});





});




