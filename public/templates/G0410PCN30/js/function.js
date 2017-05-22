$(document).ready(function () {

    /* 导航 */
    nav();
    function nav() {
        $(".nav_li").hover(function () {
           $(this).find("ul").slideToggle();
        });
    }

    /* 轮播图 */
    banner();
    function banner() {
        var galleryTop = new Swiper('.swiper-container1', {
            autoplay: 6000,
            loop: true,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            effect: 'fade'
        });
    }

    /* 产品 */
    pros();
    function pros() {
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 3,
            spaceBetween: 40,
            loop: true,
            autoplay: 5000,
            autoplayDisableOnInteraction : false,
            paginationClickable: true,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }


    mouseover();
    function mouseover() {
        $(".mouse").on("mouseenter", function () {
            var ani =  $(this).find('.animated');
            ani.addClass('bounceIn');
            ani.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                ani.removeClass('bounceIn');
            });
        });
    }


    /* asideNav */
    asideNav();
    function asideNav() {
        var er = $(".er");
        var thr = $(".thr");
        var onOff = false;
        var onOff1 = false;
        if( er.next().length>0 ){
            er.next().prev().append("<span>+</span>");
        }
        if( thr.next().length>0 ){
            thr.next().prev().append("<span>+</span>");
        }
        er.click(function () {
            er.next().slideToggle();
            onOff =! onOff;
            if( onOff ){
                er.next().prev().find("span").html("-");
                er.next().prev().addClass("choose");
            }else{
                er.next().prev().find("span").html("+");
                er.next().prev().removeClass("choose");
            }
        });
        thr.click(function () {
            thr.next().slideToggle();
            onOff1 =! onOff1;
            if( onOff1 ){
                thr.next().prev().find("span").html("-");
                thr.next().prev().addClass("choose");
            }else{
                thr.next().prev().find("span").html("+");
                thr.next().prev().removeClass("choose");
            }
        });
    }

    /* 内页大图轮播 */
    content_banner();
    function content_banner() {
        var galleryTop = new Swiper('.gallery-top', {
            autoplayDisableOnInteraction : false,
            loop:true,
            autoplay: 4000,
            loopedSlides: 5, //looped slides should be the same
            direction : 'vertical'
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 3,
            touchRatio: 0.2,
            loop:true,
            loopedSlides: 5, //looped slides should be the same
            slideToClickedSlide: true,
            autoplayDisableOnInteraction : false,
            direction : 'vertical'
        });
        galleryTop.params.control = galleryThumbs;
        galleryThumbs.params.control = galleryTop;
    }

    /* 首页sec3 */
    sec3();
    function sec3() {
        var oGo = document.getElementById("go");
        if( oGo ){
            $(".go").find("ul").html($(".go").find("ul").html()+$(".go").find("ul").html());
            var wi = ($(".go").find("ul").children("li").width()+53)*$(".go").find("ul").children("li").length-53 + "px";
            $(".go").find("ul").css({"width":wi});

            var timer = setInterval(move,30);

            $(".go").find("ul").mouseenter(function () {
                clearInterval(timer);
            });
            $(".go").find("ul").mouseleave(function () {
                timer = setInterval(move,30);
            });

            function move() {
                if(  $(".go").find("ul").position().left < - $(".go").find("ul").width()/2 ){
                    $(".go").find("ul").css("left",0);
                }
                $(".go").find("ul").css("left",$(".go").find("ul").position().left-1+"px");
            }
        }
    }


    /* 首页地图图片 */
    sec4();
    function sec4() {
        $(".add>ul>li").mouseenter(function () {
           $(this).find(".m1").animate({"top":"56px"},200, function () {
               $(this).css({"top":"0"});
           });
            $(this).find(".m2").animate({"top":"0"},200, function () {
                $(this).css({"top":"-56px"});
            });
        }).mouseleave(function () {
            $(this).find(".m1").animate({"top":"56px"},200, function () {
                $(this).css({"top":"0"});
            });
            $(this).find(".m2").animate({"top":"0"},200, function () {
                $(this).css({"top":"-56px"});
            });
        })

    }



});

function startMove( obj, json, fn ) {
    clearInterval( obj.timer );
    obj.timer = setInterval(function () {
        var bStop = true;
        for( var attr in json ){
            // 1.取当前的值
            var iCur = 0;
            if( attr == 'opacity' ){
                iCur = parseInt(parseFloat(getStyle( obj, attr ))*100);
            }else{
                iCur = parseInt(getStyle( obj, attr ));
            }

            // 2.算速度
            var iSpeed = ( json[attr] - iCur )/8;
            iSpeed = iSpeed > 0 ? Math.ceil( iSpeed ):Math.floor( iSpeed );

            // 3.检测停止与运行动作
            if( iCur != json[attr] ){
                bStop = false;
            }
            if( attr == 'opacity' ){
                obj.style.filter = 'alpha(opacity='+( iCur + iSpeed )+')';
                obj.style.opacity = ( iCur+iSpeed )/100;
            }else{
                obj.style[attr] = iCur + iSpeed + 'px';
            }
        }
        if( bStop ){
            clearInterval( obj.timer );
            fn && fn();
        }
    },10 )
}

function getStyle( obj, attr ) {
    return obj.currentStyle ? obj.currentStyle[attr]:getComputedStyle(obj)[attr];
}
