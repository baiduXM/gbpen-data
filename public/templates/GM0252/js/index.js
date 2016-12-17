jQuery(document).ready(function($) {
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
	$('.menu .arrow-left').on('click', function(e){
	    e.preventDefault()
	    nav.swipePrev()
		slide_state();
  	})
	 $('.menu .arrow-right').on('click', function(e){
	    e.preventDefault()
	    nav.swipeNext()
		slide_state();
	})
	if($('.menu .swiper-slide').last().hasClass('swiper-slide-visible')){
		$('.menu .arrow-right').addClass("current1");

	}
	function slide_state(){
		if($('.menu .swiper-slide').first().hasClass('swiper-slide-visible')){
			$('.menu .arrow-left').removeClass("current").addClass("current1");	
		}else{
			$('.menu .arrow-left').removeClass("current1").addClass("current");
		}
		if($('.menu .swiper-slide').last().hasClass('swiper-slide-visible')){
			$('.menu .arrow-right').removeClass("current").addClass("current1");
		}else{
			$('.menu .arrow-right').removeClass("current1").addClass("current");
		}
	}

	//Init Pages
	var pages = $('.swiper-pages').swiper({
		noSwiping : true,
	onSlideChangeStart: function(){
        $(".swiper-nav .active").removeClass('active')
        $(".swiper-nav .swiper-slide").eq(pages.activeIndex).addClass('active')  
    },
	});




  // var mySwiper1 = new Swiper('.probox .swiper-container',{
  //   // pagination: '.pagination',
  //   // paginationClickable: true,
  //   slidesPerView: 2,
  //   loop: true
  // })

});