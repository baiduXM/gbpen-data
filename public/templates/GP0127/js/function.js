
$(document).ready(function() {

// 导航
	$("ul.nav>li").hover(function(){
		$(this).find("ul.nav_list").stop(true, true).slideDown(500);
	},function(){
		$(this).find("ul.nav_list").slideUp(500);
	});

// 焦点图片切换
	jQuery("#banner").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });


// 面包屑导航
	$("..lujin a:last-child").addClass('on');

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
	if ($(".case_bd img").length<2) {
		$(".case_hd").css({display:"none"});
	};
	jQuery(".case_list").slide({mainCell:".case_last",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});


})
