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




    /* 首页大图轮播 */
    banner();
    function banner() {
        var galleryTop = new Swiper('.swiper-container', {
            autoplay: 6000,
            loop: true,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false
        });
    }

    /* 产品推荐 */
    banner_left();
    function banner_left() {
        var swiper = new Swiper('.swiper-container1', {
            loop: true,
            autoplay: 6000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }

    /* 内页大图轮播 */
    header_banner();
    function header_banner() {
        var swiper = new Swiper('.swiper-container2', {
            loop: true,
            autoplay: 6000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            pagination: '.swiper-pagination',
        });
    }


    /* 字体 */
    font();
    function font() {
        var onOff = false;
        $(".font_size").click(function () {
            onOff =! onOff;
            $(".font").slideToggle();
            if( onOff ){
                $(".font_size").html("字 -").addClass("co");
            }else{
                $(".font_size").html("字+").removeClass("co");
            }
        });
        $(".big").click(function () {
            $(".change").css("fontSize","0.8rem");
            $(".font").slideToggle();
        });
        $(".normal").click(function () {
            $(".change").css("fontSize","0.6rem");
            $(".font").slideToggle();
        });
        $(".small").click(function () {
            $(".change").css("fontSize","0.55rem");
            $(".font").slideToggle();
        });
    }


    /* 内页导航 */
    asideNav();
    function asideNav() {
        var onOff = false;
        $(".sort").click(function () {
            onOff =! onOff;
            $(".nnav").slideToggle();
            if(onOff){
                $(".sort").addClass("sort1");
            }else{
                $(".sort").removeClass("sort1");
            }
        });
        $(".ce").click(function () {
            $(this).next().slideToggle();
        });
        $(".er").click(function () {
            $(this).next().slideToggle();
        });
    }


    /* 产品推荐 */
    aside_banner();
    function aside_banner() {
        var swiper = new Swiper('.swiper-container3', {
            loop: true,
            autoplay: 60000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }


    search();
    function search() {
        $(".search").click(function () {
                $(".quickbar_search").addClass("search_show");
                $(".quickbar-opacity2").css("display","block");
        })
    }

});