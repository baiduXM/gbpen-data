jQuery(document).ready(function($) {
	//banner
	 var mySwiper = new Swiper('#banner',{
	 loop:true,
		autoplay:5000,
		calculateHeight : true,
		pagination : '.pagination',
		
	    //其他设置
	  });  

		//Init Navigation
	var nav = $('.swiper-nav').swiper({
		slidesPerView:4,
		// freeMode:true,
		noSwiping : true,
		// freeModeFluid:true,
		calculateHeight : true,
		visibilityFullFit: true,
		onSlideClick: function(nav){
			pages.swipeTo( nav.clickedSlideIndex )
		}
	})	


	// var nav = $('.swiper-nav').swiper({
	// 	slidesPerView: 'auto',
	// 	freeMode:true,
	// 	noSwiping : true,
	// 	freeModeFluid:true,
	// 	calculateHeight : true,
	// 	visibilityFullFit: true,
	// 	onSlideClick: function(nav){
	// 		pages.swipeTo( nav.clickedSlideIndex )
	// 	}
	// })

	// //Function to Fix Pages Height
	// function fixPagesHeight() {
	// 	$('.swiper-pages').css({
	// 		height: $(window).height()-nav.height-48
	// 	})
	// }
	// $(window).on('resize',function(){
	// 	fixPagesHeight()
	// })
	// fixPagesHeight()

	// //Init Pages
	// var pages = $('.swiper-pages').swiper({
	// 	noSwiping : true,
	// onSlideChangeStart: function(){
 //        $(".swiper-nav .active").removeClass('active')
 //        $(".swiper-nav .swiper-slide").eq(pages.activeIndex).addClass('active')  
 //    },
	// });

  var mySwiper1 = new Swiper('.probox .swiper-container',{
    // pagination: '.pagination',
    // paginationClickable: true,
    slidesPerView: 2,
    loop: true
  })

});