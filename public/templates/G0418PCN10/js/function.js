$(document).ready(function () {


    nav();
    /* 导航 */
    function nav() {
        $(".nav_li").hover(function () {
            $(this).children("ul").slideToggle();
        });




    }





    banner();
    /* 轮播图 */
    function banner() {
        var mySwiper = new Swiper('.swiper-container',{
            pagination: '.pagination',
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 6000,
        })
        
        $(".swiper-container .pagination .swiper-pagination-switch").each(function ( i ) {
            $(this).html(i+1);
        })
    }


    logo();
    function logo() {
        $(".logo a").addClass("transition1 rotate");
    }

    news();
    /* 首页新闻 */
    function news() {
        var mySwiper = new Swiper('.swiper-container1',{
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 4000,
            slidesPerView: 4,
            spaceBetween: 20
        })
    }

    aside_banner();
    /* 内页头部轮播图 */
    function aside_banner() {
        var mySwiper = new Swiper('.swiper-container2',{
            pagination: '.pagination',
            loop:true,
            grabCursor: true,
            paginationClickable: true,
            autoplayDisableOnInteraction : false,
            autoplay: 6000,
        })
    }


    /* aside_nav */
    $("ul.asideNav>li").hover(function(){
        $(this).children("ul").stop(true, true).slideDown(500);
    },function(){
        $(this).children("ul").slideUp(500);
    });



    listImage();
    function listImage() {
        $(".image_ul li").hover(function () {
            $(this).find(".img").stop(true, true).animate({"width":"200px","height":"200px","marginTop":"-100px","marginLeft":"-100px"},200);
            $(this).find(".img_border").stop(true, true).addClass("change");
        },function () {
            $(this).find(".img").animate({"width":"250px","height":"250px","marginTop":"-125px","marginLeft":"-125px"},200);
            $(this).find(".img_border").removeClass("change");

        })

    }



    /* 限制文本的字数 */
    $(".xz").each(function(){
        var maxwidth=parseInt($(this).attr("data-limit"));
        if($(this).text().length>maxwidth){
            $(this).text($(this).text().substring(0,maxwidth));
            $(this).html($(this).html()+'...');
        }
    });




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

                direction : 'vertical'
            });
            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 30,
                slidesPerView: 2,
                touchRatio: 0.2,
                loop:true,
                loopedSlides: 3, //looped slides should be the same
                slideToClickedSlide: true,
                autoplayDisableOnInteraction : false,
                direction : 'vertical',
                prevButton:'.swiper-button-prev',
                nextButton:'.swiper-button-next'
            });
            galleryTop.params.control = galleryThumbs;
            galleryThumbs.params.control = galleryTop;
        }
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
