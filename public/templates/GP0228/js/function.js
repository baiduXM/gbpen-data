jQuery(document).ready(function($) {
	
// 全屏焦点图片切换
	jQuery(".banners").slide({ titCell:".dot", mainCell:".picture", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover" });

// 导航
	$(".nav>li").hover(function(){
		$(this).find("ul.nav_list").stop(true, true).slideDown(300);
	},function(){
		$(this).find("ul.nav_list").slideUp(300);
	});

// 编辑框
		$("ul.first a").click(function(event) {
			if ($(this).next("ul").length > 0) {
				
				var a=$(this);
				var thisname = a.attr('class');
				$(this).parent().siblings().find("ul").slideUp(300).prev("a").removeClass();
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
					$(this).removeClass().next('ul').slideUp(300);
					$(this).next('ul').find('a').removeClass().next('ul').slideUp(300);
				};
				return false;
			};
		});

// 产品展示
	if ($(".case_list img").length > 0) {
		jQuery(".case").slide({mainCell:".case_list",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});
	}
	

});