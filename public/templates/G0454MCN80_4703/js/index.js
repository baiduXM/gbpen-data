/**
 * Created by Administrator on 2017/4/1.
 */

    // 字体大小
    (function(doc,win){

        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize' ,
            recalc = function()
            {
                var clientWidth = docEl.clientWidth;
                if(!clientWidth) return;
                if(clientWidth>640){
                    clientWidth=640;
                }
                docEl.style.fontSize = 20 * (clientWidth / 320) + 'px';
            };
        recalc();
        if(!doc.addEventListener) return;
        win.addEventListener(resizeEvt,recalc,false);
        doc.addEventListener('DOMContentLoaded',recalc,false);
    })(document,window);

    //改变字体大小
     function changeFontSize2(fontSize){
        $(".det-text div,.det-text h5,.det-text h2").children("*").css("fontSize",fontSize+"rem");
        $(".det-text .ser").css("fontSize",fontSize+"rem");
     }

$(function(){
    //字体下拉显示
    $(".classify").click('touchstart',function(e){
        e.preventDefault();
        $(".det-nav").slideToggle();
    });
    $(".font-size").click('touchstart',function(e){
        e.preventDefault();
        $(".font").slideToggle();
    });
    //左侧nav
    $("ul.one a").click('touchstart',function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-in");
                        a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                        a.siblings('i').addClass('in');
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

    //首页轮播图
    var mySwiper = new Swiper ('.swiper-banner', {
        //loop: true,
        //autoplay : 1500,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable :true,
        pagination: '.swiper-pagination',
        paginationElement : 'span'
    });
    //首页search
    $('.header i.i-ser').click('touchstart',function () {
        $(this).siblings('form').addClass("on");
        $(this).hide();
    });

    //首页nav
    var mySwiper2 = new Swiper ('.swiper-nav', {
        slidesPerView:4,
        // spaceBetween: 16,
        paginationClickable :true
    });

    /*首页选项卡*/
    // $(".m2-ulTab li:first-child").addClass("on");
    // $(".m2-ulList ul:first-child").addClass("on");
    // $(".m2-ulTab li").click(function () {
    //     $(this).addClass("on").siblings().removeClass("on");
    //     var m2Index=$(this).index();
    //     $(".m2-ulList ul").eq(m2Index).addClass("on").siblings().removeClass("on");
    // });

    //首页link
    var mySwiper3 = new Swiper ('.swiper-link', {
        slidesPerView:4,
        // spaceBetween: 16,
        paginationClickable :true
    });

    //content-product
    var mySwiper4 = new Swiper ('.swiper-pro', {
         loop: true,
         autoplay : 1500,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable :true
    });















    //产品详情页轮播
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;

    $(".gallery-thumbs .swiper-wrapper").css('transform','translate3d(0px, 0px, 0px)')

});



