/**
 * Created by Administrator on 2017/5/3.
 */
$(function(){
   $(".nav li").hover(function(){
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
        $('.slider1').bxSlider({

            slideWidth: 230,

            minSlides: 2,

            maxSlides: 3,

            slideMargin: 16,
            auto:true

        });
        $('.slider2').bxSlider({
            minSlides: 4,
            maxSlides: 4,
            slideWidth: "",
            slideMargin: 20,
            auto: true

        });
        $('.slider3').bxSlider({
            mode: 'fade',
            slideWidth:800,
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
                        a.addClass("box-no");
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
        if (num.length > 120) {
            $(".image-text").eq(index).find(".texts").html(num.substr(0, 120) + "...<i>【查看详情】</i>")
        }
    });
    $(".lis2-dl").each(function(index){
        var num=$(".lis2-dl").eq(index).find(".texts").html();
        if (num.length > 70) {
            $(".lis2-dl").eq(index).find(".texts").html(num.substr(0, 70) + "...<i>【查看详情】</i>")
        }
    });
    $(".cont3-lt dl").each(function(index){
        var num=$(".cont3-lt dl").eq(index).find(".texts").html();
        if (num.length > 83) {
            $(".cont3-lt dl").eq(index).find(".texts").html(num.substr(0, 83) + "...<i>【查看详情】</i>")
        }
    });



});



