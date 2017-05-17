$(document).ready(function () {

    /* 字体设置 */
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


    /* 导航 */
    nav();
    function nav() {
        var swiper = new Swiper('.swiper-container1', {
            slidesPerView: 4,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
     }

    /* 首页轮播图 */
    banner();
    function banner() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 6000,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            paginationElement : 'li',
        });
    }


    /* 产品中心 */
    product();
    function product() {
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: 6000,
            autoplayDisableOnInteraction : false,
            paginationClickable: true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }


    /* 新闻资讯 */
    news();
    function news() {
        var swiper = new Swiper('.swiper-container3', {
            loop: true,
            autoplay: 7000,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            paginationElement : 'li',
        });
    }


    scrolltop();
    function scrolltop() {
        $(".scrolltop").click(function(){$("#quickbar-wrap-body").animate({scrollTop :0}, 800)})
    }

    /* 字体 */
    fontSize();
    function fontSize() {
        var onOff = false;
        $(".fontClick").click(function () {
            onOff =! onOff;
            $(".font").slideToggle();
            if( onOff ){
                $(this).html("字 -");
            }else{
                $(this).html("字 +")
            }
        });

        $(".big").click(function () {
            $(".font").slideToggle();
            $(".fontClick").html("字 +");
            $(".change").css("fontSize","0.8rem");
        });
        $(".normal").click(function () {
            $(".font").slideToggle();
            $(".fontClick").html("字 +");
            $(".change").css("fontSize","0.6rem");
        });
        $(".small").click(function () {
            $(".font").slideToggle();
            $(".fontClick").html("字 +");
            $(".change").css("fontSize","0.55rem");
        });
    }

   asideNav();
    /* 内页菜单 */
    function asideNav() {
        var two = $(".ce");
        var three = $(".er");

        if(two.next().length>0){
            two.next().prev().append("<span class='s1'></span>");
        }

        if(three.next().length>0){
            three.next().prev().append("<span class='s3'></span>")
        }

        /* 分类 */
        $(".sort").click(function () {
            $('.nnav').slideToggle();
        });
        /* 二级 */
        two.click(function () {
            $(this).next().slideToggle();
            if( $(this).children("span").hasClass("s1") ){
                $(this).children("span").removeClass("s1");
                $(this).children("span").addClass("s2");
            }else{
                $(this).children("span").removeClass("s2");
                $(this).children("span").addClass("s1");
            }
        });
        /* 三级 */
        three.click(function () {
            $(this).next().slideToggle();
            if( $(this).children("span").hasClass("s3") ){
                $(this).children("span").removeClass("s3");
                $(this).children("span").addClass("s4");
                $(this).children("h3").css("color","#1da1dc")
            }else{
                $(this).children("span").removeClass("s4");
                $(this).children("span").addClass("s3");
                $(this).children("h3").css("color","#808080")
            }
        })
    }

    /* 首页轮播图 */
    aside_banner();
    function aside_banner() {
        var swiper = new Swiper('.swiper-container4', {
            loop: true,
            autoplay: 3000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
        });
    }




});