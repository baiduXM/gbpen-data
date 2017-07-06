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
    jQuery("#product").slide({ mainCell:".bd ul",effect:"top",autoPlay:true,triggerTime:0 });
});