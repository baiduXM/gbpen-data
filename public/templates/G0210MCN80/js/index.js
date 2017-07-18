jQuery(document).ready(function($) {
    var newswiper = new Swiper('.newslist .swiper-container', {
    	loop:true,
        pagination: '.newslist .swiper-pagination',
        paginationClickable: true,
        autoplay : 5000,
    });
 

  // casebox
  var caseSwiper = new Swiper('.casebox .swiper-container',{
        slidesPerView: 'auto'
        // spaceBetween: 30
  })


});