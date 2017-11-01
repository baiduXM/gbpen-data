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

/************改变字体大小*************************/
 function changeFontSize2(fontSize){
    $("div").children("*").css("fontSize",fontSize+"rem");
 }

/***********字体下拉显示***************/
$(function(){
    $(".classify").click('touchstart',function(e){
        e.preventDefault();
        $(".det-nav").slideToggle();
    });
    $(".font-size").click('touchstart',function(e){
        e.preventDefault();
        $(".font").slideToggle();
    });
});

$(function(){
    jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"left" });
    var mySwiper = new Swiper ('.swiper-banner', {
        loop: true,
        // autoplay : 1000,
        paginationClickable :true,
        pagination: '.swiper-pagination',
        paginationElement : 'span'
    });
    var M = new Swiper ('.swiper-m2', {
        // autoplay : 1000,
        slidesPerView:2,
        spaceBetween: 20,
        paginationClickable :true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
    });

    /***首页内容nav切换***/
    $(".m3-nav li:nth-child(1)").addClass("current");
    $(".m3-nav li").click('touchstart',function () {
        $(this).addClass("current").siblings().removeClass("current");
        var m3Index=$(this).index();
        $(".m3-text ul li").eq(m3Index).show().siblings().hide();

    });
    $(".m4-nav li:nth-child(1)").addClass("current");
    $(".m4-nav li").click('touchstart',function () {
        $(this).addClass("current").siblings().removeClass("current");
        var m4Index=$(this).index();
        $(".m4-text ul li").eq(m4Index).show().siblings().hide();

    });

    /****滚回头部*****/
    $(".scroll_top").click('touchstart',function () {
        $("#quickbar-wrap-body").animate({scrollTop:"0px"},500);
    });
    /**********左侧nav**************/
    $("ul.one a").click('touchstart',function(event) {
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

    /***********content-product*************/
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 9,
       // loop:true,
       // loopedSlides: 1//looped slides should be the same
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 9,
        slidesPerView: 3,
        touchRatio: 0.2,
        // loop:true,
        // loopedSlides: 1, //looped slides should be the same
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;

    //当前页没有分类，“分类”文字隐藏
    var ulL=$(".det-nav ul");
    if(ulL.length == 0){
        $(" .title-rt .classify").hide();
    }
});

