
$(document).ready(function() {

// 页脚链接
	jQuery(".chaining").slide({mainCell:"ul.chaining-list",autoPlay:true,effect:"leftMarquee",vis:7,interTime:25});

// 导航
	var navWidth=$("#nav ul.menu>li").width();
	var ulWidth=(navWidth-$(".menu-list").width())/2
	$(".menu-list").css({left:ulWidth})

	$("#nav ul.menu>li").hover(function(){
		$(this).find(".menu-list").stop(true, true).slideDown(500);
	},function(){
		$(this).find(".menu-list").slideUp(500);
	});

// 面包屑导航
	$(".address span a:last-child").addClass('on');

// // 编辑框
	$("ul.first a").click(function(event) {
		if ($(this).nextAll("ul").length > 0) {
			var a=$(this);
			var thisname = a.attr('class');
			if (thisname == null || thisname == 0) {
				a.nextAll("ul").slideDown(300);
				a.parent().siblings().find('ul').slideUp(500).prevAll("a").removeClass();
				a.next("i").removeClass('in')
				var parent = a.parent().parent("ul").attr('class');
				switch (parent) {
					case "first":
						a.addClass("box_on");
						a.next('i').addClass('in')
						break;
					case "second":
						a.addClass("box_in");
						break;
					default:
						a.addClass("box_at");
				}
			}else{
				a.removeClass().nextAll('ul').slideUp(300);
				a.nextAll('ul').find('a').removeClass().nextAll('ul').slideUp(300);
				a.next("i").removeClass('in');
			};
			return false;
		};
	});

// 图片列表
	 $(".product-list li").on("mouseenter mouseleave",function(e) {  
        var w = $(this).width();
        var h = $(this).height();
        var x = (e.pageX - $(this).offset().left - (w / 2)) * (w > h ? (h / w) : 1);
        var y = (e.pageY - $(this).offset().top - (h / 2)) * (h > w ? (w / h) : 1);
        var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
        // console.log('boxli:'+x+','+y);
        /* direction:0,1,2,3 ---> top right bottom left*/  
        var eventType = e.type;  
        var aPos=[{left:0,top:"-100%"},{left:"100%",top:0},{left:0,top:"100%"},{left:"-100%",top:0}];  
        if(eventType == 'mouseenter'){  
            $(this).find('.face').css(aPos[direction]).stop(true,true).animate({left:0,top:0},200);  
        }else{  
            $(this).find('.face').stop(true,true).animate(aPos[direction],200);  
        }  
    });

// 产品展示
	if ($(".case-bd .case-last img").length < 2) {
		$(".scroll").css({display:"none"});
	};
	jQuery(".case-list").slide({ titCell:".case-hd ol li", mainCell:".case-bd ul", effect:"left",interTime:2500, autoPlay:true,delayTime:200, trigger:"click"});
	//小图左滚动切换
	jQuery(".scroll").slide({ mainCell:".case-hd ol",delayTime:100,vis:3,effect:"left",autoPage:true,scroll:3 ,pnLoop:false, autoPlay:true,interTime:7500,prevCell:".sPrev",nextCell:".sNext" });

})

