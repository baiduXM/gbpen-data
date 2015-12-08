jQuery(document).ready(function($) {
		//首页banner切换
    var swiper = new Swiper('.banner.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

	//首页产品切换
    	  var swiper = new Swiper('.pro .swiper-container', {
     
        slidesPerView: 2,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
    });


});