$(document).ready(function(){
	 jQuery(".focus").slide({ titCell:"#tip li", mainCell:"#pic ul",effect:"left",autoPlay:true,delayTime:200 })

		// 产品展示
	$('#prizes .photos-content').jCarouselLite({
		btnPrev: '#prizes a.photos-prev',
		btnNext: '#prizes a.photos-next',
		visible: 5,
		auto: 3000,
		speed: 1000
	}).css({visibility:"visible"});


})