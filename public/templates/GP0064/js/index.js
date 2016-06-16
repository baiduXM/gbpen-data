jQuery(document).ready(function($) {
	//推荐苗木滚动 
	// jQuery(".side_top_ft").slide({mainCell:".side_top_list",autoPlay:true,effect:"leftMarquee",vis:4,interTime:20,});
	$('.side_top_pic').jCarouselLite({
		visible: 4,
		auto: 1000,
		speed: 500,
	}).css({visibility:"visible"});

// 案例展示
	$(".side_case_other li a").hover(function() {
		$(".side_masked p",this).fadeIn(300);
	}, function(){
		$(".side_masked p",this).fadeOut(300);
	});

	jQuery(".side_case_other").slide({mainCell:".ul_side",autoPlay:true,effect:"leftMarquee",vis:5,interTime:30});

});