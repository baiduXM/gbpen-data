/**
 * Created by Administrator on 2017/7/10.
 */
$(function(){
    /*导航下拉*/
    $(".nav li.nav-li").hover(function () {
        $(this).find("ul").stop(true,true).slideDown();
    }, function () {
        $(this).find("ul").stop(true,true).slideUp();
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
    jQuery(".banBox").slide({mainCell:".bd ul",autoPlay:true});


    /*banner下二维码*/
    $(".icon-btn li.weixin ").hover(function () {
        $(this).find("a").addClass("on");
        $(this).find("div").stop(true,true).slideDown();
    },function () {
        $(this).find("div").stop(true,true).slideUp();
        $(this).find("a").removeClass("on");
    });

    jQuery(".m1-slide").slide({titCell:".hd ul",mainCell:".bd ul",
        autoPage:true,effect:"left",autoPlay:true,vis:5,trigger:"click"});
    jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});

    //判断content-product页面轮播图片的数量，一张的话左右按钮隐藏
    var len=$('.product .bd ul li');
    if(len.length < 2){
        $('.product .hd').hide();
    }
});

    /* 文字限制 */
    limit();
    function limit() {
        $(".limit").each(function () {
            var maxwidth = parseInt($(this).attr("data-limit"));
            if($(this).text().length>maxwidth){
                $(this).text($(this).text().substring(0,maxwidth));
                $(this).html($(this).html()+"...<i>【查看更多】</i>");
            }
        });

    }