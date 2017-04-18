$(document).ready(function(){

	    jQuery(".focusBox").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"top", autoPlay:true, autoPage:true });
		// 产品展示
		$('#prizes .photos-content').jCarouselLite({
			btnPrev: '#prizes a.photos-prev',
			btnNext: '#prizes a.photos-next',
			visible: 4,
			auto: 3000,
			speed: 1000
		}).css({visibility:"visible"});
    jQuery(".pro_img").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"top", autoPlay:true, autoPage:true });


});