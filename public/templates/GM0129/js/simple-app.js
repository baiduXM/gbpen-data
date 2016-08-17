$(function(){
	//Init Navigation
	var holdPosition = 0;
	
	var nav = $('.swiper-nav').swiper({
		slidesPerView:5,
		freeMode:true,
		freeModeFluid:true,
		paginationClickable: true,
		onTouchMove:function(){
		slide_state();
		}
	})
    var swiper = new Swiper('.banner .swiper-container', {
      
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: true
    });	
	 // var aboutswiper = new Swiper('.aboutPic .swiper-container', {
  //       pagination: '.aboutPic .swiper-pagination',
  //       paginationClickable: true,
  //       spaceBetween: 30,
  //   });	
	
})
