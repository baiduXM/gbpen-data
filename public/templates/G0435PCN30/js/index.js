/**
 * Created by Administrator on 2017/4/1.
 */


$(function(){

    /***********index-nav**************/
    $(".menu-btn").click(function(){
        $(this).siblings(".index-menu").slideDown();
    });
    $(".close").click(function(){
        $(this).parent().parents(".index-menu").slideUp();
    });
    $(".nav li ").hover(function () {
        $(this).find(".childmenu").slideDown();
    }, function () {
        $(this).find(".childmenu").slideUp();
    });
    $(".index-nav li ").hover(function () {
        $(this).find(".childmenu").slideDown();
    }, function () {
        $(this).find(".childmenu").slideUp();
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

    /********nav-height******/
    var main=$(".Y-content").height();
    $(".navBox").height(main+40+"px");






    var mySwiper = new Swiper ('.pro', {
        loop: true,

        // 如果需要分页器
        pagination: '.swiper-pagination',
        autoplay : 1000,
        paginationClickable :true,
        paginationElement : 'span'
        //nextButton: '.swiper-button-next',
       // prevButton: '.swiper-button-prev'
    });
    var swiper = new Swiper('.sBan', {
        pagination: '.swiper-pagination',
       effect: 'flip',
        grabCursor: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });
    var my = new Swiper ('.bBan', {
        loop: true,
       // pagination: '.swiper-pagination',
        //autoplay : 1000,
        paginationClickable :true,
        paginationElement : 'span',
        nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev'
    });
});

