/**
 * Created by Administrator on 2017/5/15.
 */
$(function(){
    //scroll
    $("#demo").xb_scroll();


    //nav
        $(".nav li").hover(function(){
            $(this).addClass("current").find(".child").slideDown();
        },function(){
            $(this).removeClass("current").find(".child").slideUp();
        });

   //link
    $(".link li").hover(function(){
        $(this).find(".link-child").slideDown();
    },function(){
        $(this).find(".link-child").slideUp();
    });

    //det-nav
    $(".det-nav li a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                console.log(a);
                var parent = a.parent().parent().attr('class');
                switch (parent) {
                    case "det-nav":
                        a.addClass("box-on");
                        break;
                }
            }else{
                a.removeClass().siblings('ul').slideUp(300);
               a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
            }
            return false;
        }
    });
    jQuery(".multipleLine").slide({titCell:".hd ul",mainCell:".bd .ulWrap",effect:"top",autoPlay:true});
    // jQuery("#product").slide({ mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0 });

    //大图切换
    jQuery("#product").slide({ titCell:".smallImg li", mainCell:".bigImg", effect:"fold", autoPlay:true,delayTime:200,
        startFun:function(i,p){
            //控制小图自动翻页
            if(i==0){ jQuery("#product .sPrev").click() } else if( i%3==0 ){ jQuery("#product .sNext").click()}
        }
    });

    //小图左滚动切换
    jQuery("#product .smallScroll").slide({ mainCell:"ul",delayTime:100,vis:3,scroll:3,effect:"left",autoPage:true,prevCell:".sPrev",nextCell:".sNext",pnLoop:false });

});