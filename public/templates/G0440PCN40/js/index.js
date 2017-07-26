/**
 * Created by Administrator on 2017/5/3.
 */
$(function(){
    $("#nav li").hover(function(){
        $(this).find("ul").slideDown();
    },function(){
        $(this).find("ul").slideUp();
    });
    $(document).ready(function(){

        $('.slider').bxSlider({

            mode: 'fade',

            slideWidth: "",

            auto: true

        });
        jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left" });
        jQuery(".product").slide({ mainCell:".bd ul",effect:"left" });
        jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",vis:3,trigger:"click"});
        $(".pro-nav ul li").click(function(){
           var pro=$(this).index();
            $(".pro-bot ul li").eq(pro).addClass("on").siblings().removeClass("on");
        });
        $(".pro-nav ul li").hover(function(){
            var pro=$(this).index();
            $(".pro-bot ul li").eq(pro).addClass("on").siblings().removeClass("on");
            $(".index-pro .bd ul li").removeClass("hide","current");
             $(".index-pro .bd ul").addClass("cur ");

        },function(){});

        $(".pro-bot ul li").hover(function(){
            $(this).addClass("on").siblings().removeClass("on");
            $(this).parent().parent().parent().removeClass("picFocus");
            $(".index-pro .bd ul").removeAttr("style");
            console.log("11111");
            var proBot=$(this).index();
            $(".pro-nav ul li").eq(proBot).addClass("on").siblings().removeClass("on");
            $(".index-pro .bd ul li").addClass("hide");
             $(".index-pro .bd ul li").eq(proBot).addClass("current").removeClass("hide").siblings().removeClass("current");
        },function(){ });


        $(".m3-nav li:nth-child(1)").addClass("current");
        $(".m3-nav li").click(function () {
            $(this).addClass("current").siblings().removeClass("current");
            var m3Index=$(this).index();
            $(".m3-text dl").eq(m3Index).show().siblings().hide();
            $(".m4-txt ul li").eq(m3Index).show().siblings().hide();
        });
        


        // $('.slider2').bxSlider({
        //     minSlides: 4,
        //     maxSlides: 4,
        //     slideWidth: "",
        //     slideMargin: 32
        //
        // });
        // $('.slider3').bxSlider({
        //     mode: 'fade',
        //     slideWidth:860,
        //     slideMargin: 10,
        //     auto: true
        // });

    });
    /**********左侧nav**************/
    $("ul.one a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                // a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        //a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                        break;
                    case "three":
                        a.addClass("box-on");
                        break;
                }
            }else{
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('in');
            };
            return false;
        };
    });





});



