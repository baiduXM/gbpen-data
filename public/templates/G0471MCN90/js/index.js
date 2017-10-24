/**
 * Created by Administrator on 2017/4/1.
 */
/************改变字体大小*************************/
function changeFontSize2(fontSize){
    $(".det-text div,.det-text h5,.det-text h2 ").children("*").css("fontSize",fontSize+"rem");
    $(".det-text p").css("fontSize",fontSize+"rem");
}
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
       // spaceBetween: 16,
        paginationClickable :true
    });
    // jQuery(".multipleLine1").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true, autoPlay:true,delayTime:0});
    // jQuery(".multipleLine2").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true, autoPlay:true,delayTime:0});

    var swiper3 = new Swiper('.m1Slide', {
        pagination: '.swiper-pagination',
        slidesPerView: 2,
        slidesPerColumn: 2,
        slidesPerColumnFill:'column',
        paginationClickable: true
    });
    var swiper4 = new Swiper('.m2Slide', {
        pagination: '.swiper-pagination2',
        slidesPerView: 1,
        slidesPerColumn: 4,
        slidesPerColumnFill:'column',
        paginationClickable: true
    });


    $(".m1-cont li").find(".m1-child").hide();
    $(".m1-cont li:first-child").addClass("current");
    $(".m1-cont li:first-child").find(".m1-child").show();
    $(".m1-cont li").click(function () {
        $(this).addClass("current").siblings().removeClass("current");
        $(this).find(".m1-child").show().parent().siblings().find(".m1-child").hide();
    });


    var M = new Swiper ('.swiper-pro', {
        // autoplay : 1000,
        paginationClickable :true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true
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
                // a.find("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                     //   a.find('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                     //   a.find('i').addClass('in');
                        break;

                }
            }else{
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.find("i").removeClass('in');
            };
            return false;
        };
    });


    //当前页没有分类，“分类”文字隐藏
    var ulL=$(".det-nav ul");
    if(ulL.length == 0){
        $(".classify").hide();
    }
});

