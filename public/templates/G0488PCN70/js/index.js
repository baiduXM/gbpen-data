/**
 * Created by Administrator on 2017/7/10.
 */
$(function(){

    $(".icon-ser").click(function () {
        $(this).parents(".index-search").addClass("current");
        $(this).hide();
    });

    $(".up-icon img").click(function () {
        var banH = $("#banner").height();
        $('body,html').animate({scrollTop:banH},500);
    });

    /*导航下拉*/
    $(".nav li.nav-li").hover(function () {
        $(this).find("ul").stop(true,true).slideDown();

        var threeH = $(this).find(".three-chilmenu").height();
        $(".header").height($(".header").height() + threeH);
        $(".header").css('background',' rgba(255,255,255,.7)');
    }, function () {
        $(this).find("ul").stop(true,true).slideUp();
    });
    $(".nav").hover(function () {
    },function () {
        $(".header").height($(".header").height());
        $(".header").css('background',' rgba(255,255,255,.0)');
    });

    jQuery(".productScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:4,trigger:"click"});

    jQuery(".proSlide").slide({mainCell:".bd ul",autoPlay:true});



    /*左侧nav*/
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
                        a.siblings('i').text('-');
                        break;
                    case "two":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        a.siblings('i').text('-');
                        break;
                    case "three":
                        a.addClass("box-on");
                        break;
                }
            } else {
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('in');
                a.siblings('i').text('+');
            };
            return false;
        };
    });


    /*首页轮播*/
    jQuery(".banBox").slide({mainCell:".bd ul",autoPlay:true});



    //判断content-product页面轮播图片的数量，一张的话左右按钮隐藏
    var len=$('.proSlide .bd li');
    if(len.length < 2){
        $('.proSlide a').hide();
    }

});

