/**
 * Created by Administrator on 2017/7/10.
 */
$(function(){
    $("#demo").xb_scroll();

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
                a.siblings("i").removeClass('in');
                var parent = a.parent().parents("ul").attr('class');
                switch (parent) {
                    case "one":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        a.siblings('i').text('-').parent().siblings().find('a').siblings('i').text('+');
                        break;
                    case "two":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in');
                        a.siblings('i').text('-').parent().siblings().find('a').siblings('i').text('+');
                        break;
                    case "three":
                        a.addClass("box-on");
                        break;
                }
            } else {
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('in');
                a.siblings('i').text('+');
            };
            return false;
        };
    });


    /*首页轮播*/
    jQuery(".banBox").slide({mainCell:".bd ul",autoPlay:true});




    //大图切换
    jQuery(".game163").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", delayTime:200,
        startFun:function(i,p){
            //控制小图自动翻页
            if(i==0){ jQuery(".game163 .sPrev").click() } else if( i%3==0 ){ jQuery(".game163 .sNext").click()}
        }
    });

    //小图左滚动切换
    jQuery(".game163 .smallScroll").slide({ mainCell:"ul",delayTime:200,vis:3,scroll:1,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });

    //判断content-product页面轮播图片的数量，一张的话左右按钮隐藏
    var len=$('.game163 .bigImg li');
    if(len.length < 3){
        $('.smallScroll .pro-btn').hide();
    }

});

