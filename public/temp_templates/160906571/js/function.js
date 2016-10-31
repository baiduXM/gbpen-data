$(document).ready(function() {   

    $(window).load(function() {
        var img = new Image();
        img.src = $("ul.nav li img").attr("src");

        $(".class-m").height($(".class").outerHeight() - $(".class-top").outerHeight())

        $(".about,.news").height($("ul.nav li").height())

    });

    $(window).resize(function() {

        $(".class-m").height($(".class").outerHeight() - $(".class-top").outerHeight())

        $(".about,.news").height($("ul.nav li").height())    

         $('.swiper-container').height($('.swiper-slide>div').height());   
    })

    function pageSlideOver() {
        $('.page-out').live('transitionend', 
        function() {
            $(this).removeClass('page-out');

        });
        $('.page-in').live('transitionend', 
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

    //导航滚动时间控制page_search
    $(window).scroll( function() { 
        var left_nav = $(".class"),
        page_search = $(".page_search"),
        l_h = left_nav.height(),
        s_h = page_search.height(),
        w_h = $(window).height(),
        lw_h = l_h - w_h,
        sw_h = s_h - w_h;
        
        
        if (lw_h > 0) {

            if ($(document).scrollTop() < lw_h) {
              left_nav.css({
                  position: 'absolute',
                  top: 0
              });
            } else if ($(document).scrollTop() >= lw_h) {
              left_nav.css({
                  position: 'fixed',
                  top: -lw_h + 'px'
              });
            }
        }

        
        if (sw_h) {

            if ($(document).scrollTop() < sw_h) {
              page_search.css({
                  position: 'absolute',
                  top: 0
              });
            } else if ($(document).scrollTop() >= sw_h) {
              page_search.css({
                  position: 'fixed',
                  top: -sw_h + 'px'
              });
            }
        }
    });

    //隐藏导航跟wrap的切换
    $("#header_menu,#bottom_menu").click('touchstart', 
    function() {
        $(".class").removeClass("page-prev").addClass("page-in");
        $(".wrap").removeClass("page-active").addClass("page-next page-in")
        $(".opacity2").show()
        pageSlideOver();


    })
    $("#page_menu").click('touchstart', 
    function() {
        $(".page_search").addClass("page_right page-out")
        $(".wrap").removeClass("page_left").addClass("page-next page-in")
        $(".class").removeClass("page-prev").addClass("page-in");
        $(".opacity2").show()
        pageSlideOver();


    })
    
    // 显示搜索层
    $("#search_btn").click('touchstart', 
    function() {
        $(".page_search").removeClass("page_right").addClass("page-in");
        $(".wrap").removeClass("page-active").addClass("page_left page-in")
        pageSlideOver();


    })
    // 关闭弹出层，显示wrap页面
    $(".class-close,.opacity2").click('touchstart', 
    function() {
        $(".class").addClass("page-prev page-out")
        $(".wrap").removeClass("page-next").addClass(" page-out")
        $(".opacity2").hide()
        $(".newsclass").removeClass("show")
        pageSlideOver();


    })
    // 搜索页与wrap切换
    $(".to_page").click('touchstart', 
    function() {
        $(".page_search").addClass("page_right page-out")
        $(".wrap").removeClass("page_left").addClass(" page-out")
        pageSlideOver();


    })
    // 字体大小控制
    $(".big").click(function() {
        $('html').css('cssText', 'font-size:125%!important');
    })
    $(".normal").click(function() {
        $('html').css('cssText', 'font-size:109%!important');

    })
    $(".small").click(function() {
        $('html').css('cssText', 'font-size:94%!important');

    })

    // 产品详情页轮播图
    var swiper = new Swiper('.swiper-container_1',{        
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        autoplay : 3000
    });
});