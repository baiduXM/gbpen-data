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
        $('.slider2').bxSlider({
            minSlides: 4,
            maxSlides: 4,
            slideWidth: "",
            slideMargin: 32

        });
        $('.slider3').bxSlider({
            mode: 'fade',
            slideWidth:860,
            slideMargin: 10,
            auto: true
        });

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
                        a.addClass("box-in");
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




    $(".image-text").each(function(index){
        var num=$(".image-text").eq(index).find(".texts").html();
        if (num.length > 115) {
            $(".image-text").eq(index).find(".texts").siblings("i").html(" ");
            $(".image-text").eq(index).find(".texts").html(num.substr(0, 115) + "...<i>【查看详情】</i>")
        }
    });
    $(".lis2-dl").each(function(index){
        var num=$(".lis2-dl").eq(index).find(".texts").html();
        if (num.length > 65) {
            $(".lis2-dl").eq(index).find(".texts").siblings("i").html(" ");
            $(".lis2-dl").eq(index).find(".texts").html(num.substr(0, 65) + "...<i>【查看详情】</i>")
        }
    });
    $(".cont3-lt dl").each(function(index){
        var num=$(".cont3-lt dl").eq(index).find(".texts").html();
        if (num.length > 75) {
            $(".cont3-lt dl").eq(index).find(".texts").siblings("i").html(" ");
            $(".cont3-lt dl").eq(index).find(".texts").html(num.substr(0, 75) + "...<i>【查看详情】</i>")
        }
    });
});



