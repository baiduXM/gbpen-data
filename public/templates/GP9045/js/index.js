$(document).ready(function(){
	 jQuery(".focus").slide({ titCell:"#tip li", mainCell:"#pic ul",effect:"left",autoPlay:true,delayTime:200 })

		// 产品展示
	if ($("#prizes").lenght>0) {
		$('#prizes .photos-content').jCarouselLite({
		btnPrev: '#prizes a.photos-prev',
		btnNext: '#prizes a.photos-next',
		visible: 5,
		auto: 1000,
		speed: 500
	}).css({visibility:"visible"});
	}
	



})