/**
 * Created by Administrator on 2017/5/3.
 */
$(function() {
    $(".nav li.nav-li").hover(function () {
        $(this).find("ul").slideDown();
    }, function () {
        $(this).find("ul").slideUp();
    });



    $('.slider').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });
    $('.slider2').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });
    $(".product").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        autoPage: true,
        //effect: "left",
        autoPlay: true,
        // vis: 3,
        trigger: "click"
    });


    $('.roundabout_box ul').roundabout({
        duration: 600, // 运动速度
        btnPrev: ".ban_r_btn", // 右按钮
        btnNext: ".ban_l_btn", // 左按钮
        autoplay: true,        // 自动播放
        autoplayDuration: 1500,// 自动播放的时间
        minOpacity: 0,         //最小的透明度www.bcty365.com
        maxOpacity: 1,         //最大的透明度
        reflect: true,         // 为true时是从左向右移动，为false从右向左移动
        startingChild: 3,      // 默认的显示第几张图片
        autoplayInitialDelay: 5000, // 从第几秒时，开始自动播放（默认毫秒）开始的第一次管用
        autoplayPauseOnHover: true, // 鼠标移入元素内是否自动播放，为true不播放，false还自动播放
        enableDrag: true       // 在移动端可以拖拽播放
    });



    /**********左侧nav**************/
    $("ul.one a").click(function (event) {
        if ($(this).siblings("ul").length > 0) {
            var a = $(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                        break;
                    case "three":
                        a.addClass("box-in");
                        break;
                }
            } else {
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('in');
            };
            return false;
        };
    });

});



