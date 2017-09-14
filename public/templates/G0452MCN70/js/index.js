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
    $(".det-text div,.det-text h5,.det-text h2").children("*").css("fontSize",fontSize+"rem");
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
    var mySwiper = new Swiper ('.swiper-banner', {
        //loop: true,
        autoplay : 1000,
        paginationClickable :true,
        pagination: '.swiper-pagination',
        paginationElement : 'span'
    });
    var mySwiper2 = new Swiper ('.swiper-nav', {
        slidesPerView:4,
        spaceBetween: 16,
        paginationClickable :true
    });
    var mySwiper3 = new Swiper ('.swiper-new', {
        slidesPerView:2,
        spaceBetween: 16,
        pagination: '.swiper-pagination',
        paginationClickable :true
    });
    var mySwiper4 = new Swiper ('.swiper-pro', {
        slidesPerView:2,
        spaceBetween:40,
        pagination: '.swiper-pagination',
        paginationClickable :true
    });
    var mySwiper5 = new Swiper ('.swiper-product', {
        autoplay : 1000,
        paginationClickable :true,
        pagination: '.swiper-pagination'
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
                 a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                         a.siblings('i').addClass('in').parent().siblings().children('a').siblings('i').removeClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                         a.siblings('i').addClass('in').parent().siblings().children('a').siblings('i').removeClass('in');
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

