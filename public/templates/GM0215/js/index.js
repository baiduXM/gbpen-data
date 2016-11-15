jQuery(document).ready(function($) {
		//Init Navigation
	var nav = $('.swiper-nav').swiper({
		slidesPerView: 'auto',
		freeMode:true,
		noSwiping : true,
		freeModeFluid:true,
		calculateHeight : true,
		visibilityFullFit: true,
		onSlideClick: function(nav){
			pages.swipeTo( nav.clickedSlideIndex )
		}
	})

	//Function to Fix Pages Height
	function fixPagesHeight() {
		$('.swiper-pages').css({
			height: $(window).height()-nav.height-48
		})
	}
	$(window).on('resize',function(){
		fixPagesHeight()
	})
	fixPagesHeight()

	//Init Pages
	var pages = $('.swiper-pages').swiper({
		noSwiping : true,
	onSlideChangeStart: function(){
        $(".swiper-nav .active").removeClass('active')
        $(".swiper-nav .swiper-slide").eq(pages.activeIndex).addClass('active')  
    },
	})
});