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


    search();
    function search() {
        $(".search").click(function () {
            $(".quickbar_search").addClass("search_show");
            $(".quickbar-opacity2").css("display","block");
        })
    }

    /* 鸟 */
    bird();
    function bird() {
        var birdnum = 0;
        setInterval(function () {
            birdnum++;
            birdnum%=4;
            $(".lamp").children().eq(birdnum).addClass("den").siblings().removeClass("den");
        },1000);

        fly();
        var timer = setInterval(function () { fly(); }, 10000);
        function fly(){
            $(".bird").animate({top:"0.1rem","right":"0"}, 2000,"linear",function(){
                $(this).animate({top:"0.3rem","right":"1rem"}, 2000,"linear",function(){
                    $(this).animate({top:"0.7rem","right":"0.2rem"}, 2000,"linear",function(){
                        $(this).animate({top:"0.5rem","right":"1.2rem"}, 2000,"linear", function () {
                            $(this).animate({top:"0.3rem","right":"0.75rem"}, 2000,"linear");
                        });
                    });
                });
            });
        }
    }


    /* 首页轮播图 */
    banner();
    function banner() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 5000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            paginationElement : 'li',
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }


    zfx();
    /* 标题旁边的动画 */
    setInterval(function () { zfx(); }, 10000);
    function zfx() {
        $(".zfx1").animate({"left":"5rem"},2500,"linear", function () {
            $(".zfx2").animate({"left":"5rem"},2500,"linear", function () {
                $(".zfx2").animate({"left":"0"},2500,"linear", function () {
                    $(".zfx1").animate({"left":"0"},2500,"linear");
                })
            })
        })
    }


    sec2();
    function sec2() {
        $(".c2_h ul").children("li").eq(0).addClass("cho");

        $(".c2_h ul").children("li").eq(0).click(function () {
            $(this).addClass("cho").siblings().removeClass("cho");
            $(".pro_list").children("li").eq(0).animate({"opacity":1},200).show(200).siblings().animate({"opacity":0},200).hide(200);
        });
        $(".c2_h ul").children("li").eq(1).click(function () {
            $(this).addClass("cho").siblings().removeClass("cho");
            $(".pro_list").children("li").eq(1).animate({"opacity":1},200).show(200).siblings().animate({"opacity":0},200).hide(200);
        });
        $(".c2_h ul").children("li").eq(2).click(function () {
            $(this).addClass("cho").siblings().removeClass("cho");
            $(".pro_list").children("li").eq(2).animate({"opacity":1},200).show(200).siblings().animate({"opacity":0},200).hide(200);
        });
    }


    /* 首页轮播图 */
    news();
    function news() {
        var swiper = new Swiper('.swiper-container1', {
            slidesPerView: 3,
            spaceBetween: 10,
            direction : 'vertical',
            freeMode: true
        });
    }

    link();
    function link() {
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 2,
            spaceBetween: 10,
          /*  freeMode: true,*/
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }


    top();
    /* 返回顶部 */
    function top() {
        $(".scrolltop").click(function () {
            $('#quickbar-wrap-body').animate({scrollTop: 0}, 800)
        })
    }

    /* 首页轮播图 */
    asideBanner();
    function asideBanner() {
        var swiper = new Swiper('.swiper-container3', {
            loop: true,
            autoplay: 5000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            paginationElement : 'li',
            pagination: '.swiper-pagination'
        });
    }

    xian();
    function xian() {
        xi();
        setInterval(function () {xi();}, 10000);
        function xi() {
            $(".xian").children("span").animate({"left": "14rem"}, 5000, "linear", function () {
                $(".xian").children("span").animate({"left": "0"}, 5000, "linear");
            });
        }
    }

    /* 字体 */
    font();
    function font() {
        var onOff = false;
        $(".font_size").click(function () {
            onOff =! onOff;
            $(".font").slideToggle();
            if(onOff){
                $(".font_size").html("字 -");
            }else{
                $(".font_size").html("字+");
            }
        });
        $(".big").click(function () {
            $(".change").css("fontSize","0.8rem");
            onOff =! onOff;
            $(".font_size").html("字+");
            $(".font").slideToggle();
        });
        $(".normal").click(function () {
            $(".change").css("fontSize","0.6rem");
            onOff =! onOff;
            $(".font_size").html("字+");
            $(".font").slideToggle();
        });
        $(".small").click(function () {
            $(".change").css("fontSize","0.55rem");
            onOff =! onOff;
            $(".font_size").html("字+");
            $(".font").slideToggle();
        });
    }

    /* 内页导航 */
    asideNav();
    function asideNav() {
        var onOff = false;

        if($(".ce").next().length>0){
            $(".ce").next().prev().append("<span></span>");
        }


        $(".sort").click(function () {
            $(".nnav").slideToggle();
        });
        $(".ce").click(function () {
            $(this).next().slideToggle();
            if($(this).children("span").hasClass("cho")){
                $(this).children("span").removeClass("cho");
            }else{
                $(this).children("span").addClass("cho");
            }
        });
        $(".er").click(function () {
            $(this).next().slideToggle();
        });
    }


    listImageText();
    function listImageText() {
        $(".list-imagetext .content ul").children("li").each(function (i) {
            if( i%2==1 ){
                $(this).children("a").find(".img").css("float","right");
                $(this).children("a").find(".detail").css("float","left");
            }
        })
    }

    contentBanner();
    function contentBanner() {
        var swiper = new Swiper('.swiper-container4', {
            loop: true,
            autoplay: 5000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }


});













