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







    banner();

    sec2();

    scrolltop();

    fontSize();

    asideNav();

    asideBanner();




    /* 返回顶部 */
    function scrolltop() {
        $(".back-up").click(function(){$('#quickbar-wrap-body').animate({scrollTop :0}, 800)});
    }

    /* 头部轮播 */
    function banner() {
        var oHeader = document.getElementById('header');
        if( oHeader ){
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: 4000,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoplayDisableOnInteraction : false,
                paginationElement : 'li',
            });
        }
    }

    /* 首页新闻列表滚动 */
    function sec2() {
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 2,
            spaceBetween: 20,
            /*freeMode: true,*/
            loop: true,
            autoplay: 3000,
            autoplayDisableOnInteraction : false,
            paginationClickable: true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }

    /* 字体大小 */
    function fontSize() {
        var onOff = false;
        $(".fontClick").click(function () {
            onOff =! onOff;
            $(".font").slideToggle();
            if( onOff ){
                $(this).html("字<lager style='font-weight: bolder;margin-left: 0.175rem'> -</lager>");
            }else{
                $(this).html("字 +")
            }
        });

        $(".big").click(function () {
            $(".font").slideToggle();
            $(".fontClick").html("字 +");
            $(".change").css("fontSize","0.9rem");
        });
        $(".normal").click(function () {
            $(".font").slideToggle();
            $(".fontClick").html("字 +");
            $(".change").css("fontSize","0.75rem");
        });
        $(".small").click(function () {
            $(".font").slideToggle();
            $(".fontClick").html("字 +");
            $(".change").css("fontSize","0.6rem");
        });
    }

    /* 内页菜单 */
    function asideNav() {
        var two = $(".ce");
        var three = $(".er");

        if(two.next().length>0){
            two.next().prev().append("<span>+</span>");
        }

        if(three.next().length>0){

            three.next().prev().append("<span>+</span>")
        }

        /* 分类 */
        $(".sort").click(function () {
            $('.nnav').slideToggle();
        });
        /* 二级 */
        two.click(function () {
            $(this).next().slideToggle();
            if($(this).children("span").html() == "+"){
                $(this).children("span").html("-");
            }else{
                $(this).children("span").html("+");
            }
        });
        /* 三级 */
       three.click(function () {
            $(this).next().slideToggle();
           if($(this).children("span").html() == "+"){
               $(this).children("span").html("-");
           }else{
               $(this).children("span").html("+");
           }
        })
    }

    /* 内页轮播图 */
    function asideBanner() {
            var swiper = new Swiper('.swiper-container6', {
                loop: true,
                autoplay: 3000,
                paginationClickable: true,
                autoplayDisableOnInteraction : false,
                paginationElement : 'li',
                prevButton:'.swiper-button-prev',
                nextButton:'.swiper-button-next'
            });
    }


});