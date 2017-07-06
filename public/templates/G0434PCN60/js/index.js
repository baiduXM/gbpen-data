/**
 * Created by Administrator on 2017/5/3.
 */
$(function(){

    if (window.PIE) {
        $('.index-style,.index-style ul,.logo,.logo .be,.logo .af,.nav li.oneLi i').each(function() {
            PIE.attach(this);
        });
    }


    $(".nav .oneLi  ").hover(function () {
            $(this).find(".one-name").slideDown();
    },function () {
        $(this).find(".one-name").slideUp();
    });

    $(".oneA ").hover(function () {
        $(this).find("ul").slideDown();
    },function () {
        $(this).find("ul").slideUp();
    });
    /**********左侧nav**************/
    $("ul.navD a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('current');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "navD":
                        a.addClass("box-on");
                        break;
                    case "navD-child":
                        a.addClass("box-on");
                        a.siblings('i').addClass('current');
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
    $('.index').bxSlider({

        mode: 'fade',

        slideWidth: ""});

    //jQuery(".index").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});
    jQuery(".product").slide({mainCell:".bd ul",effect:"left",autoPlay:true});





});



