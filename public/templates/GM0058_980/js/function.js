

$(document).ready(function() {
    // 自适应
    $(window).resize(function() {
        $('.swiper-container').height($('.swiper-slide>div').height());
    })

    function pageSlideOver() {
        $('.page-out').on('transitionend',
            function() {
                $(this).removeClass('page-out');

            });
        $('.page-in').on('transitionend',
            function() {
                $(this).removeClass('page-in');

            });

    }
    function foulpage() {
        var scope = ($(".scope").height() < ($(".wrap").height() - $(".fixed_top").height() - $(".foot").height()) ? ($(".wrap").height() - $(".fixed_top").height() - $(".foot").height()) : $(".scope").height());
        if ($(".scope").height() != scope) {
            $(".scope").height(scope);
        }

    }
    foulpage();
    //隐藏导航跟wrap的切换
    $("#header_menu").click('touchstart',
        function() {
            $(".public-bg1").removeClass("page-prev").addClass("page-in");
            $("#quickbar-wrap").removeClass(".page-active").addClass("page-next page-in")
            $(".quickbar-opacity2").css('display', 'block');
            pageSlideOver();


        })

    $("#page_menu").click('touchstart',
        function() {
            $(".page_search").addClass("page_right page-out")
            $(".wrap").removeClass("page_left").addClass("page-next page-in")
            $(".class").removeClass("page-prev").addClass("page-in");
            // $(".opacity2").show()
            pageSlideOver();


        })

    $("#search_btn").click('touchstart',
        function() {

            $(".page_search").removeClass("page_right").addClass("page-in");
            $(".wrap").removeClass("page-active").addClass("page_left page-in")
            pageSlideOver();


        })

    $(".to_page").click('touchstart',
        function() {
            $(".page_search").addClass("page_right page-out")
            $(".wrap").removeClass("page_left").addClass(" page-out")
            pageSlideOver();


        })

    // 控制字体大小
    $(".font_btn").click(function() {
            $(".font").slideToggle();
        })
        // 字体大小控制
    $(".big").click(function() {
        $('html').css('cssText', 'font-size:125%!important');
    })
    $(".normal").click(function() {
        $('html').css('cssText', 'font-size:94%!important');

    })
    $(".small").click(function() {
        $('html').css('cssText', 'font-size:62.5%!important');

    })

    // 返回顶部
    $("#to_top").click('touchstart', function() {
        console.log('text');
        var speed = 300; //滑动的速度
        // $('html,body').animate({scrollTop: 0}, speed);
        /*
        当QuickBar非自定义时,返回顶部事件应取$('#quickbar-wrap-body')dom元素
         */
        $('#quickbar-wrap-body').animate({
            scrollTop: 0
        }, speed);
        return false;
    })

    /*
    classify_btn
     */
    $(".classify_btn").click(function() {
        // $("#up").toggle()
        // $("#down").toggle()
        $("ul.nav").slideToggle();
        // $(".font").slideUp()
    })

    // 产品详情页轮播图  
    if ($('.swiper_container').length) {
        var swiper = new Swiper('.swiper_container', {
            pagination: '.swiper-pagination',
            autoplay: 5000,
            loop: true,
            paginationClickable: true
        });
    }
    if ($('.swiper-container_1').length) {
        var swiper = new Swiper('.swiper-container_1', {
            pagination: '.swiper-pagination',
            autoplay: 5000,
            loop: true,
            paginationClickable: true
        })
    }

});
