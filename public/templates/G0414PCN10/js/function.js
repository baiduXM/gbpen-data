$(document).ready(function () {

    /* 首页导航 */
    index_nav();
    function index_nav() {
        $('.i_nav').click(function () {
            $(".index_nav").css("display","block").animate({"left":"0","opacity":"1","filter":"alpha(opacity=100)"});
            $(".close").delay(400).css("display","block").animate({"right":"70px","opacity":"1","filter":"alpha(opacity=100)","-webkit-transform":"rotate(360deg)"});
        });
        $(".close").click(function () {
            $(this).parent().animate({"left":"-600px","opacity":"0","filter":"alpha(opacity=0)"},function () {
                $(this).css("display","none");
                $(".close").css({"right":"230px","-webkit-transform":"rotate(0)","opacity":"0","filter":"alpha(opacity=0)","display":"none"});
            });
        });
    }


    /* 产品推荐 */
   banner_left();
    function banner_left() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 6000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }

    /* 首页大图轮播 */
    banner();
    function banner() {
        var galleryTop = new Swiper('.gallery-top', {
            autoplay: 6000,
            loop: true,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            direction : 'vertical',
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
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
    }

    /* 内页侧边菜单 */
    asideNav();
    function asideNav() {
        var two = $(".er");
        var three = $(".thr");

        /* 初始化 */
        if(two.next().length>0){
            two.next().prev().attr("href","javascript:;");
        }
        if(three.next().length>0){
            three.next().prev().attr("href","javascript:;")
        }

        /* 二级 */
        two.click(function () {
            $(this).next().slideToggle();
        });
        /* 三级 */
        three.click(function () {
            $(this).next().slideToggle();
        })
    }

    /* 内页大图轮播 */
    content_banner();
    function content_banner() {
        var swiper = new Swiper('.swiper-container4', {
            loop: true,
            autoplay: 6000,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            prevButton:'.swiper-button-prev',
            nextButton:'.swiper-button-next'
        });
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
