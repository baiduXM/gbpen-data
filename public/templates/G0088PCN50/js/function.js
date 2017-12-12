
$(document).ready(function() {

// 导航
	$(".menu li").hover(function() {
		var ulLeft = ($(this).width() - $(this).find('.menu-list').width())/2
		$(this).find('.menu-list').css({left:ulLeft}).stop(true, true).slideDown(300);
	}, function() {
		$(this).find('.menu-list').slideUp(300);
	});

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot ol", mainCell:"ul.picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"click" });

// 编辑框
	$("ul.first a").click(function(event) {
		if ($(this).nextAll("ul").length > 0) {
			var a=$(this);
			var thisname = a.attr('class');
			if (thisname == null || thisname == 0) {
				a.nextAll("ul").slideDown(300);
				a.parent().siblings().find('ul').slideUp(500).prevAll("a").removeClass();
				var parent = a.parent().parent("ul").attr('class');
				switch (parent) {
					case "first":
						a.addClass("box-on");
						break;
					case "second":
						a.addClass("box-in");
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

// // 面包屑导航
// 	$(".main-hd span a:last-child").addClass('on');

// 图片列表
	$("ul.product li").hover(function() {
		$(this).find('.name').stop(true, true).animate({bottom:"0px"}, 300);
	}, function() {
		$(this).find('.name').animate({bottom:"-25px"}, 300);
	});


// 产品展示
	if ($(".case-bd .case-last img").length < 2) {
		$(".case-hd").css({display:'none'});
	};
	jQuery(".case-list").slide({ titCell:".case-hd ol li", mainCell:".case-bd ul", effect:"left",interTime:2500, autoPlay:true,delayTime:200, trigger:"click"});
	//小图左滚动切换
	jQuery(".scroll").slide({ mainCell:".case-hd ol",delayTime:100,vis:4,effect:"left",autoPage:true,scroll:4 ,pnLoop:false, autoPlay:true,interTime:7500,prevCell:".sPrev",nextCell:".sNext",pnLoop:false});

});
