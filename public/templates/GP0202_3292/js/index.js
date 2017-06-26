$(document).ready(function() {

// 焦点图片切换
    if ($("ul.picture img").length <= 3) {
        $(".scroll>a").css({display:"none"});
    };
    jQuery("#banner").slide({ titCell:".dot ol li", mainCell:"ul.picture", effect:"left",interTime:2500, autoPlay:true,delayTime:200, trigger:"click", startFun:function(i){
            $(".dot ol li:eq("+i+")").find('em').css({filter:"Alpha(opacity=0)"}).animate({opacity:"0"}, 400);
            $(".dot ol li:eq("+i+")").siblings().find('em').css({filter:"Alpha(opacity=80)"}).animate({opacity:"0.8"}, 400);
            var j = i%3;
            $(".border").animate({left:j*337}, 200);
        }
    });
    //小图左滚动切换
    jQuery(".scroll").slide({ mainCell:".dot ol",delayTime:100,vis:3,effect:"left",autoPage:true,scroll:3 ,pnLoop:false, autoPlay:true,interTime:7500,prevCell:".sPrev",nextCell:".sNext",pnLoop:false});

//栏目二图片轮播
    jQuery(".apartment").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50,trigger:"click"});


});
