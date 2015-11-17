$(function(){
	var menuswiper=$('nav .swiper-container').swiper({
			mode:'vertical',
			scrollContainer: true,
			mousewheelControl: true,
			freeModeFluid:true,
			calculateHeight: true
		})
		
	var nav = $('.swiper-caption').swiper({
		slidesPerView: '3',
		freeMode:true,
		freeModeFluid:true,
		paginationClickable: true
	})	
	
	//幻灯片元素与类"menu_body"段与类"menu_head"时点击
	//$(".nav-menu .drop-down").click(function(){
		//$(this).parent().toggleClass("cur").next(".menu_body").toggleClass("cu").siblings(".menu_body").removeClass("cu");
		//$(this).parent().siblings().removeClass("cur");
		$('nav').find('.swiper-wrapper').css({'transform':'translate3d(0px, 0px, 0px)','-webkit-transform':'translate3d(0px, 0px, 0px)','transition': '0.3s'});
		//menuswiper.reInit();
	//});
	
	
	
})