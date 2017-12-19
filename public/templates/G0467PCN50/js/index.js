/**
 * Created by Administrator on 2017/7/10.
 */
$(function(){
    /*导航下拉*/
    $(".nav li.nav-li").hover(function () {
        $(this).find("ul").slideDown();
    }, function () {
        $(this).find("ul").slideUp();
    });
    /*左侧nav*/
    $("ul.one a").click(function (event) {
        if ($(this).siblings("ul").length > 0) {
            var a = $(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                // a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        // a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-on");
                        break;
                    case "three":
                        a.addClass("box-on");
                        break;
                }
            } else {
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                // a.siblings("i").removeClass('in');
            };
            return false;
        };
    });


    /*首页轮播*/
    $('.sliderBan').bxSlider({
        mode: 'fade',
        slideWidth: ""
       // auto: true
    });
    /*首页选项卡*/
    $(".m2-list ul:first-child").addClass("on");
    $(".m2-tab li").click(function () {
        var m2Index=$(this).index();
        $(".m2-list ul").eq(m2Index).addClass("on").siblings().removeClass("on");
    });
    /*内页轮播*/
    $('.slider2').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });

    /*点击首页banner上的箭头向下滚动*/
    $("#banBottom").click(function (e) {
        e.preventDefault();
        var banHeight=$("#banner").height();
        $("body").animate({scrollTop:banHeight},500);
    });

    /*banner全屏*/
    myFunction();
    $(window).resize(function(){
        myFunction();
    });

    $(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click"});


    //大图切换
    $(".product").slide({ titCell:".smallImg li", mainCell:".bigImg",autoPlay:true, effect:"fold", delayTime:200,
        startFun:function(i,p){
            //控制小图自动翻页
            if(i==0){ jQuery(".product .sPrev").click() } else if( i%2==0 ){ $(".product .sNext").click()}
        }
    });

    //小图左滚动切换
    $(".product .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:2,scroll:2,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });


});
function myFunction() {
    /*banner全屏*/
    var bWidth=$(window).width();
    var bHeight=$(window).height();
    $("#banner .bx-viewport").width(bWidth);
    $("#banner .bx-viewport").height(bHeight);
}