$(document).ready(function() {
	// banner
	jQuery(".focusBox").slide({ mainCell:".pic",effect:"left", autoPlay:true, delayTime:500,interTime:4000,trigger:"click"});
	// jQuery(".pimgw").slide({mainCell:".bd ul",autoPlay:true,effect:"left"});
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
	// 导航显隐
	$(".main_nav-percent li a").mouseenter(function(event) {
		var _this = $(this);
        timer = setTimeout(function(){
        	var thischild = _this.siblings('ul');console.log(thischild);
        	if(thischild.length != 0){
	        	thischild.fadeIn();
	        }
        }, 400)
	});
    $(".main_nav-percent li").unbind('mouseleave').mouseleave(function(event) {
    	clearTimeout(timer);
        $(this).find('.sub').fadeOut();
    });
// 内页
	$(".listbg li a").click(function(){	
	 	if($(this).next(".second").length > 0){
	 		$(this).next(".second").slideToggle(300);
	 		return false;
	 	}
	})	
});