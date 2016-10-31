$(document).ready(function() {

// 导航
	var ulWidth=$("ul.nav").width();//得到ul宽度
	var liLen=$("ul.nav>li").length;//得到li的个数
	$("ul.nav>li").css({width:ulWidth/liLen})
	$(".nav>li:last-child").css({background:"none"});

	$(".nav>li").hover(function() {
		$(this).find('.nav_list').stop(true, true).slideDown(300).prev('a').addClass('in');
	}, function() {
		$(this).find('.nav_list').slideUp(300).prev('a').removeClass('in');
	});

// 大图
	jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover" });
	
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
					case "second":
						a.addClass("box_in");
						break;
					default:
						a.addClass("box_at");
				}
			}else{
				a.removeClass().next('ul').slideUp(300);
				a.next('ul').find('a').removeClass().next('ul').slideUp(300);
			};
			return false;
		};
	});

// 产品图片
	if ($(".slideBox .bd img").length < 2) {
		$(".slideBox a").css({display:"none"});
	};
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"leftLoop"});	

});
