
$(document).ready(function() {

// 导航
	var ulWidth=$(".menu").width();//得到ul宽度
	    var liLen=$(".menu>ul>li").length;//得到li的个数
	    $(".menu>ul>li").css({width:ulWidth/liLen})

	$("#menu>ul>li>a").wrapInner('<span class="out"></span>' ).append('<span class="bg"></span>');
	$("#menu>ul>li>a").each(function(){
		$('<span class="over">' +  $(this).text() + '</span>').appendTo(this);
	});

	$("#menu>ul>li").hover(function(){
		$(".out",this).stop().animate({'top':'38px'},250);
		$(".over",this).stop().animate({'top':'0px'},250);
		$(".bg",this).stop().animate({'top':'0px'},120);
		$(this).find("ul.nav_list").stop(true, true).slideDown(300);
	},function(){
		$(".out",this).stop().animate({'top':'0px'},250);
		$(".over",this).stop().animate({'top':'-38px'},250);
		$(".bg",this).stop().animate({'top':'-38px'},120);
		$(this).find("ul.nav_list").slideUp(300);
	});

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover" });


// 面包屑导航
	$(".detal_s>h3>span>a:last-child").addClass('on');
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

// 产品展示
	jQuery(".case_list").slide({mainCell:".case_last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});


})
