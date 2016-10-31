
$(document).ready(function() {

// 导航
	var num = window.location.href.split("/").length - 1;
	var index = window.location.href.split("/")[num];
	
	if (index == null ||index == 0) {
		$("ul.menu>li:eq(0)>a").addClass('in')
	} else {
		$("ul.menu>li>a[href^='"+index+"']").addClass('in')
	}

	$("ul.menu>li").hover(function(){
		var ulLeft = ($(this).width() - $(this).find("ul.menu-list").width())/2-10;
		$(this).find("ul.menu-list").css({left:ulLeft})
		$(this).find("ul.menu-list").stop(true, true).slideDown(500);
	},function(){
		$(this).find("ul.menu-list").slideUp(500);
	});

	if ($("ul.menu>li>a").hasClass('in')) {
		var initial = $("ul.menu>li>a.in").parent("li").position().left;
	} else {
		var initial = $("ul.menu>li:eq(0)").position().left;
	};
	var liWidth = $("ul.menu>li>a.in").width()-18;
	$(".rectangle").css({left:initial,width:liWidth});
	$("ul.menu>li").mouseover(function(){
		var thisWidth = $(this).children('a').width()-18;
		var leftPosition = $(this).position().left;
		$(".rectangle b").css({display:"block"});
		$(".rectangle").stop(true,false).animate({left:leftPosition,width:thisWidth}, 500);
	});
	$("ul.menu").mouseleave(function(event) {
		$(".rectangle").stop(true, true).animate({left:initial,width:liWidth},500,function(){
			$(this).find("b").css({display:"none"});
		});
	});

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot ol", mainCell:"ul.picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover" });

// 编辑框
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
						a.addClass("box-on");
						a.next('i').addClass('in')
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

// 面包屑导航
	$(".main-hd span a:last-child").addClass('on');
	
// 产品展示
	if ($(".case-bd .case-last img").length < 2) {
		$(".case-hd").css({display:'none'});
	};
	jQuery(".case-list").slide({mainCell:".case-last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});

})

