$(document).ready(function() {

// 焦点图片切换
	jQuery("#banner").slide({ titCell:"ol.dot", mainCell:"ul.picture", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover" });

//首页右侧图片列表
	$("ul.right li").hover(function() {
		$(this).find('.pic-top').stop(true, true).animate({top:"0px"}, 300);
		$(this).find('.pic-bottom').stop(true, true).animate({bottom:'0px'}, 300)
	}, function() {
		$(this).find('.pic-top').animate({top:"-50%"}, 300);
		$(this).find('.pic-bottom').animate({bottom:'-50%'}, 300)
	});

	$(".press").hover(function() {
		$(this).find('.boy').stop(true, true).animate({top:"-96px"}, 300)
	}, function() {
		$(this).find('.boy').animate({top:"-96px"}, 500,function(){
			$(this).animate({top:"0px"}, 300)
		})
	});

// 焦点图片切换
	jQuery(".poster").slide({ titCell:"ol.poster-dot", mainCell:"ul.poster-list", effect:"left",  autoPlay:true, autoPage:true, trigger:"mouseover" });

});
