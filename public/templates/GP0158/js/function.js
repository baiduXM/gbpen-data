
$(document).ready(function() {

// 导航
	var num = window.location.href.split("/").length - 1;
	var index = window.location.href.split("/")[num];
	
	if (index == null ||index == 0) {
		$("ul.channel>li:eq(0)>a").addClass('in')
	} else {
		$("ul.channel>li>a[href^='"+index+"']").addClass('in')
	}

	$("ul.channel>li").hover(function(){
		$(this).children('a').children('i').css({color:"#ffffff"});
		$(this).find("ul.nav_list").stop(true, true).slideDown(500);
	},function(){
		$(this).children('a').children('i').css({color:"#333333"});
		$(this).find("ul.nav_list").slideUp(500);
	});

	if ($("ul.channel>li>a").hasClass('in')) {
		var initial = $("ul.channel>li>a.in").parent("li").position().left;
	} else {
		var initial = $("ul.channel>li:eq(0)").position().left;
	};
	var liWidth = $("ul.channel>li>a.in").width();
	$(".ledgement").css({left:initial,width:liWidth});
	$("ul.channel>li").mouseover(function(){
		var thisWidth = $(this).width();
		var leftPosition = $(this).position().left;
		$(".ledgement").stop(true,false).animate({left:leftPosition,width:thisWidth}, 500);
	});
	$("ul.channel").mouseleave(function(event) {
		
		$(".ledgement").stop(true, true).animate({left:initial,width:liWidth},500);
	});

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });

// 面包屑导航
	$(".crumb a:last-child").addClass('on');

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

// 产品展示
	if ($(".case_list .case_bd img").length<=1) {
		$(".case_hd").css({display:"block"})
	}
	jQuery(".case_list").slide({mainCell:".case_last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});


})
