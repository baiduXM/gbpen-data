$(document).ready(function() {

// 图片列表
	$(".side-pic li").each(function(index, el) {
		if ( index%2 == 0 ) {
			var picHeight = $(this).height()+52;
			$(this).find('p').css({top:picHeight});
		} else {
			$(this).find('p').css({top:"52px"}).siblings('.pic-list').css({marginTop:"34px"});
		};
	});

	$(".side-pic li a").hover(function() {
		var halfHeight = ($(this).find('.pic-list').height()-80)/2;
		$(this).find('span').stop(true, true).animate({left:"0px"});
		$(this).find("i").stop(true, true).animate({top:halfHeight}, 400)
	}, function() {
		$(this).find('i').animate({top:"-100%"}, 400);
		$(this).find("span").animate({left:"-100%"}, 200);
	});

// 图片展示
 	jQuery(".catpic").slide({mainCell:".catpic-list ul",autoPage:true,effect:"left",autoPlay:true,vis:1,trigger:"click",mouseOverStop:false});


});

