$(document).ready(function() {
// 导航
	$("ul.subnav").each(function(l, ul) {
		var ulLeft = ($(this).parent("li").width() - $(this).width())/2;
		$(this).css({left:ulLeft});
	});
	$(".nav>li").hover(function() {
		$(this).find('ul.subnav').stop(true, true).slideDown(300);
	}, function() {
		$(this).find('ul.subnav').slideUp(300);
	});

// 内页焦点图片切换
    jQuery(".banner").slide({ titCell:".dot ol", mainCell:"ul.pic", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

// 编辑框
    $("ul.first a").click(function(event) {
        if ($(this).siblings("ul").length > 0) {
            var a=$(this);
            var thisname = a.attr('class');
            if (thisname == null || thisname == 0) {
                a.siblings("ul").slideDown(300);
                a.parent().siblings().find('ul').slideUp(500).siblings("a").removeClass();
                a.siblings("i").removeClass('in')
                var parent = a.parent().parent("ul").attr('class');
                switch (parent) {
                    case "first":
                        a.addClass("box-on");
                        a.siblings('i').addClass('in')
                        break;
                    case "second":
                        a.addClass("box-in");
                        break;
                    default:
                        a.addClass("box_at");
                }
            }else{
                a.removeClass().siblings('ul').slideUp(300);
                a.siblings('ul').find('a').removeClass().siblings('ul').slideUp(300);
                a.siblings("i").removeClass('in');
            };
            return false;
        };
    });

// 面包屑导航
	$(".main-hd span a:last-child").addClass('on');

// 文字列表页图片切换
    jQuery(".roll").slide({ titCell:".roll-dot ol", mainCell:"ul.roll-list", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

// 产品展示
    if ($(".case-bd img").length < 2) {
        $(".scroll").css({display:"none"});
    };
    jQuery(".case").slide({ titCell:".case-hd ol li", mainCell:".case-bd ul", effect:"left",interTime:2500, autoPlay:true,delayTime:200, trigger:"click", startFun:function(i){
            $(".case-hd ol li:eq("+i+")").find('em').css({filter:"Alpha(opacity=0)"}).animate({opacity:"0"}, 400);
            $(".case-hd ol li:eq("+i+")").siblings().find('em').css({filter:"Alpha(opacity=50)"}).animate({opacity:"0.5"}, 400);
        }
    });
    //小图左滚动切换
    jQuery(".scroll").slide({ mainCell:".case-hd ol",delayTime:100,vis:4,effect:"left",autoPage:true,scroll:4 ,pnLoop:false, autoPlay:true,interTime:10000,prevCell:".sPrev",nextCell:".sNext",pnLoop:false});


});
