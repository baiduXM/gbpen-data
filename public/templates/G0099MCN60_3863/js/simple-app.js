$(function(){
	//Init Navigation
	var holdPosition = 0;
	
	var nav = $('.swiper-nav').swiper({
		slidesPerView:4,
		freeMode:true,
		freeModeFluid:true,
		paginationClickable: true,
		onTouchMove:function(){
			slide_state();
		}
	})
	$('.arrow-left').on('click', function(e){
    e.preventDefault()
    nav.swipePrev()
	slide_state();
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    nav.swipeNext()
	slide_state();
  })
	if($('.menulist .swiper-slide').last().hasClass('swiper-slide-visible')){
		$('.arrow-right').addClass("current1");

	}
	function slide_state(){
		if($('.menulist .swiper-slide').first().hasClass('swiper-slide-visible')){
			$('.arrow-left').removeClass("current").addClass("current1");	
		}else{
			$('.arrow-left').removeClass("current1").addClass("current");
		}
		if($('.menulist .swiper-slide').last().hasClass('swiper-slide-visible')){
			$('.arrow-right').removeClass("current").addClass("current1");
		}else{
			$('.arrow-right').removeClass("current1").addClass("current");
		}
	}
	var menuswiper=$('.class .scroll-container').swiper({
			mode:'vertical',
			scrollContainer: true,
			mousewheelControl: true,
			freeModeFluid:true,
			onTouchStart : function() {		 
			 }

		})
	var mySwiper = new Swiper('.baner .swiper-container',{
	pagination: '.pagination',
    paginationClickable: true,
	loop:true,
    mode: 'vertical'
	
  })
	
	
	
	
	
})