/**
 * Created by Administrator on 2017/5/3.
 */
$(function() {
    $(".nav li.nav-li").hover(function () {
        $(this).find("ul").slideDown();
    }, function () {
        $(this).find("ul").slideUp();
    });
    /**search**/
    $(".search .ser").click(function () {
        $(this).siblings(".form").slideDown();
    });
    $(".close").click(function () {
        $(".search .form").slideUp();
    });

    $('.slider').bxSlider({
        mode: 'fade',
        slideWidth: "",
        auto: true
    });
    $(".picScroll-left").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        autoPage: true,
        effect: "left",
         autoPlay: true,
        vis: 3,
        trigger: "click"
    });
    $(".m4-cont").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        autoPage: true,
        effect: "left",
         //autoPlay: true,
        vis: 6,
        trigger: "click"
    });
    jQuery(".multipleLine").slide({titCell:".hd ul",mainCell:".bd .ulWrap",autoPage:true,autoPlay:true});
    $(".product").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        autoPage: true,
        //effect: "left",
         autoPlay: true,
       // vis: 3,
        trigger: "click"
    });
    /**index-main1**/
    $(".m1-cont li.m1Li:first-child").addClass("current");
    $(".m1Box .m1-child:first-child").show();


    $(".m1-cont li.m1Li").click(function () {
        var liIndex=$(this).index();
        $(this).addClass("current").siblings().removeClass("current");
        $(".m1Box>.m1-child").eq(liIndex).show().siblings().hide();
    });


    /***main3**/
    $(".m1-cont li.m3Li:first-child").addClass("current");
    $(".m3Box .m1-child:first-child").show();


    $(".m1-cont li.m3Li").click(function () {
        var liIndex=$(this).index();
        $(this).addClass("current").siblings().removeClass("current");
        $(".m3Box>.m1-child").eq(liIndex).show().siblings().hide();
    });




    // $(".m1-cont li").click(function () {
    //     $(this).addClass("current").siblings().removeClass("current");
    //     $(this).find(".m1-child").show().parent().siblings().find(".m1-child").hide();
    // });
    $(".m1-text ").each(function(index){
        var aa=$(".m1-text ").eq(index).find(".p-txt").html();
        if (aa.length > 62){
            $(".m1-text ").eq(index).find(".p-txt").siblings("i").html(" ");
            $(".m1-text ").eq(index).find(".p-txt").html(aa.substr(0, 62) + "...<i>【查看更多】</i>")
        }
    });


    /**list*********/
    // var hh=$(".listH").height();
    // $(".det-main .container").height(hh+160);
    // $(".det-search .container").height(hh+200);


    $(".listT ").each(function(index){
        var aa=$(".listT ").eq(index).find(".p-txt").html();
        if (aa.length > 100){
            $(".listT").eq(index).find(".p-txt").siblings("i").html(" ");
            $(".listT").eq(index).find(".p-txt").html(aa.substr(0,100) + "...<i>【查看更多】</i>")
        }
    });


    /**********左侧nav**************/
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
                        //a.siblings('i').addClass('in');
                        break;
                    case "two":
                        a.addClass("box-in");
                        break;
                    case "three":
                        a.addClass("box-on");
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



