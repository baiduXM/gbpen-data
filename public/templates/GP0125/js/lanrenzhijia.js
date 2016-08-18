// 代码整理：懒人之家 lanrenzhijia.com
// $(function(){
	
	//实例2: 自顶向下
	// $("#a a").css({backgroundPosition: "-20px 37px"}).mouseover(function(){
	// 	$(this).stop().animate({
	// 		backgroundPosition:"(-20px 94px)"
	// 	},{duration:500})
	// }).mouseout(function(){
	// 	$(this).stop().animate({
	// 		backgroundPosition:"(40px 37px)"
	// 	},{duration:200, complete:function(){
	// 		$(this).css({backgroundPosition: "-20px 37px"})
	// 	}})
	// })
	
	
// });

$(function(){
	
	//实例2: 自顶向下
	// $("#a a#cu").css("background","#feb319");
	$("#a a.first").css({backgroundPosition: "-20px 37px"}).mouseover(function(){
		$(this).stop().animate({
			backgroundPosition:"(-20px 94px)"
		},{duration:500})
		// $(this).next(".sub").stop(true, true).slideDown();
	}).mouseout(function(){
		$(this).stop().animate({
			backgroundPosition:"(40px 37px)"
		},{duration:200, complete:function(){
			$(this).css({backgroundPosition: "-20px 37px"})
		}})
		// $(this).next(".sub").stop(true, true).slideUp();
	});
	$(".m").hover(function() {
		$(this).find(".sub").stop(true, true).slideDown();
	}, function() {
		$(this).find(".sub").slideUp();
	});


	
});