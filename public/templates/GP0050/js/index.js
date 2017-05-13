$(document).ready(function(){
	(function(){
			$('.searchbox').focus(function(){
				if($(this).val()=='请输入关键字'){
					$('.searchbox').val('');
				}
		});
		$('.searchbox').blur(function(){
			if($(this).val()==''){
				$('.searchbox').val('请输入关键字')
			}
		});		
	})();
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