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


    /* 首页轮播图 */
    banner();
    function banner() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 5000,
           /* pagination: '.swiper-pagination',*/
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            paginationElement : 'li',
            pagination: '.swiper-pagination',
        });
    }



    nav();
    function nav() {
        var onOff = false;
        var hei = $(".nav_ul ul").height();

        $(".nav_ul").css("marginTop",-hei/2);
        $(".head").css({"display":"none","visibility":"visible"});

        $(".nav_btn").click(function () {
            onOff =! onOff;
            if(onOff){
                $(".head").slideToggle().animate({"top":"0"},300);
                $(this).delay(450).css({"background":"url('images/tb2.png')","backgroundSize":"100% 100%"}).animate({"top":"10rem"},300);
            }else{
                $(".head").slideToggle().animate({"top":"-11.5rem"},300);
                $(this).css({"background":"url('images/tb1.png')","backgroundSize":"100% 100%"}).animate({"top":"3.3rem"},300);
            }

        })
    }


    /* 字体 */
    font();
    function font() {
        var onOff = false;
        $(".font_size").click(function () {
            onOff =! onOff;
            $(".font").slideToggle();

            if( $(".font_size").hasClass("sc")){
                if(onOff){
                    $(".font_size").html("字 -");
                }else{
                    $(".font_size").html("字+");
                }
            }else{
                if(onOff){
                    $(".font_size").addClass("font_size1");
                }else{
                    $(".font_size").removeClass("font_size1");
                }
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

        if($(".ce").next().length>0){
            $(".ce").next().prev().append("<span>+</span>");
        }

        if($(".er").next().length>0){
            $(".er").next().prev().append("<span>+</span>")
        }

        $(".sort").click(function () {
            onOff =! onOff;
            $(".aside_nav").slideToggle();
            if(onOff){
                $(".sort").addClass("sort1");
            }else{
                $(".sort").removeClass("sort1");
            }
        });
        $(".ce").click(function () {
            $(this).next().slideToggle();
            if($(this).children("span").html() == "+"){
                $(this).children("span").html("-");
            }else{
                $(this).children("span").html("+");
            }
        });
        $(".er").click(function () {
            $(this).next().slideToggle();
            if($(this).children("span").html() == "+"){
                $(this).children("span").html("-");
            }else{
                $(this).children("span").html("+");
            }
        });
    }




    /* 内页大图轮播 */
    content_banner();
    function content_banner() {
        var oB_S = document.getElementById('content_banner');
        if(oB_S){
            var galleryTop = new Swiper('.gallery-top', {
                slidesPerView: 1,
                autoplayDisableOnInteraction : false,
                paginationClickable: true,
                autoplay: 4000,
                loop:true,
                loopedSlides: 3, //looped slides should be the same

            });
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                slidesPerView: 2,
                touchRatio: 0.2,
                loop:true,
                loopedSlides: 3, //looped slides should be the same
                slideToClickedSlide: true,
                autoplayDisableOnInteraction : false,
                prevButton:'.swiper-button-prev',
                nextButton:'.swiper-button-next'
            });
            galleryTop.params.control = galleryThumbs;
            galleryThumbs.params.control = galleryTop;
        }
    }





});