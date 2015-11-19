$(document).ready(function() {
	// banner
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:500,interTime:4000,trigger:"click"});


	// 产品展示
	$('#prizes .photo1').jCarouselLite({
	      btnPrev: '#prizes a.photos-prev',
	      btnNext: '#prizes a.photos-next',
	      visible: 4,
	      auto: 3000,
	      speed: 1000
	}).css({visibility:"visible"});

	$('#prizes .photo2').jCarouselLite({
	      btnPrev: '#prizes a.photos-prev',
	      btnNext: '#prizes a.photos-next',
	      visible: 4,
	      auto: 3000,
	      speed: 1000
	}).css({visibility:"visible"});

// 内页
	$(".listbg li a").click(function(){		
		$(this).next(".second").slideToggle(300);
		return false;
		})	


});