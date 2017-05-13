/**
 * Created by Administrator on 2017/4/1.
 */
$(function(){
/************内容区nav显示***********/
    $(".ab-nav").click(function(e){
        e.preventDefault();
        $(".comm-nav").slideToggle();
    });
    $("ul.one a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('in');
                var parent = a.parent().parent().attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        break;
                    case "three":
                        // a.siblings('i').addClass('in');
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



    /***********字体下拉显示***************/
    $(".ab-fonts,.det-fonts").click(function(e){
        e.preventDefault();
        $(".det-font,.ab-font").slideToggle();
    });

    $(".det-fonts").click(function(){
        var $det=$(".det-fonts");
        var $font=$(".det-font");
        if($font.hasClass("txt")){
            $font.removeClass('txt');
            $det.html("字 -");
        }else{
            $font.addClass('txt');
            $det.html("字 +");
        }
    });

    /******返回顶部***/
   // $(".back-top").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})


    /*******轮播图********/
    var mySwiper = new Swiper ('.swiper1', {
        loop: true,
        // 如果需要分页器
        pagination: '.swiper-pagination',
        autoplay : 5000,
        paginationClickable :true,
        paginationElement : 'span'
    });
    var swiper = new Swiper('.swiper2', {
        pagination: '.swiper-pagination',
        slidesPerView: 2,
        paginationClickable: true,
        autoplay : 5000,
        spaceBetween:0
    });
    var swiper = new Swiper('.swiper3', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: '.swiper-pagination'
    });


});
/************改变字体大小*************************/
function changeFontSize2(fontSize){
    $("div").children("*").css("fontSize",fontSize+"rem");
}