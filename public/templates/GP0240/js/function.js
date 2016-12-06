$(document).ready(function() {

		$(function() {
	    if (window.PIE) {
	        $('.rounded').each(function() {
	            PIE.attach(this);
	        });
	    }
	});

	// banner切换 
	jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold", autoPlay:true});
	
	// 导航
	var half = $(".nav>li.m").length/2 - 1;
	$(".nav>li.m").each(function(index,el) {
		if (index == half) {
			$(this).css({marginRight: '210px'});
		};
		var liWidth = $(this).innerWidth();
		var subbgLeft = (liWidth - 9)/2;
		var liLeft = $(this).position().left+subbgLeft;
		$(this).find('.subbg').css({left: liLeft});
		if (index < half+1) {
			$(this).find('.sub ul').css({textAlign:"left"})
		}else{
			$(this).find('.sub ul').css({textAlign:"right"})
		};		
	});
	$(".nav>li.m").hover(function() {		
		$(this).find('.sub').stop(true, true).fadeIn(300);
		$(this).find('img').addClass('animated bounce');
	}, function() {
		$(this).find('.sub').stop(true, true).fadeOut(300);
		$(this).find('img').removeClass('animated bounce');
	});

	//logo淡入
	setInterval(show,1000);
	function show()
	{
		$(".mid").fadeIn(300,function(){
			$(".sma").fadeIn();
		});
	}

	// 首页文字列表
 	jQuery(".newslist").slide({titCell:".hd ul li",mainCell:".bd ul",autoPlay:true,delayTime:800,triggerTime:300,interTime:5000 });
 
 	// 首页链接滚动
	jQuery(".picScroll").slide({ mainCell:"ul", effect:"leftMarquee", vis:5, autoPlay:true, interTime:50, switchLoad:"_src" });

 	//二级分类
	$(".aboutNav>li>a").click(function(){
		if ($(this).siblings("dl").length > 0) {
			$(this).parent().siblings().find(".second").slideUp()
		    $(this).siblings(".second").slideToggle()
			return false;
		};
	})
	$(".second>dd>a").click(function () {
		if ($(this).siblings("dl").length > 0) {
		    $(this).parent().siblings().find(".third").slideUp()
		    $(this).siblings(".third").slideToggle()
		    return false;
		};
	})

});