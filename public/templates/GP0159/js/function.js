$(document).ready(function() {

// 导航栏
	var navLeft = ($("ul.menu>li").width() - $("ul.menu-list").width())/2;
	$("ul.menu-list").css({left:navLeft});

	$("ul.menu>li").hover(function(){
		$(this).find('ul.menu-list').stop(true, true).slideDown(300);
	},function(){
		$(this).find('ul.menu-list').slideUp(300);
	});

// 首页-图片切换
	jQuery("#focusBox").slide({ titCell:".square", mainCell:"#picture ul", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover" });

// 编辑框
	$("ul.first a").click(function(event) {
		if ($(this).next("ul").length > 0) {
			
			var a=$(this);
			var thisname = a.attr('class');
			a.parent().siblings().find("ul").slideUp(300).prev("a").removeClass();
			if (thisname == null || thisname == 0) {
				a.next("ul").slideDown(300);
				a.parent().siblings().find('ul').slideUp(500).prev("a").removeClass();
				var parent = a.parent().parent("ul").attr('class');
				switch (parent) {
					case "first":
						a.addClass("box_on");
						break;
					default:
						a.addClass("box_in");
				}
			}else{
				a.removeClass().next('ul').slideUp(300);
				a.next('ul').find('a').removeClass().next('ul').slideUp(300);
			};
			return false;
		};
	});

// 面包屑导航
	$(".main-hd span a:last-child").addClass('on');

// 产品展示
	if ($(".case-bd img").length<2) {
		$(".case-hd").css({display:"none"});
	};
	jQuery(".case-list").slide({mainCell:".case-last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});

});